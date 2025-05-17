<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fp3 extends MY_Controller
{
	public $form;
	public $modelAlias 	= 'fp3';
	public $alias 		= 'ms_fp3';
	public $module 		= 'kurs';

	public $current_year = 2023;
	
	// Base form configuration to reduce duplication
	private $baseFormConfig;

	public function __construct()
	{	
		parent::__construct();
		log_message('error', 'start year');
        log_message('error', $this->current_year);
        log_message('error', 'end year');
		
		$this->load->model('Fp3_model', 'fp3');
		$this->load->model('Fppbj_model', 'fm');
		$this->load->model('Main_model', 'mm');
		$this->load->model('pengadaan_model', 'pm');

		$this->load->library('pdf');
		include_once APPPATH . 'third_party/dompdf2/dompdf_config.inc.php';

		// Initialize base form configuration
		$this->baseFormConfig = [
			'form' => [
				[
					'field'	=> 	'status',
					'type'	=>	'fp3',
					'label'	=>	'FP3',
				],
				[
					'field'	=> 	'id_fppbj',
					'type'	=>	'dropdown',
					'label'	=>	'Nama Pengadaan (Lama)',
					'rules' =>	'required'
				],
				[
					'field'	=> 	'nama_pengadaan',
					'type'	=>	'text',
					'label'	=>	'Nama Pengadaan (Baru)',
				],
				[
					'field'	=> 	'no_pr_lama',
					'type'	=>	'text',
					'label'	=>	'Nomor PR (Lama)',
				],
				[
					'field'	=> 	'no_pr',
					'type'	=>	'text',
					'label'	=>	'Nomor PR (Baru)',
				],
				[
					'field'	=> 	'metode_pengadaan_lama',
					'type'	=>	'text',
					'label'	=>	'Metode Pengadaan (Lama)'
				],
				[
					'field'	=> 	'metode_pengadaan',
					'type'	=>	'dropdown',
					'label'	=>	'Metode Pengadaan (Baru)',
				],
				[
					'field'	=> 	array('jwpp_start_lama', 'jwpp_end_lama'),
					'type'	=>	'date_range',
					'label'	=>	'Masa Penyelesaian Pekerjaan (Lama)',
				],
				[
					'field'	=> 	array('jwpp_start', 'jwpp_end'),
					'type'	=>	'date_range',
					'label'	=>	'Masa Penyelesaian Pekerjaan (Baru)',
				],
				[
					'field'	=> 	'desc_lama',
					'type'	=>	'textarea',
					'label'	=>	'Keterangan (Lama)',
				],
				[
					'field'	=> 	'desc',
					'type'	=>	'textarea',
					'label'	=>	'Keterangan (Baru)',
				],
				[
					'field' => 'kak_lampiran_lama',
					'type'  => 'file',
					'label' => 'KAK Lampiran (Lama)',
					'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*'
				],
				[
					'field' => 'kak_lampiran',
					'type'  => 'file',
					'label' => 'KAK Lampiran (Baru)',
					'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*'
				],
				[
					'field' => 'pr_lampiran_lama',
					'type'  => 'file',
					'label' => 'PR Lampiran (Lama)',
					'upload_path' => base_url('assets/lampiran/pr_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*'
				],
				[
					'field' => 'pr_lampiran',
					'type'  => 'file',
					'label' => 'PR Lampiran (Baru)',
					'upload_path' => base_url('assets/lampiran/pr_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*'
				],
				[
					'field'	=> 	'desc_batal',
					'type'	=>	'textarea',
					'label'	=>	'Justifikasi Batal',
				],
				[
					'field'	=> 	'fp3_type',
					'type'	=>	'hidden',
				]
			],

			'successAlert' => 'Berhasil mengubah data!',
			'filter' => array(
				array(
					'field'	=> 	'a|status',
					'type'	=>	'text',
					'label'	=>	'Status'
				),
				array(
					'field'	=> 	'a|id_fppbj',
					'type'	=>	'dropdown',
					'label'	=>	'Nama Pengadaan B/J',
					'rules' => 	'required',
				),
				array(
					'field'	=> 	'a|nama_pengadaan',
					'type'	=>	'text',
					'label'	=>	'Nama Pengadaan',
					'rules' => 	'required',
				),
				array(
					'field'	=> 	'a|metode_pengadaan',
					'type'	=>	'text',
					'label'	=>	'Metode Pengadaan',
					'rules' => 	'required',
				),
				array(
					'field'	=> 	'a|jadwal_pengadaan',
					'type'	=>	'dateTime',
					'label'	=>	'Masa Penyelesaian Pekerjaan',
					'rules' => 	'required',
				)
			)
		];

		// Initialize form configuration
		$this->initializeFormConfig();
		
		// Set URLs
		$this->insertUrl = site_url('fp3/save/');
		$this->updateUrl = 'fp3/update/';
		$this->deleteUrl = 'fp3/delete/';
		$this->approveURL = 'fp3/approve/';
		
		// Get data and set validation rules
		$this->getData = $this->fp3->getData($this->form);
		$this->form_validation->set_rules($this->form['form']);
	}

	/**
	 * Initialize form configuration with dynamic data
	 */
	private function initializeFormConfig()
	{
		$this->form = $this->baseFormConfig;
		
		// Add dynamic data to form configuration
		$this->form['form'][1]['source'] = $this->fp3->getFppbj();
		$this->form['form'][6]['source'] = $this->mm->getProcMethod();
		$this->form['filter'][1]['source'] = $this->fp3->getFppbj();
	}

	public function fp3ByYear($year)
	{
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('pengadaan/fp3'),
			'title' => 'FP3 ' . $year
		));

		$data['year'] = $year;

		$this->header = 'FP3 ' . $year;
		$this->content = $this->load->view('fp3/list_year', $data, TRUE);
		$this->script = $this->load->view('fp3/list_year_js', $data, TRUE);
		parent::index();
	}

	public function getData($id_division = "", $id_fppbj = "", $year = "")
	{
		$config['query'] = $this->fp3->getData($id_division, $id_fppbj, $year);
		$return = $this->tablegenerator->initialize($config);
		echo json_encode($return);
	}

	public function getDataFP3ByYear($year)
	{
		$config['query'] = $this->pm->getDataFP3ByYear($year);
		$return = $this->tablegenerator->initialize($config);
		// print_r($return);
		echo json_encode($return);
	}

	public function insert($year=null)
	{
		if (isset($year)) {
			$this->form = $this->getYearSpecificForm($year);
		}

		$this->prepareFormForInsert();
		echo json_encode($this->form);
	}

	/**
	 * Get form configuration specific to a year
	 */
	private function getYearSpecificForm($year)
	{
		$form = $this->baseFormConfig;
		$form['form'][1]['source'] = $this->fp3->getFppbj("", $year);
		return $form;
	}

	/**
	 * Prepare form for insert operation
	 */
	private function prepareFormForInsert()
	{
		foreach ($this->form['form'] as $key => $element) {
			if ($element['type'] == 'date_range') {
				$_value = [];
				foreach ($element['field'] as $values) {
					$_value[] = $data[$values];
				}
				$this->form['form'][$key]['value'] = $_value;
			}
			
			// Set readonly fields
			$readonlyFields = ['jwpp_start_lama', 'jwpp_end_lama', 'no_pr_lama', 
							 'metode_pengadaan_lama', 'idr_anggaran_lama', 'desc_lama',
							 'kak_lampiran_lama', 'pr_lampiran_lama'];
			
			if (in_array($element['field'], $readonlyFields)) {
				$this->form['form'][$key]['readonly'] = true;
			}
		}

		$this->form['url'] = $this->insertUrl;
		$this->form['button'] = [
			[
				'type' => 'submit',
				'label' => 'Simpan',
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
	}

	public function get_data_fppbj($id = "")
	{
		echo json_encode($this->fp3->get_data_fppbj($id));
	}

	public function approve($id, $param_)
	{
		$post = $this->input->post();
		$fp3 = $this->fp3->selectData($id);
		$fppbj = $this->fm->selectData($fp3['id_fppbj']);

		// Update approval status
		$param_ = [
			'is_status' => 1,
			'is_approved' => $param_,
			'pejabat_pengadaan_id' => $post['pejabat_pengadaan_id']
		];
		
		$data = $this->mm->approve("ms_fp3", $id, $param_);

		// Send notification
		$this->sendApprovalNotification($fp3, $fppbj, $post);

		// Log activity
		$activity = $this->session->userdata('admin')['name'] . " menyetujui pengadaan : " . $fppbj['nama_pengadaan'];
		$this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

		echo json_encode(['status' => 'success']);
	}

	/**
	 * Send approval notification
	 */
	private function sendApprovalNotification($fp3, $fppbj, $post)
	{
		$division = $this->get_email_division($this->session->userdata('admin')['id_division']);
		$to = implode(' ', array_column($division, 'email'));

		$subject = 'FP3 telah disetujui';
		$message = $fppbj['nama_pengadaan'] . 'telah di approve oleh ' . $this->session->userdata('admin')['name'];

		$this->send_mail($to, $subject, $message, $link);
	}

	public function getSingleData($id = null)
	{
		$this->form = $this->getSingleDataForm();
		$admin = $this->session->userdata('admin');
		$dataFP3 = $this->fp3->selectData($id);

		$this->prepareFormForSingleData($id, $admin, $dataFP3);
		echo json_encode($this->form);
	}

	/**
	 * Get form configuration for single data view
	 */
	private function getSingleDataForm()
	{
		return [
			'form' => [
				[
					'field' => 'status',
					'type' => 'fp3',
					'label' => 'FP3',
				],
				[
					'field' => 'nama_lama',
					'type' => 'text',
					'label' => 'Nama Pengadaan',
					'rules' => '',
				],
				// ... Add other form fields
			]
		];
	}

	/**
	 * Prepare form for single data view
	 */
	private function prepareFormForSingleData($id, $admin, $dataFP3)
	{
		$param_ = $this->getApprovalParam($admin['id_role']);
		$this->form['url'] = site_url($this->approveURL . $id . '/' . $param_);
		$this->form['reject'] = site_url('fp3/reject/' . $id . '/' . $param_);

		if ($this->canApprove($admin['id_role'])) {
			$this->prepareApprovalButtons($dataFP3, $admin);
		} else {
			$this->form['button'] = [
				[
					'type' => 'cancel',
					'label' => 'Tutup'
				]
			];
		}

		$this->populateFormData($dataFP3);
	}

	/**
	 * Get approval parameter based on role
	 */
	private function getApprovalParam($roleId)
	{
		$paramMap = [
			4 => 1,
			3 => 2,
			2 => 3,
			7 => 4,
			8 => 4,
			9 => 4
		];
		return $paramMap[$roleId] ?? null;
	}

	/**
	 * Check if user can approve
	 */
	private function canApprove($roleId)
	{
		return in_array($roleId, [2, 3, 4, 7, 8, 9]);
	}

	/**
	 * Prepare approval buttons based on status
	 */
	private function prepareApprovalButtons($dataFP3, $admin)
	{
		$btn_setuju = [
			[
				'type' => 'submit',
				'label' => '<i style="line-height:25px;" class="fas fa-thumbs-up"></i>&nbsp;Setujui Data'
			]
		];
		$btn_reject = [
			[
				'type' => 'reject',
				'label' => '<i style="line-height:25px;" class="fas fa-thumbs-down"></i>&nbsp;Revisi Data'
			]
		];
		$btn_cancel = [
			[
				'type' => 'cancel',
				'label' => 'Tutup'
			]
		];

		$this->form['button'] = $this->getApprovalButtonConfig($dataFP3, $admin, $btn_setuju, $btn_reject, $btn_cancel);
	}

	/**
	 * Get approval button configuration based on status
	 */
	private function getApprovalButtonConfig($dataFP3, $admin, $btn_setuju, $btn_reject, $btn_cancel)
	{
		if ($this->canApproveInitial($dataFP3, $admin)) {
			return array_merge($btn_setuju, $btn_reject, $btn_cancel);
		} else if ($this->canApproveSecond($dataFP3, $admin)) {
			return array_merge($btn_setuju, $btn_reject, $btn_cancel);
		} else if ($this->canApproveFinal($dataFP3, $admin)) {
			return array_merge($btn_setuju, $btn_reject, $btn_cancel);
		}
		return $btn_cancel;
	}

	/**
	 * Check if user can approve initial stage
	 */
	private function canApproveInitial($dataFP3, $admin)
	{
		return $dataFP3['is_approved'] == 0 && 
			   $dataFP3['is_reject'] == 0 && 
			   $dataFP3["is_cancelled"] == 0 && 
			   $admin['id_role'] == 4;
	}

	/**
	 * Check if user can approve second stage
	 */
	private function canApproveSecond($dataFP3, $admin)
	{
		return $dataFP3['is_approved'] == 1 && 
			   $dataFP3['is_reject'] == 0 && 
			   $dataFP3["is_cancelled"] == 0 && 
			   $admin['id_role'] == 3;
	}

	/**
	 * Check if user can approve final stage
	 */
	private function canApproveFinal($dataFP3, $admin)
	{
		return $dataFP3['is_approved'] == 2 && 
			   $dataFP3['is_reject'] == 0 && 
			   $dataFP3["is_cancelled"] == 0 && 
			   $admin['id_role'] == 2;
	}

	/**
	 * Populate form data
	 */
	private function populateFormData($data)
	{
		foreach ($this->form['form'] as $key => $value) {
			if ($key != 16 && $key != 18) {
				$this->form['form'][$key]['readonly'] = true;
			}
			
			$this->form['form'][$key]['value'] = $data[$value['field']] ?? "-";
			
			if ($value['type'] == 'date_range') {
				foreach ($value['field'] as $rowField) {
					$this->form['form'][$key]['value'][] = $data[$rowField];
				}
			}
			
			$this->formatFieldValue($key, $value, $data);
		}
	}

	/**
	 * Format field value based on type
	 */
	private function formatFieldValue($key, $value, $data)
	{
		switch ($value['type']) {
			case 'dateperiod':
				$dateperiod = json_decode($data[$value['field']]);
				$this->form['form'][$key]['value'] = date('d M Y', strtotime($dateperiod->start)) . " sampai " . date('d M Y', strtotime($dateperiod->end));
				break;
			case 'money':
				$this->form['form'][$key]['value'] = number_format($data[$value['field']]);
				break;
			case 'currency':
				$this->form['form'][$key]['value'] = number_format($data[$value['field']], 2);
				break;
			case 'money_asing':
				$this->form['form'][$key]['value'][] = $data[$value['field'][0]];
				$this->form['form'][$key]['value'][] = number_format($data[$value['field'][1]]);
				break;
		}
	}

	/**
	 * Display FP3 list
	 */
	public function index($id_division = "", $id_fppbj = "", $year = "")
	{
		$division = $this->mm->getDiv_($id_division);
		$this->breadcrumb->addlevel(1, [
			'url' => site_url('fp3'),
			'title' => 'FP3'
		]);

		$data = [
			'id_division' => $id_division,
			'id_fppbj' => $id_fppbj,
			'year' => $year
		];

		$this->header = 'FP3 ' . $division['name'];
		$this->content = $this->load->view('fp3/list', $data, TRUE);
		$this->script = $this->load->view('fp3/list_js', $data, TRUE);
		parent::index();
	}

	/**
	 * Save FP3 record
	 */
	public function save($data = null)
	{
		$save = $this->input->post();
		$fppbj = $this->fp3->get_data_fppbj($save['id_fppbj']);

		if ($save['fp3_type'] == 'ubah') {
			$this->validateDateChanges($save, $fppbj);
		}
		
		if ($this->validation()) {
			$this->processSave($save, $fppbj);
		}
	}

	/**
	 * Validate date changes
	 */
	private function validateDateChanges($save, $fppbj)
	{
		if ($save['jwpp_start']) {
			$metods = $save['metode_pengadaan'] ?: $fppbj['metode_pengadaan'];
			if (!$this->check_avail_date($save['jwpp_start'], $metods)) {
				$this->sendErrorResponse('Tanggal tidak sesuai', 'jwpp_start');
			}
		}
		
		if ($save['jwpp_end'] && !$this->check_end_date($save['jwpp_start'], $save['jwpp_end'])) {
			$this->sendErrorResponse('Tanggal akhir tidak boleh kurang dari tanggal mulai', 'jwpp_start');
		}
	}

	/**
	 * Send error response
	 */
	private function sendErrorResponse($message, $field)
	{
		echo json_encode([
			'status' => 'error',
			'form' => [$field => $message]
		]);
		die;
	}

	/**
	 * Process save operation
	 */
	private function processSave($save, $fppbj)
	{
		$save['status'] = 'ubah';
		$save['entry_stamp'] = timestamp();
		$save['idr_anggaran'] = str_replace(',', '', $save['idr_anggaran']);
		$save['is_status'] = 1;
		unset($save['fp3']);

		if ($this->fp3->edit_to_fp3($save)) {
			$this->handleSuccessfulSave($save);
		}
	}

	/**
	 * Handle successful save
	 */
	private function handleSuccessfulSave($save)
	{
		$by_division = $this->get_division($this->session->userdata('admin')['id_division']);
		$division = $this->get_email_division($this->session->userdata('admin')['id_division']);

		// Send notification
		$this->sendSaveNotification($save, $by_division, $division);

		// Log activity
		$activity = $this->session->userdata('admin')['id_division'] . " membuat FP3 dengan nama : " . $save['nama_pengadaan'];
		$this->activity_log($this->session->userdata('admin')['id_user'], $activity, $save['id_fppbj']);

		// Add note
		$this->addNote($save, $by_division);

		$this->session->set_flashdata('msg', $this->successMessage);
		$this->deleteTemp($save);
	}

	/**
	 * Send save notification
	 */
	private function sendSaveNotification($save, $by_division, $division)
	{
		$to = implode(',', array_column($division, 'email'));
		$subject = 'FP3 baru telah dibuat.';
		$message = $save['nama_pengadaan'] . ' telah di buat oleh ' . $by_division['name'];
		$this->send_mail($to, $subject, $message, $link);
	}

	/**
	 * Add note for save operation
	 */
	private function addNote($save, $by_division)
	{
		$data_note = [
			'id_user' => $this->session->userdata('admin')['id_division'],
			'id_fppbj' => $save['id_fppbj'],
			'value' => 'FP3 dengan nama pengadaan ' . $save['nama_pengadaan'] . ' telah di buat oleh ' . $by_division['name'],
			'entry_stamp' => date('Y-m-d H:i:s'),
			'is_active' => 1
		];
		$this->db->insert('tr_note', $data_note);
	}

	/**
	 * Activate FP3 record
	 */
	public function aktifkan($id)
	{
		$return = ['status' => 'error'];
		if ($this->fp3->updateStatus($id, 1)) {
			$return['status'] = 'success';
		}
		echo json_encode($return);
	}

	/**
	 * Show activate form
	 */
	public function updateAktifkan($id)
	{
		$this->formDelete['url'] = site_url('fp3/aktifkan/' . $id);
		$this->formDelete['button'] = [
			[
				'type' => 'delete',
				'label' => 'Aktifkan'
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
		echo json_encode($this->formDelete);
	}

	/**
	 * Cancel FP3 record
	 */
	public function batalkan($id)
	{
		$return = ['status' => 'error'];
		if ($this->fp3->updateStatus($id, 2)) {
			$return['status'] = 'success';
		}
		echo json_encode($return);
	}

	/**
	 * Show cancel form
	 */
	public function updateBatalkan($id)
	{
		$this->formDelete['url'] = site_url('fp3/batalkan/' . $id);
		$this->formDelete['button'] = [
			[
				'type' => 'delete',
				'label' => 'Batalkan'
			],
			[
				'type' => 'cancel',
				'label' => 'Cancel'
			]
		];
		echo json_encode($this->formDelete);
	}

	/**
	 * Approve FP3 record (legacy method)
	 */
	public function approve_($id, $param_)
	{
		$param_ = ['is_status' => 1, 'is_approved' => $param_];
		$data = $this->mm->approve("ms_fp3", $id, $param_);
		redirect($_SERVER['HTTP_REFERER']);
		return $data;
	}

	/**
	 * Edit FP3 record
	 */
	public function edit($id = null)
	{
		$this->form = $this->getEditForm();
		$data = $this->fp3->selectData($id);
		
		$this->prepareEditForm($data);
		echo json_encode($this->form);
	}

	/**
	 * Get edit form configuration
	 */
	private function getEditForm()
	{
		return [
			'form' => [
				[
					'field' => 'fp3',
					'type' => 'fp3',
					'label' => 'FP3',
				],
				[
					'field' => 'nama_lama',
					'type' => 'text',
					'label' => 'Nama Pengadaan',
				],
				[
					'field' => 'nama_pengadaan',
					'type' => 'text',
					'label' => 'Nama Pengadaan (Baru)',
				],
				[
					'field' => 'metode_pengadaan',
					'type' => 'dropdown',
					'label' => 'Metode Pengadaan (Baru)',
					'source' => $this->mm->getProcMethod(),
				],
				[
					'field' => ['jwpp_start', 'jwpp_end'],
					'type' => 'date_range',
					'label' => 'Masa Penyelesaian Pekerjaan (Baru)',
				],
				[
					'field' => 'desc',
					'type' => 'textarea',
					'label' => 'Keterangan',
				],
				[
					'field' => 'kak_lampiran',
					'type' => 'file',
					'label' => 'KAK Lampiran',
					'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*',
					'rules' => 'required',
				],
				[
					'field' => 'pr_lampiran',
					'type' => 'file',
					'label' => 'PR Lampiran',
					'upload_path' => base_url('assets/lampiran/pr_lampiran/'),
					'upload_url' => site_url('fp3/upload_lampiran'),
					'allowed_types' => '*',
					'rules' => 'required',
				],
				[
					'field' => 'desc_batal',
					'type' => 'textarea',
					'label' => 'Keterangan Batal',
				],
				[
					'field' => 'status',
					'type' => 'hidden',
				],
			],
		];
	}

	/**
	 * Prepare edit form
	 */
	private function prepareEditForm($data)
	{
		foreach ($this->form['form'] as $key => $element) {
			$this->form['form'][$key]['value'] = $data[$element['field']];
			
			if ($element['field'] == 'nama_lama') {
				$this->form['form'][$key]['readonly'] = true;
			}
			
			if ($element['type'] == 'dateperiod') {
				$dateperiod = json_decode($data[$element['field']]);
				$this->form['form'][$key]['value'] = date('d M Y', strtotime($dateperiod->start)) . " sampai " . date('d M Y', strtotime($dateperiod->end));
			}
			
			if ($element['type'] == 'date_range') {
				$_value = [];
				foreach ($element['field'] as $values) {
					$_value[] = $data[$values];
				}
				$this->form['form'][$key]['value'] = $_value;
			}
		}

		$this->form['url'] = site_url($this->updateUrl . '/' . $id);
		$this->form['button'] = [
			[
				'type' => 'submit',
				'label' => 'Ubah'
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
	}

	/**
	 * Update FP3 record
	 */
	public function update($id)
	{
		$save = $this->input->post();
		$lastData = $this->fp3->selectData($id);

		// Log activity
		$activity = $this->session->userdata('admin')['id_division'] . " mengubah data : " . $save['nama_pengadaan'];
		$this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

		if ($lastData['is_reject'] == 1) {
			$this->handleRejectedUpdate($save, $lastData);
		} else {
			$this->handleNormalUpdate($save, $lastData);
		}

		if ($this->fp3->update($id, $save)) {
			$this->handleSuccessfulUpdate($save, $lastData);
		}
	}

	/**
	 * Handle rejected update
	 */
	private function handleRejectedUpdate(&$save, $lastData)
	{
		$save['is_reject'] = 0;
		$save['is_approved'] = $lastData['is_approved'] - 1;

		$up = [
			'is_reject' => 0,
			'is_approved' => $lastData['is_approved'] - 1
		];

		$this->db->where('id', $lastData['id_fppbj'])
				 ->where('del', 0)
				 ->update('ms_fppbj', $up);
	}

	/**
	 * Handle normal update
	 */
	private function handleNormalUpdate(&$save, $lastData)
	{
		$save['is_approved'] = 0;
		$save['is_reject'] = 0;

		$up = [
			'is_reject' => 0,
			'is_approved' => 0
		];

		$this->db->where('id', $lastData['id_fppbj'])
				 ->where('del', 0)
				 ->update('ms_fppbj', $up);
	}

	/**
	 * Handle successful update
	 */
	private function handleSuccessfulUpdate($save, $lastData)
	{
		$save['is_status'] = 1;
		$this->insertHistoryPengadaan($lastData['id_fppbj'], 'perubahan', $save);
		$this->session->set_userdata('alert', $this->form['successAlert']);
		$this->deleteTemp($save, $lastData);
		echo json_encode(['status' => 'success']);
	}

	/**
	 * Show download form
	 */
	public function form_download_fp3($id)
	{
		$this->form = [
			'form' => [
				[
					'field' => 'to',
					'type' => 'text',
					'label' => 'Kepada',
				],
				[
					'field' => 'pb',
					'type' => 'text',
					'label' => 'Pusat Biaya',
				],
				[
					'field' => 'no',
					'type' => 'text',
					'label' => 'Nomor',
				],
				[
					'field' => 'date',
					'type' => 'date',
					'label' => 'Tanggal',
				],
				[
					'field' => 'kadep_',
					'type' => 'text',
					'label' => 'Kolom TTD - Dept/Div',
				],
				[
					'field' => 'kadep',
					'type' => 'text',
					'label' => 'Kolom TTD - Nama (min. setingkat Ka. Dept)',
				],
				[
					'field' => 'kadiv_',
					'type' => 'text',
					'label' => 'Kolom TTD - Div/Dirut',
				],
				[
					'field' => 'kadiv',
					'type' => 'text',
					'label' => 'Kolom TTD - Nama (min. setingkat Ka. Divisi atau Direktur Utama untuk fungsi leher)',
				]
			]
		];

		$this->form['url'] = site_url('export/fp3/' . $id);
		$this->form['button'] = [
			[
				'type' => 'submit',
				'label' => 'Download',
			],
			[
				'type' => 'cancel',
				'label' => 'Batal'
			]
		];
		echo json_encode($this->form);
	}

	/**
	 * Reject FP3 record
	 */
	public function reject($id, $param_)
	{
		$post = $this->input->post();
		$fp3 = $this->fp3->selectData($id);
		$fppbj = $this->fm->selectData($fp3['id_fppbj']);

		// Save rejection note
		$this->saveRejectionNote($fp3, $post);

		// Update status
		$param_ = ['is_status' => 1, 'is_reject' => 1, 'is_approved' => $param_];
		$data = $this->mm->approve("ms_fp3", $id, $param_);

		// Send notification
		$this->sendRejectionNotification($fp3, $fppbj, $post);

		// Log activity
		$activity = $this->session->userdata('admin')['name'] . " menolak pengadaan : " . $fppbj['nama_pengadaan'];
		$this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

		// Update history
		$this->updateRejectionHistory($fp3, $post);

		redirect($_SERVER['HTTP_REFERER']);
		return $data;
	}

	/**
	 * Save rejection note
	 */
	private function saveRejectionNote($fp3, $post)
	{
		$save_keterangan = [
			'id_fppbj' => $fp3['id_fppbj'],
			'id_user' => $fp3['id_division'],
			'is_active' => 1,
			'value' => $post['keterangan'],
			'entry_stamp' => date('Y-m-d H:i:s'),
			'type' => 'reject'
		];
		$this->fm->insert_keterangan($save_keterangan);
	}

	/**
	 * Send rejection notification
	 */
	private function sendRejectionNotification($fp3, $fppbj, $post)
	{
		$division = $this->get_email_division($this->session->userdata('admin')['id_division']);
		$to = implode(' ', array_column($division, 'email'));

		$subject = $fppbj['nama_pengadaan'] . ' di revisi oleh ' . $this->session->userdata('admin')['name'];
		$message = $post['keterangan'];

		$this->send_mail($to, $subject, $message, $link);
	}

	/**
	 * Update rejection history
	 */
	private function updateRejectionHistory($fp3, $post)
	{
		$fp3['approved_by'] = $this->session->userdata('admin')['id_user'];
		$fp3['date'] = $post['tgl_approval'] . ' ' . date('H:i:s');
		$fp3['desc_reject'] = $post['keterangan'];

		$fields_to_unset = [
			'id_fppbj', 'nama_lama', 'metode_lama', 'jwpp_start_lama',
			'jwpp_end_lama', 'jadwal_pengadaan', 'metode_name', 'desc_lama',
			'kak_lama', 'no_pr_lama', 'pr_lama', 'id', 'pic_name'
		];

		foreach ($fields_to_unset as $field) {
			unset($fp3[$field]);
		}

		$this->insertHistoryPengadaan($fp3['id'], 'reject', $fp3);
	}
}
