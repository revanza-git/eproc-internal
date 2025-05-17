<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	protected $rekapService;
	protected $auth_model;
	protected $fppbj_model;

	public function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->helper('string');
		$this->load->helper('rekap');
		include_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';

		// Load models
		$this->auth_model = $this->load->model('Auth_model');
		$this->fppbj_model = $this->load->model('Fppbj_model');
		
		// Load RekapService
		$this->load->service('RekapService');
		$this->rekapService = new RekapService();
	}

	public function index() {
		if ($this->session->has_userdata('user')) {
			return redirect(
				$this->config->item('pengadaan_url') . 'dashboard',
				'location',
				302
			);
		}

		if ($this->session->has_userdata('admin')) {
			$admin = $this->session->userdata('admin');

			if (isset($admin['app_type']) && (int) $admin['app_type'] === 1) {
				return redirect($this->config->item('pengadaan_url') . 'admin');
			}

			return redirect('dashboard');
		}

		return redirect($this->config->item('vms_url'));
	}

	public function logout() {
		$admin = $this->session->userdata('admin');
		$this->auth_model->log_activity($admin['id_user'], $admin['name'] . " Telah Logout");
		
		$this->session->sess_destroy();
		header("Location:" . $this->config->item("vms_url") . "main/logout");
	}

	public function check() {
		if (!$this->input->post('username') || !$this->input->post('password')) {
			return;
		}

		$is_logged = $this->auth_model->validate_credentials(
			$this->input->post('username'),
			$this->input->post('password')
		);

		if ($is_logged) {
			if ($this->session->userdata('user')) {
				$user = $this->session->userdata('user');
				$this->redirect_user($user);
			} else if ($this->session->userdata('admin')) {
				$admin = $this->session->userdata('admin');
				if ($admin['app_type'] == 1) {
					$this->redirect_admin_app1($admin);
				} else {
					redirect('dashboard');
				}
			}
		} else {
			$message = "Username atau Password salah";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$this->load->view('template/layout-login-nr');
		}
	}

	private function redirect_user($user) {
		$params = [
			$user['name'],
			$user['id_user'],
			$user['id_sbu'],
			$user['vendor_status'],
			$user['is_active'],
			$user['type'],
			$user['app']
		];
		
		header("Location:" . $this->config->item("vms_pengadaan_url") . 
			   "main/login_user/" . implode('/', $params));
	}

	private function redirect_admin_app1($admin) {
		$params = [
			$admin['id_user'],
			$admin['name'],
			$admin['id_role'],
			$admin['role_name'],
			$admin['type'],
			$admin['app'],
			$admin['id_sbu'],
			$admin['sbu_name']
		];
		
		header("Location:" . $this->config->item("pengadaan_url") . 
			   "main/login_admin/" . implode('/', $params));
	}

	public function from_eks() {        
		$key = $this->input->get('key', TRUE);
		if (!$key) {
			header("Location:" . $this->config->item("vms_url"));
			return;
		}

		$data = $this->auth_model->get_key_value($key);
		if (!$data) {
			header("Location:" . $this->config->item("vms_url"));
			return;
		}

		$value = json_decode($data['value']);
		$this->auth_model->set_admin_session($value);
		$this->auth_model->invalidate_key($key);

		redirect('dashboard');
	}

	public function rekapFPPBJ($year) {
		$data = $this->rekapService->getFPPBJData($year);
		echo generate_rekap_html($data, 'fppbj', $year);
	}

	public function rekapFKPBJ($year) {
		$data = $this->rekapService->getFKPBJData($year);
		echo generate_rekap_html($data, 'fkpbj', $year);
	}

	public function rekapFP3($year) {
		$data = $this->rekapService->getFP3Data($year);
		echo generate_rekap_html($data, 'fp3', $year);
	}

	public function rekapFPPBJBaru($year) {
		$data = $this->rekapService->getFPPBJData($year, 2);
		echo generate_rekap_html($data, 'fppbj', $year);
	}

	public function rekapFKPBJBaru($year) {
		$data = $this->rekapService->getFKPBJData($year, 2);
		echo generate_rekap_html($data, 'fkpbj', $year);
	}

	public function update_status() {
		$id_fppbj = $this->input->get('id_fppbj');
		$param = $this->input->get('param_');
		$this->fppbj_model->update_status($id_fppbj, $param);
	}

	public function search() {
		$q = $this->input->get('q');
		$data = $this->fppbj_model->search($q);
		echo json_encode($data);
	}

	// Other utility methods
	public function custom_query() {
		$this->mm->custom_query();
	}

	public function get_dpt_csms($csms) {
		$data = $this->eproc_db->select('ms_vendor.name vendor, ms_vendor.id id_vendor, tb_csms_limit.end_score score, tb_csms_limit.value csms')
					->where('ms_csms.id_csms_limit', $csms)
					->where('ms_vendor.vendor_status', 2)
					->join('ms_csms', 'ms_vendor.id = ms_csms.id_vendor')
					->join('tb_csms_limit', 'tb_csms_limit.id = ms_csms.id_csms_limit')
					->get('ms_vendor');

		if (count($data->result_array()) > 0) {
			$r = $data->result_array();
		} else {
			$r = $this->eproc_db->select('ms_vendor.name vendor, ms_vendor.id id_vendor, tb_csms_limit.end_score score, tb_csms_limit.value csms')
						->where('ms_vendor.vendor_status', 2)
						->where('ms_vendor.del', 0)
						->join('ms_csms', 'ms_vendor.id = ms_csms.id_vendor')
						->join('tb_csms_limit', 'tb_csms_limit.id = ms_csms.id_csms_limit')
						->get('ms_vendor')
						->result_array();
		}
		
		echo json_encode($r);
		return json_encode($r);
	}

	public function get_dpt_type($jenis, $id_pengadaan) {
		if ($jenis == 'jasa_konstruksi') {
			$q = 'AND c.id = 4';
		} elseif ($jenis == 'jasa_lainnya') {
			$q = 'AND c.id = 3';
		} elseif ($jenis == 'jasa_konsultasi') {
			$q = 'AND (c.id = 2 OR c.id = 5)';
		} elseif ($jenis == 'stock' || $jenis == 'non_stock') {
			$q = 'AND (c.id = 1)';
		} else {
			$q = '';
		}

		$dpt_before = $this->db->where('id_fppbj',$id_pengadaan)->get('tr_analisa_risiko')->row_array();
		$dpt_before = json_decode($dpt_before['dpt_list']);

		$dpt = [];
		foreach ($dpt_before as $key => $value) {
			foreach ($value as $k => $v) {
				$dpt[$v] = 1;
			}
		}

		$query = "SELECT 
					a.no, 
					b.name vendor, 
					b.id id_vendor,
					c.name pengadaan
				FROM
					ms_ijin_usaha a
						JOIN
					ms_vendor b ON b.id = a.id_vendor
						JOIN
					tb_dpt_type c ON c.id = a.id_dpt_type
				WHERE
					a.del = 0 AND b.vendor_status = 2 ".$q." 
				GROUP BY b.id";

		$r = $this->eproc_db->query($query)->result_array();
		echo json_encode($r);
		return json_encode($r);
	}

	public function get_dpt() {
		$sql = "SELECT 
					name,
					id
				FROM 
					ms_vendor 
				WHERE 
					del = 0 AND name
				LIKE ? ";
		$query = $this->eproc_db->query($sql, array('%'.$_POST['search'].'%'));
		echo json_encode($query->result_array());
		return json_encode($query->result_array());
	}

	public function view_calendar() {
		$this->load->view('timeline/calendar');
	}
	
	public function rekapPerencanaanGraph($year) {
		$data = $this->dm->rekapPerencanaanGraph($year);
		echo json_encode($data);
	}
}