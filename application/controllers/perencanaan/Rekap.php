<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends MY_Controller {

	private $form;
	private $modelAlias = 'pm';
	private $alias = 'ms_fppbj';
	private $module = 'rekap';
	private $admin = null;
	private $pdfService;

	public function __construct() {
		parent::__construct();
		include_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';
		
		$this->load->model('Pemaketan_model', 'pm');
		$this->load->model('Fppbj_model', 'fm');
		$this->load->model('Main_model', 'mm');
		$this->load->library('session');
		
		$this->initializeForm();
		$this->admin = $this->session->userdata('admin');
		$this->getData = $this->pm->getDataRekap($year);
		$this->getDataYear = $this->pm->getDataYear($year);
		$this->approveURL = site_url('/perencanaan/rekap/save/');
		$this->form_validation->set_rules($this->form['form']);
	}

	private function initializeForm() {
		$this->form = [
			'form' => [
				[
					'field' => 'note',
					'type' => 'tinymce',
					'label' => 'Catatan',
				],
				[
					'type' => 'date',
					'label' => 'Tanggal Closing',
					'field' => 'date_close',
				],
				[
					'field' => 'lampiran',
					'type' => 'file',
					'label' => 'Lampiran beserta ttd basah',
					'upload_path' => base_url('assets/lampiran/rekap/'),
					'upload_url' => site_url('perencanaan/rekap/upload_lampiran'),
					'allowed_types' => '*',
				]
			],
			'successAlert' => 'Berhasil mengubah data!',
		];
	}

	public function index() {
		$this->setBreadcrumb('Rekap Perencanaan Pertahun');
		$this->header = 'Rekap Perencanaan';
		$this->content = $this->load->view('perencanaan/rekap/index', [], TRUE);
		$this->script = $this->load->view('perencanaan/rekap/index_js', [], TRUE);
		parent::index();
	}

	public function year($year = "") {
		$this->setBreadcrumb('Rekap Perencanaan', $year);
		
		$data = [
			'year' => $year,
			'is_close' => $this->pm->is_close($year)
		];
		
		$this->header = 'Rekap Perencanaan - ' . $year;
		$this->content = $this->load->view('perencanaan/rekap/year/list', $data, TRUE);
		$this->script = $this->load->view('perencanaan/rekap/year/list_js', $data, TRUE);
		parent::index();
	}

	private function setBreadcrumb($title, $year = null) {
		$this->breadcrumb->addlevel(1, [
			'url' => site_url('perencanaan/rekap'),
			'title' => $title
		]);
		
		if ($year) {
			$this->breadcrumb->addlevel(2, [
				'url' => site_url('year/' . $year),
				'title' => $year
			]);
		}
	}

	public function getDataYear($year = null) {
		$config['query'] = $this->pm->getDataYear($this->form, $year);
		$return = $this->tablegenerator->initialize($config);
		echo json_encode($return);
	}
	
	public function getData($id = null) {
		$config['query'] = $this->getData;
		$return = $this->tablegenerator->initialize($config);
		echo json_encode($return);
	}

	public function getSingleData($id = null) {
		$admin = $this->session->userdata('admin');
		$param_ = $this->getParamBasedOnRole($admin['id_role']);
		
		$this->form['url'] = site_url('fppbj/approve/' . $id . '/' . $param_);
		$this->form['button'] = $this->getButtonsBasedOnRole($admin['id_role']);
		
		parent::getSingleData($id);
	}

	private function getParamBasedOnRole($roleId) {
		switch ($roleId) {
			case 4: return 1;
			case 3: return 2;
			case 2: return 3;
			default: return '';
		}
	}

	private function getButtonsBasedOnRole($roleId) {
		if (in_array($roleId, [2, 3, 4])) {
			return [
				[
					'type' => 'export',
					'link' => $this->form['url'],
					'label' => '<i style="line-height:25px;" class="fas fa-thumbs-up"></i>&nbsp;Setujui Data'
				],
				[
					'type' => 'cancel',
					'label' => 'Tutup'
				]
			];
		}
		
		return [
			[
				'type' => 'cancel',
				'label' => 'Tutup'
			]
		];
	}

	public function approve($year) {
		$this->session->set_userdata('year', $year);
		
		$this->form['url'] = $this->approveURL;
		$this->form['button'] = [
			[
				'type' => 'submit',
				'label' => '<i class="fas fa-upload"></i>&nbsp;Upload',
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
		
		echo json_encode($this->form);
	}

	public function save($data = null) {
		$save = $this->input->post();
		$save['id_fppbj'] = $this->session->userdata('export_id');
		$save['year'] = $this->session->userdata('year');
		$save['entry_stamp'] = timestamp();
		
		if ($this->{$this->modelAlias}->approve($save)) {
			$this->session->set_flashdata('msg', $this->successMessage);
			$this->deleteTemp($save, $save['lampiran']);
			redirect(site_url('perencanaan/rekap/year/' . $save['year']));
		}
	}

	public function export($year = null) {
		$this->load->service('PdfService');
		$pdf = $this->pdfservice->generateRekapPdf($year);
		$pdf->stream("Rekap Perencanaan Pengadaan - " . $year . ".pdf", ["Attachment" => 1]);
	}

	public function form_rekap_pdf($year) {
		$this->initializeFormForPdf($year);
		echo json_encode($this->form);
	}

	private function initializeFormForPdf($year) {
		$this->form = [
			'form' => [
				[
					'field' => 'no',
					'type' => 'text',
					'label' => 'Nomor'
				],
				[
					'field' => 'tanggal',
					'type' => 'date',
					'label' => 'Tanggal'
				],
				[
					'field' => 'description',
					'type' => 'tinymce',
					'label' => 'Deskripsi',
				]
			]
		];
		
		$data = $this->fm->get_description();
		$this->populateFormValues($data);
		
		$this->form['url'] = site_url('perencanaan/rekap/rekap_pdf/' . $year);
		$this->form['button'] = [
			[
				'type' => 'submit',
				'label' => 'Export',
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
	}

	private function populateFormValues($data) {
		foreach ($this->form['form'] as $key => $element) {
			$this->form['form'][$key]['value'] = $data[$element['field']] ?? '';
			
			if ($element['type'] == 'date_range') {
				$this->form['form'][$key]['value'] = array_map(
					function($field) use ($data) {
						return $data[$field] ?? '';
					},
					$element['field']
				);
			}
		}
	}

	public function rekap_pdf($year = null) {
		$this->load->service('PdfService');
		$pdf = $this->pdfservice->generateRekapPdf($year, $this->input->post());
		$pdf->stream("Rekap Perencanaan Pengadaan - " . $year . ".pdf", ["Attachment" => 1]);
	}

	public function form($action, $id = "") {
		$data = [
			'action' => $action,
			'admin' => $this->session->userdata('admin'),
			'id' => $id
		];
		
		$this->setBreadcrumb('Tutup Perencanaan');
		$this->header = 'Tutup Perencanaan';
		$this->content = $this->load->view('perencanaan/rekap/form', $data, TRUE);
		$this->script = $this->load->view('perencanaan/rekap/form_js', $data, TRUE);
		parent::index();
	}
}
