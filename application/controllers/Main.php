<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public $eproc_db;
	public function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		include_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';

		$this->load->model('Main_model', 'mm');
		$this->load->model('fkpbj_model', 'fk');
		$this->load->model('fp3_model', 'fp');
		$this->load->model('Dashboard_model', 'dm');
		$this->eproc_db = $this->load->database('eproc',true);

	}

	public function index(){

		/*
		| -------------------------------------------------------------------
		|  Authentication users login
		| -------------------------------------------------------------------
		| These function prevented visitor to open restricted page.
		|
		| Prototype:
		|
		|	if($this->session->userdata('user')){
		|		redirect(site_url('dashboard'));
		|	}else{
		|		$this->login();
		|	}
		|
		*/
		// print_r($this->session->userdata());
		if($this->session->userdata('user')){
			header("Location: http://10.10.10.4/eproc_pengadaan/dashboard");
		}elseif($this->session->userdata('admin')){
			if ($this->session->userdata('admin')['app_type'] == 1) {
				header("Location: http://10.10.10.4/eproc_pengadaan/admin");
			}else{
				redirect('dashboard');				
			}
		}else{
			header("Location:https://eproc.nusantararegas.com/eproc_nusantararegas");
			// $this->load->view('template/layout-login-nr');
		}
	}

	public function logout(){
		$admin = $this->session->userdata('admin');
		$activity = array(
			'id_user'		=>	$admin['id_user'],
			'activity'		=>	$admin['name']." Telah Logout",
			'activity_date' => date('Y-m-d H:i:s')
		);

		$this->db->insert('tr_log_activity',$activity);
		
		$this->session->sess_destroy();
		// header('Location: http://10.10.10.4/eproc_pengadaan/main/logout');
		//redirect(site_url());
		header("Location:https://eproc.nusantararegas.com/eproc_nusantararegas/main/logout");
	}

	public function check()
	{
		if($this->input->post('username') && $this->input->post('password')){
			$is_logged = $this->mm->cek_login();

			if($is_logged){

				if($this->session->userdata('user')){

					$user = $this->session->userdata('user');
					// $this->to_app($user);
					$name 			= $user['name'];
					$id_user 		= $user['id_user'];
					$id_sbu			= $user['id_sbu'];
					$vendor_status	= $user['vendor_status'];
					$is_active		= $user['is_active'];
					$type 			= 'user';
					$app 			= $user['app'];
					
					header("Location:https://eproc.nusantararegas.com/eproc_pengadaan/main/login_user/".$name."/".$id_user."/".$id_sbu."/".$vendor_status."/".$is_active."/".$type."/".$app);

				}else if($this->session->userdata('admin')){
					if ($this->session->userdata('admin')['app_type'] == 1) {

						$admin = $this->session->userdata('admin');
						// print_r($admin);die;
						$name 			= $admin['name'];
						$id_sbu 		= $admin['id_sbu'];
						$id_user 		= $admin['id_user'];
						$id_role 		= $admin['id_role'];
						$role_name 		= $admin['role_name'];
						$sbu_name 		= $admin['sbu_name'];
						$app 			= $admin['app'];
						$type 			= 'admin';
						
						header("Location:http://10.10.10.4/eproc_pengadaan/main/login_admin/".$id_user."/".$name."/".$id_role."/".$role_name."/".$type."/".$app."/".$id_sbu."/".$sbu_name);
					}else{
						redirect('dashboard');				
					}
				}
			}else{
				$message = "Username atau Password salah";

				echo "<script type='text/javascript'>alert('$message');</script>";
				
				$this->load->view('template/layout-login-nr');
			}
		}
	}

	public function from_eks($name,$id_user,$id_role,$id_division,$app_type,$email,$photo_profile,$division)
	{
		// if(!$this->session->userdata('admin')){
            // redirect('dashboard');
        // }
		
		$division = $this->db->where('id',$id_division)->get('tb_division')->row_array(); 

		$role = $this->db->where('id',$id_role)->get('tb_role')->row_array();

		// echo "name : ".$name." <br> id_user : ".$id_user." <br> id_role : ".$id_role." <br> id_division : ".$id_division." <br> division : ".$division['name']." <br> app_type : ".$app_type." <br> email : ".$email." <br> photo_profile : ".$photo_profile;die;

		$set_session = array(
			'name'			=>	str_replace('%20',' ',$name),
			'division'		=>	$division['name'],
			'id_user' 		=> 	$id_user,
			'id_role'		=>	$id_role,
			'id_division'	=>  $id_division,
			'email'			=>  $email,
			'photo_profile' =>  $photo_profile,
			'app_type' 		=>	$app_type,
			'role_name'		=>	$role['name']
		);

		$this->session->set_userdata('admin',$set_session);
		redirect('dashboard');
	}

	public function custom_query(){
		$this->mm->custom_query();
	}

	public function update_status(){
		$id_fppbj 	= $_GET['id_fppbj'];
		$param_ 	= $_GET['param_'];
		print_r($id_fppbj);
		$this->mm->update_status('ms_fppbj', $id_fppbj, $param_);
	}

	public function search(){
		$q = $_GET['q'];
		$data = $this->mm->search($q);
		
	}
	
	function get_dpt_csms($csms){
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
		/*$data = $this->db->select('ms_vendor.name vendor, ms_vendor.id id_vendor, ms_score_k3.score, value csms')
						->where('id_csms_limit', $csms)
						->where('ms_vendor.vendor_status', 2)
						->join('ms_vendor', 'ms_vendor.id = ms_score_k3.id_vendor')
						->join('tb_csms_limit', 'tb_csms_limit.id = ms_score_k3.id_csms_limit')
						->get('ms_score_k3');
		
		echo json_encode($data->result_array());
		return json_encode($data->result_array());*/
	}

	public function get_dpt_type($jenis,$id_pengadaan)
	{
		// echo "string ".$jenis;
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
			// print_r($value);die;
			foreach ($value as $k => $v) {
				$dpt[$v] = 1;
			}
			// $dpt[][$value] = 1;
		}

		// print_r($dpt);die;

		$query = "	SELECT 
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

		// echo " - ".$this->eproc_db->last_query();
		// foreach ($r as $key => $value) {
		// 	$r[$key]
		// }
		foreach ($r as $key => $value) {
			// $r[$key]['value'] = $dpt[$value['id_vendor']]; 
		}

		// print_r($r);die;
		echo json_encode($r);
		return json_encode($r);
	}

	function get_dpt(){

		$sql = "SELECT 
						name ,
						id
				 FROM 
				 		ms_vendor 
				 WHERE 
				 		del = 0 AND name
				 LIKE ? ";
		$query = $this->eproc_db->query($sql,array('%'.$_POST['search'].'%',));
		echo json_encode($query->result_array());
		return json_encode($query->result_array());
	}

	/*function rekapPerencanaanGraph($year){
		// $data['year']	= $year;
		$data	= $this->mm->rekapPerencanaanGraph($year);
		// print_r($data);
		return $data;
	}*/

	function view_calendar() {
		$this->load->view('timeline/calendar');
	}
	
	function rekapPerencanaanGraph($year){
		// $data['year']	= $year;
		$data	= $this->dm->rekapPerencanaanGraph($year);
		// print_r($data);
		echo json_encode($data);
	}

	public function rekapFPPBJ($year)
	{
		$admin = $this->session->userdata('admin');
		$total_perencanaan	= count($this->dm->rekap_department($year)) + count($this->dm->rekap_department_fkpbj($year)) + count($this->dm->rekap_department_fp3($year));
		$all_fppbj_finish   = $this->dm->rekapAllFPPBJFinish($year);
		$total_fppbj_semua	= $this->mm->get_total_fppbj_semua($year);
		$fppbj_selesai		= $this->mm->get_fppbj_selesai($year);
		$fppbj_pending		= $this->mm->get_fppbj_pending($year);
		$pending_admin_hsse = $this->mm->get_pending_admin_hsse($year);
		$pending_admin_pengendalian = $this->mm->get_pending_admin_pengendalian($year);
		$pending_kadept_proc = $this->mm->get_pending_kadept_proc($year);
		$total_pending_dir  = $this->mm->total_pending_dir($year);
		$fppbj_reject		= $this->mm->get_fppbj_reject($year);
		//------------------------------------------------------
		$pending_dirut		= $this->mm->get_pending_dirut($year);
		$pending_dirke		= $this->mm->get_pending_dirke($year);
		$pending_dirsdm		= $this->mm->get_pending_dirsdm($year);
		$done_dirut			= $this->mm->get_done_dirut($year);
		$done_dirke			= $this->mm->get_done_dirke($year);
		$done_dirsdm		= $this->mm->get_done_dirsdm($year);
		$reject_dirut		= $this->mm->get_reject_dirut($year);
		$reject_dirke		= $this->mm->get_reject_dirke($year);
		$reject_dirsdm		= $this->mm->get_reject_dirsdm($year);
		$total_fppbj_direktur = $this->mm->get_total_fppbj_directure($year);
		$total_fppbj_dirke  = $this->mm->get_total_fppbj_dirke($year);
		$total_fppbj_dirut  = $this->mm->get_total_fppbj_dirut($year);
		$total_fppbj_dirsdm = $this->mm->get_total_fppbj_dirsdm($year);
		$total_pending_dir  = $this->mm->total_pending_dir($year);

		$width_fppbj_selesai = ($fppbj_selesai->num_rows() / $total_perencanaan) * 100;

		if ($year == '2022') {
			$total_perencanaan = 103;
			$all_fppbj_finish_rows = 103;
		} else {
			$all_fppbj_finish_rows = $all_fppbj_finish->num_rows();
		}
		
		$res = '<div class="panel" style="height: 550px">

		<div class="scrollbar" id="custom-scroll" style="height: 538px">

		  <div class="container-title">
			<h3>Data FPPBJ '.$year.'</h3>
		  </div>

		  <div class="summary">
			<div class="summary-title">
			  FPPBJ Selesai
			  <span>'.$all_fppbj_finish_rows.'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:'.$width_fppbj_selesai.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">'.$total_perencanaan.'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fppbj_selesai->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
		  	}
			$width_pending = ($fppbj_pending->num_rows() / $total_perencanaan) * 100;
			$res .='</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui User
			  <span>'.$fppbj_pending->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_pending.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui User<span class="badge is-warning">'.$fppbj_pending->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fppbj_pending->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';	
				  $no++;
			}
			$width_admin_hsse = ($pending_admin_hsse->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>		  
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui HSSE
			  <span>'.$pending_admin_hsse->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_admin_hsse.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui HSSE<span class="badge is-warning">'.$pending_admin_hsse->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1;
			foreach ($pending_admin_hsse->result() as $key) {
				$res .= '<p>'. $no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';	
				$no++;
			}
			$width_admin_pengendalian = ($pending_admin_pengendalian->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Admin Pengendalian
			  <span>'.$pending_admin_pengendalian->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_admin_pengendalian.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui Admin Pengendalian<span class="badge is-warning">'.$pending_admin_pengendalian->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_admin_pengendalian->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}
			$width_kadept_proc = ($pending_kadept_proc->num_rows() / $total_perencanaan) * 100; 
			$res .='</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Ka.Dept Procurement
			  <span>'.$pending_kadept_proc->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_kadept_proc.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui Ka.Dept Procurement
			<span class="badge is-warning">'.$pending_kadept_proc->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_kadept_proc->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}
			$width_pending_dir = ($total_pending_dir->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Pejabat Pengadaan
			  <span>'.$total_pending_dir->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_pending_dir.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum di setujui Kadiv SDM umum
			<span class="badge is-warning">'.$pending_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirsdm->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
			$width_reject = ($fppbj_reject->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>

			<button class="accordion-header" style="font-size:16px;">Belum di setujui Direktur Keuangan dan Umum
			<span class="badge is-warning">'.$pending_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirke->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
			$width_reject = ($fppbj_reject->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>

			<button class="accordion-header">Belum di setujui Direktur Utama
			<span class="badge is-warning">'.$pending_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirut->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
		// 	$width_reject = ($fppbj_reject->num_rows() / $total_perencanaan) * 100;
		// 	$res .= '</div>
		//   </div>
		//   <div class="summary">
		// 	<div class="summary-title">
		// 	  Tidak Disetujui
		// 	  <span>'.$fppbj_reject->num_rows().'/'.$total_perencanaan.'</span>
		// 	</div>
		// 	<div class="summary-bars">
		// 	  <span class="bar-top is-danger" style="width:'.$width_reject.'%"></span>
		// 	  <span class="bar-bottom"></span>
		// 	</div>
		// 	<button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$fppbj_reject->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

		// 	<div class="accordion-panel">';
		// 		$no=1;
		// 		foreach ($fppbj_reject->result() as $key) {
		// 			$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
		// 		    $no++;
		// 		}
			$res .= '</div>
		  </div>';
		  
		if($admin['id_division'] == 1 && $admin['id_role'] ==7 ||  $admin['id_role'] ==8 || $admin['id_role'] ==9) {
			$res .= '<div class="container-title">
			<h3>Data FPPBJ Otorisasi '.$year.'</h3>
		  </div>';
		  	if($admin['id_division'] == 1 && $admin['id_role'] == 9) {

				$width_done_dirut 		= ($done_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;
				$width_pending_dirut 	= ($pending_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;
				$width_reject_dirut 	= ($reject_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;

				$res .= '<div class="summary">
							<div class="summary-title">
							Sudah disetujui Direktur Utama
							<span>'.$done_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-success" style="width:'.width_done_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="summary">
							<div class="summary-title">
							Belum disetujui Direktur Utama
							<span>'.$pending_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-warning" style="width:'.$width_pending_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="summary">
							<div class="summary-title">
							Direvisi Direktur Utama
							<span>'.$reject_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-danger" style="width:'.$width_reject_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="container-title">
							<h3>Tinjauan</h3>
						</div>
						<div class="is-block">
							<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
							<div class="accordion-panel">';
							$no = 1; 
							foreach ($done_dirut->result() as $key) {
								$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
								$no++;
							}
					$res .= '</div>
					<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1;
					foreach ($pending_dirut->result() as $key) {
						$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}
					$res .= '</div>
					<button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$reject_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1;
					foreach ($reject_dirut->result() as $key) {
						$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}
					$res .= '</div>
					</div>';
			}
			if($admin['id_division'] == 1 && $admin['id_role'] == 8) {
				$width_done_dirke 	 = ($done_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;
				$width_pending_dirke = ($pending_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;
				$width_reject_dirke  = ($reject_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;

				$res .= '<div class="summary">
				<div class="summary-title">
				  Sudah disetujui Direktur Keuangan
				  <span>'.$done_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-success" style="width:'.$width_done_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Belum disetujui Direktur Keuangan
				  <span>'.$pending_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-warning" style="width:'.$width_pending_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Direvisi Direktur Keuangan
				  <span>'.$reject_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-danger" style="width:'.$width_reject_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="container-title">
				<h3>Tinjauan</h3>
			  </div>
			  <div class="is-block">
				<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($done_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$np = 1;
				foreach ($pending_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				}
				$res .= '</div>
				<button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$reject_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($reject_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .='</div>
				</div>';
			}
			if($admin['id_division'] == 1 && $admin['id_role'] == 7) {
				$width_done_dirsdm 		= ($done_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;
				$width_pending_dirsdm 	= ($pending_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;
				$width_reject_dirsdm 	= ($reject_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;

				$res .= '<div class="summary">
				<div class="summary-title">
				  Sudah disetujui Direktur SDM
				  <span>'.$done_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-success" style="width:'.$width_done_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Belum disetujui Direktur SDM
				  <span>'.$pending_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-warning" style="width:'.$width_pending_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>	
			  <div class="summary">
				<div class="summary-title">
				  Direvisi Direktur SDM
				  <span>'.$reject_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-danger" style="width:'.$width_reject_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>	
			  <div class="container-title">
				<h3>Tinjauan</h3>
			  </div>	
			  <div class="is-block">	
				<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>	
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($done_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($pending_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Tidak disetujui <span class="badge is-danger">' . $reject_dirsdm->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($reject_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .='</div>
				</div>';
			}
		}
		$res .= '</div>
	  </div>';

	  echo $res;
	}

	public function rekapFKPBJ($year)
	{
		$total_pending_dir_fkpbj = $this->mm->total_pending_dir_fkpbj($year);
		$pending_dirsdm		= $this->fk->statusApprove(7, $year);
		$fkpbj_pending_dirke 	= $this->fk->statusApprove(8, $year);
		$fkpbj_pending_dirut 	= $this->fk->statusApprove(9, $year);
		$total_fkpbj 		= $this->fk->statusApprove(5,$year);
		$fkpbj_pending 		= $this->fk->statusApprove(0,$year);
		$fkpbj_pending_ap 	= $this->fk->statusApprove(1,$year);
		$fkpbj_pending_kp	= $this->fk->statusApprove(2,$year);
		$fkpbj_success 		= $this->fk->statusApprove(3,$year);
		$fkpbj_reject 		= $this->fk->statusApprove(4,$year);

		$width_fkpbj_success = ($fkpbj_success->num_rows() / $total_fkpbj->num_rows()) * 100;

		$res = '<div class="panel" style="height: 550px">
		<div class="scrollbar" id="custom-scroll" style="height: 538px">
		  <div class="container-title">
			<h3>Data FKPBJ '.$year.'</h3>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  FKPBJ Selesai
			  <span>'.$fkpbj_success->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:'.$width_fkpbj_success.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">'.$fkpbj_success->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fkpbj_success->result() as $key) {
                $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}

			$width_fkpbj_pending = ($fkpbj_pending->num_rows() / $total_fkpbj->num_rows()) * 100;
			
			if ($year == '2022') {
				$res .= '</div>
				  </div>
				  <div class="summary">
					<div class="summary-title">
					  Belum disetujui User
					  <span>0</span>
					</div>
					<div class="summary-bars">
					  <span class="bar-top is-warning" style="width:0%"></span>
					  <span class="bar-bottom"></span>
					</div>
					<button class="accordion-header">Belum disetujui User<span class="badge is-warning">0</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
			} else {
				$res .= '</div>
				  </div>
				  <div class="summary">
					<div class="summary-title">
					  Belum disetujui User
					  <span>'.$fkpbj_pending->num_rows().'</span>
					</div>
					<div class="summary-bars">
					  <span class="bar-top is-warning" style="width:'.$width_fkpbj_pending.'%"></span>
					  <span class="bar-bottom"></span>
					</div>
					<button class="accordion-header">Belum disetujui User<span class="badge is-warning">'.$fkpbj_pending->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1; 
					foreach ($fkpbj_pending->result() as $key) {
						$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}			
			}
			$width_fkpbj_pending_ap = ($fkpbj_pending_ap->num_rows() / $total_fkpbj->num_rows()) * 100;
            $res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Admin Procurement
                  <span>'.$fkpbj_pending_ap->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fkpbj_pending_ap.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Admin Procurement<span class="badge is-warning">'.$fkpbj_pending_ap->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

                <div class="accordion-panel">';
				$no = 1; 
				foreach ($fkpbj_pending_ap->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$width_fkpbj_pending_kp = ($fkpbj_pending_kp->num_rows() / $total_fkpbj->num_rows()) * 100;
			$res .='</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Ka.Dept Procurement
                  <span>'.$fkpbj_pending_kp->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fkpbj_pending_kp.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Ka.Dept Procurement
                <span class="badge is-warning">'.$fkpbj_pending_kp->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fkpbj_pending_kp->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}

				$width_pending_dir = ($total_pending_dir_fkpbj->num_rows() / $total_fkpbj->num_rows()) * 100;
		$res .= '</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Pejabat Pengadaan
			  <span>' . $total_pending_dir_fkpbj->num_rows() . '</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:' . $width_pending_dir . '%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum di setujui Kadiv SDM umum
			<span class="badge is-warning">' . $pending_dirsdm->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
			<div class="accordion-panel">';
		$no = 1;
		foreach ($pending_dirsdm->result() as $key) {
			$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			$no++;
		}
		$res .= '</div>';
		$res .= '<button class="accordion-header">Belum disetujui Direktur Keuangan
                <span class="badge is-warning">' . $fkpbj_pending_dirke->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_pending_dirke->result() as $key) {
			$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			$no++;
		}
		$res .= '</div>';
		$res .= '<button class="accordion-header">Belum disetujui Direktur Utama
                <span class="badge is-warning">' . $fkpbj_pending_dirut->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_pending_dirut->result() as $key) {
			$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->fppbj_division.'/'.$key->id_fppbj.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			$no++;
		}

				$width_fkpbj_reject = ($fkpbj_reject->num_rows() / $total_fkpbj->num_rows()) * 100;
			$res .= '</div>
              </div>
            </div>
		  </div>';
		  
		  echo $res;
	}

	public function rekapFP3($year)
	{
		$total_fp3 			= $this->fp->getTotalFP3(5,$year);
		$fp3_pending 		= $this->fp->statusApprove(0,$year);
		$fp3_pending_ap 	= $this->fp->statusApprove(1,$year);
		$fp3_pending_kp		= $this->fp->statusApprove(2,$year);
		$fp3_success 		= $this->fp->statusApprove(3,$year);
		$fp3_reject 		= $this->fp->statusApprove(4,$year);

		$fp3_pending_sdm 	= $this->fp->statusApprove(7,$year);
		$fp3_pending_dirke 	= $this->fp->statusApprove(8,$year);
		$fp3_pending_dirut 	= $this->fp->statusApprove(9,$year);
		$fp3_pending_aldir 	= $this->fp->statusApprove(10,$year);
		
		if ($year == '2022') {
			$total_fp3_success_rows = 30;
		} else {
			$total_fp3_success_rows = $fp3_success->num_rows();
		}
		
		$width_fp3_success = ($total_fp3_success_rows / $total_fp3->num_rows()) * 100;

		$res = '<div class="panel" style="height: 550px">
		<div class="scrollbar" id="custom-scroll" style="height: 538px">
		  <div class="container-title">
			<h3>Data FP3 '.$year.'</h3>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  FP3 Selesai
			  <span>'.$total_fp3_success_rows.'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:'.$width_fp3_success.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">'.$total_fp3_success_rows.'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fp3_success->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}

			$width_fp3_pending = ($fp3_pending->num_rows() / $total_fp3->num_rows()) * 100;
			
			if ($year == '2022') {
				$res .= '</div>
				  </div>
				  <div class="summary">
					<div class="summary-title">
					  Belum disetujui User
					  <span>0</span>
					</div>
					<div class="summary-bars">
					  <span class="bar-top is-warning" style="width:0%"></span>
					  <span class="bar-bottom"></span>
					</div>
					<button class="accordion-header">Belum disetujui User<span class="badge is-warning">0</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
			} else {
				$res .= '</div>
				  </div>
				  <div class="summary">
					<div class="summary-title">
					  Belum disetujui User
					  <span>'.$fp3_pending->num_rows().'</span>
					</div>
					<div class="summary-bars">
					  <span class="bar-top is-warning" style="width:'.$width_fp3_pending.'%"></span>
					  <span class="bar-bottom"></span>
					</div>
					<button class="accordion-header">Belum disetujui User<span class="badge is-warning">'.$fp3_pending->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1; 
					foreach ($fp3_pending->result() as $key) {
						$res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}
			}
				$width_fp3_pending_ap = ($fp3_pending_ap->num_rows() / $total_fp3->num_rows()) * 100;
            $res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Admin Pengendalian
                  <span>'.$fp3_pending_ap->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending_ap.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Admin Pengendalian<span class="badge is-warning">'.$fp3_pending_ap->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

                <div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_ap->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$width_fp3_pending_kp = ($fp3_pending_kp->num_rows() / $total_fp3->num_rows()) * 100;
			$res .='</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Ka.Dept Procurement
                  <span>'.$fp3_pending_kp->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending_kp.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Ka.Dept Procurement
                <span class="badge is-warning">'.$fp3_pending_kp->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_kp->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$width_fp3_pending_aldir = ($fp3_pending_aldir->num_rows() / $total_fp3->num_rows()) * 100;
			$res .='</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Pejabat Pengadaan
                  <span>'.$fp3_pending_aldir->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending_aldir.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Kadiv SDM dan Umum
                <span class="badge is-warning">'.$fp3_pending_sdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_sdm->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$res .= '</div>';
			$res .= '<button class="accordion-header">Belum disetujui Direktur Keuangan
                <span class="badge is-warning">'.$fp3_pending_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_dirke->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$res .= '</div>';
			$res .= '<button class="accordion-header">Belum disetujui Direktur Utama
                <span class="badge is-warning">'.$fp3_pending_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_dirut->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('fp3/index/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$width_fp3_reject = ($fp3_reject->num_rows() / $total_fp3->num_rows()) * 100;
			$res .= '</div>';
              $res .='</div>
              
            </div>
		  </div>';
		  
		  echo $res;
	}

	public function rekapFPPBJBaru($year)
	{
		$total_perencanaan	= count($this->dm->rekap_department($year, 2)) + count($this->dm->rekap_department_fkpbj($year, 2)) + count($this->dm->rekap_department_fp3($year, 2));
		$total_fppbj_semua	= $this->mm->get_total_fppbj_semua($year,2);
		$fppbj_selesai		= $this->mm->get_fppbj_selesai($year,2);
		$fppbj_pending		= $this->mm->get_fppbj_pending($year,2);
		$pending_admin_hsse = $this->mm->get_pending_admin_hsse($year,2);
		$pending_admin_pengendalian = $this->mm->get_pending_admin_pengendalian($year,2);
		$pending_kadept_proc = $this->mm->get_pending_kadept_proc($year,2);
		$total_pending_dir  = $this->mm->total_pending_dir($year,2);
		$fppbj_reject		= $this->mm->get_fppbj_reject($year,2);
		//------------------------------------------------------
		$pending_dirut		= $this->mm->get_pending_dirut($year,2);
		$pending_dirke		= $this->mm->get_pending_dirke($year,2);
		$pending_dirsdm		= $this->mm->get_pending_dirsdm($year,2);
		$done_dirut			= $this->mm->get_done_dirut($year,2);
		$done_dirke			= $this->mm->get_done_dirke($year,2);
		$done_dirsdm		= $this->mm->get_done_dirsdm($year,2);
		$reject_dirut		= $this->mm->get_reject_dirut($year,2);
		$reject_dirke		= $this->mm->get_reject_dirke($year,2);
		$reject_dirsdm		= $this->mm->get_reject_dirsdm($year,2);
		$total_fppbj_direktur = $this->mm->get_total_fppbj_directure($year,2);
		$total_fppbj_dirke  = $this->mm->get_total_fppbj_dirke($year,2);
		$total_fppbj_dirut  = $this->mm->get_total_fppbj_dirut($year,2);
		$total_fppbj_dirsdm = $this->mm->get_total_fppbj_dirsdm($year,2);
		$total_pending_dir  = $this->mm->total_pending_dir($year,2);

		$width_fppbj_selesai = ($fppbj_selesai->num_rows() / $total_perencanaan) * 100;

		$res = '<div class="panel" style="height: 550px">

		<div class="scrollbar" id="custom-scroll" style="height: 538px">

		  <div class="container-title">
			<h3>Data FPPBJ Baru '.$year.'</h3>
		  </div>

		  <div class="summary">
			<div class="summary-title">
			  FPPBJ Selesai
			  <span>'.$fppbj_selesai->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:'.$width_fppbj_selesai.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">'.$fppbj_selesai->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fppbj_selesai->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
		  	}
			$width_pending = ($fppbj_pending->num_rows() / $total_perencanaan) * 100;
			$res .='</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui User
			  <span>'.$fppbj_pending->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_pending.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui User<span class="badge is-warning">'.$fppbj_reject->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fppbj_reject->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';	
				  $no++;
			}
			$width_admin_hsse = ($pending_admin_hsse->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>		  
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui HSSE
			  <span>'.$pending_admin_hsse->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_admin_hsse.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui HSSE<span class="badge is-warning">'.$pending_admin_hsse->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1;
			foreach ($pending_admin_hsse->result() as $key) {
				$res .= '<p>'. $no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';	
				$no++;
			}
			if ($year == '2022') {
				$total_pending_admin_pengendalian_rows = 0;
			} else {
				$total_pending_admin_pengendalian_rows = $pending_admin_pengendalian->num_rows();
			}
			
			$width_admin_pengendalian = ($total_pending_admin_pengendalian_rows / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Admin Pengendalian
			  <span>'.$total_pending_admin_pengendalian_rows.'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_admin_pengendalian.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui Admin Pengendalian<span class="badge is-warning">'.$total_pending_admin_pengendalian_rows.'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			
			if ($year != '2022') {
				$no=1; 
				foreach ($pending_admin_pengendalian->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}	
			}
			$width_kadept_proc = ($pending_kadept_proc->num_rows() / $total_perencanaan) * 100; 
			$res .='</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Ka.Dept Procurement
			  <span>'.$pending_kadept_proc->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_kadept_proc.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum disetujui Ka.Dept Procurement
			<span class="badge is-warning">'.$pending_kadept_proc->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_kadept_proc->result() as $key) {
				$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}
			$width_pending_dir = ($total_pending_dir->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  Belum disetujui Pejabat Pengadaan
			  <span>'.$total_pending_dir->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-warning" style="width:'.$width_pending_dir.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Belum di setujui Kadiv SDM umum
			<span class="badge is-warning">'.$pending_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirsdm->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
			$res .= '</div>

			<button class="accordion-header" style="font-size:16px;">Belum di setujui Direktur Keuangan dan Umum
			<span class="badge is-warning">'.$pending_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirke->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
			$res .= '</div>

			<button class="accordion-header">Belum di setujui Direktur Utama
			<span class="badge is-warning">'.$pending_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

			<div class="accordion-panel">';
			$no=1; 
			foreach ($pending_dirut->result() as $key) {
			   $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
			   $no++;
			}
			$width_reject = ($fppbj_reject->num_rows() / $total_perencanaan) * 100;
			$res .= '</div>
		  </div>
		  <div class="summary">
			
		  </div>';
		  
		if($admin['id_division'] == 1 && $admin['id_role'] ==7 ||  $admin['id_role'] ==8 || $admin['id_role'] ==9) {
			$res .= '<div class="container-title">
			<h3>Data FPPBJ Otorisasi '.$year.'</h3>
		  </div>';
		  	if($admin['id_division'] == 1 && $admin['id_role'] == 9) {

				$width_done_dirut 		= ($done_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;
				$width_pending_dirut 	= ($pending_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;
				$width_reject_dirut 	= ($reject_dirut->num_rows() / $total_fppbj_dirut->num_rows()) * 100;

				$res .= '<div class="summary">
							<div class="summary-title">
							Sudah disetujui Direktur Utama
							<span>'.$done_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-success" style="width:'.width_done_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="summary">
							<div class="summary-title">
							Belum disetujui Direktur Utama
							<span>'.$pending_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-warning" style="width:'.$width_pending_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="summary">
							<div class="summary-title">
							Direvisi Direktur Utama
							<span>'.$reject_dirut->num_rows().'/'.$total_fppbj_dirut->num_rows().'</span>
							</div>
							<div class="summary-bars">
							<span class="bar-top is-danger" style="width:'.$width_reject_dirut.'%"></span>
							<span class="bar-bottom"></span>
							</div>
						</div>
						<div class="container-title">
							<h3>Tinjauan</h3>
						</div>
						<div class="is-block">
							<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
							<div class="accordion-panel">';
							$no = 1; 
							foreach ($done_dirut->result() as $key) {
								$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
								$no++;
							}
					$res .= '</div>
					<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1;
					foreach ($pending_dirut->result() as $key) {
						$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}
					$res .= '</div>
					<button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$reject_dirut->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
					<div class="accordion-panel">';
					$no = 1;
					foreach ($reject_dirut->result() as $key) {
						$res .= '<p>'.$no.'<a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
						$no++;
					}
					$res .= '</div>
					</div>';
			}
			if($admin['id_division'] == 1 && $admin['id_role'] == 8) {
				$width_done_dirke 	 = ($done_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;
				$width_pending_dirke = ($pending_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;
				$width_reject_dirke  = ($reject_dirke->num_rows() / $total_fppbj_dirke->num_rows()) * 100;

				$res .= '<div class="summary">
				<div class="summary-title">
				  Sudah disetujui Direktur Keuangan
				  <span>'.$done_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-success" style="width:'.$width_done_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Belum disetujui Direktur Keuangan
				  <span>'.$pending_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-warning" style="width:'.$width_pending_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Direvisi Direktur Keuangan
				  <span>'.$reject_dirke->num_rows().'/'.$total_fppbj_dirke->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-danger" style="width:'.$width_reject_dirke.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="container-title">
				<h3>Tinjauan</h3>
			  </div>
			  <div class="is-block">
				<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($done_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$np = 1;
				foreach ($pending_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				}
				$res .= '</div>
				<button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$reject_dirke->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($reject_dirke->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .='</div>
				</div>';
			}
			if($admin['id_division'] == 1 && $admin['id_role'] == 7) {
				$width_done_dirsdm 		= ($done_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;
				$width_pending_dirsdm 	= ($pending_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;
				$width_reject_dirsdm 	= ($reject_dirsdm->num_rows() / $total_fppbj_dirsdm->num_rows()) * 100;

				$res .= '<div class="summary">
				<div class="summary-title">
				  Sudah disetujui Direktur SDM
				  <span>'.$done_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-success" style="width:'.$width_done_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>
			  <div class="summary">
				<div class="summary-title">
				  Belum disetujui Direktur SDM
				  <span>'.$pending_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-warning" style="width:'.$width_pending_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>	
			  <div class="summary">
				<div class="summary-title">
				  Direvisi Direktur SDM
				  <span>'.$reject_dirsdm->num_rows().'/'.$total_fppbj_dirsdm->num_rows().'</span>
				</div>
				<div class="summary-bars">
				  <span class="bar-top is-danger" style="width:'.$width_reject_dirsdm.'%"></span>
				  <span class="bar-bottom"></span>
				</div>
			  </div>	
			  <div class="container-title">
				<h3>Tinjauan</h3>
			  </div>	
			  <div class="is-block">	
				<button class="accordion-header">Disetujui <span class="badge is-success">'.$done_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>	
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($done_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Belum disetujui<span class="badge is-warning">'.$pending_dirsdm->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($pending_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .= '</div>
				<button class="accordion-header">Tidak disetujui <span class="badge is-danger">' . $reject_dirsdm->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1;
				foreach ($reject_dirsdm->result() as $key) {
					$res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$res .='</div>
				</div>';
			}
		}
		$res .= '</div>
	  </div>';

	  echo $res;
	}

	public function rekapFP3_($year)
	{
		$total_fp3 			= $this->fp->statusApprove(5,$year);
		$fp3_pending 		= $this->fp->statusApprove(0,$year);
		$fp3_pending_ap 	= $this->fp->statusApprove(1,$year);
		$fp3_pending_kp		= $this->fp->statusApprove(2,$year);
		$fp3_success 		= $this->fp->statusApprove(3,$year);
		$fp3_reject 		= $this->fp->statusApprove(4,$year);

		$width_fp3_success = ($fp3_success->num_rows() / $total_fp3->num_rows()) * 100;

		$res = '<div class="panel" style="height: 550px">
		<div class="scrollbar" id="custom-scroll" style="height: 538px">
		  <div class="container-title">
			<h3>Data FP3 '.$year.'</h3>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  FP3 Selesai
			  <span>'.$fp3_success->num_rows().'/'.$total_fp3->num_rows().'</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:'.$width_fp3_success.'%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">'.$fp3_success->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
			<div class="accordion-panel">';
			$no = 1; 
			foreach ($fp3_success->result() as $key) {
                $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
				$no++;
			}

			$width_fp3_pending = ($fp3_pending->num_rows() / $total_fp3->num_rows()) * 100;
            $res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui User
                  <span>'.$fp3_pending->num_rows().'/'.$total_fp3->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui User<span class="badge is-warning">'.$fp3_pending->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$width_fp3_pending_ap = ($fp3_pending_ap->num_rows() / $total_fp3->num_rows()) * 100;
            $res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Admin Procurement
                  <span>'.$fp3_pending_ap->num_rows().'/'.$total_fp3->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending_ap.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Admin Procurement<span class="badge is-warning">'.$fp3_pending_ap->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

                <div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_ap->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
			$width_fp3_pending_kp = ($fp3_pending_kp->num_rows() / $total_fp3->num_rows()) * 100;
			$res .='</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Ka.Dept Procurement
                  <span>'.$fp3_pending_kp->num_rows().'/'.$total_fp3->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:'.$width_fp3_pending_kp.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Ka.Dept Procurement
                <span class="badge is-warning">'.$fp3_pending_kp->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_pending_kp->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
				$width_fp3_reject = ($fp3_reject->num_rows() / $total_fp3->num_rows()) * 100;
			$res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Tidak Disetujui
                  <span>'.$fp3_reject->num_rows().'/'.$total_fp3->num_rows().'</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-danger" style="width:'.$width_fp3_reject.'%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Tidak disetujui <span class="badge is-danger">'.$fp3_reject->num_rows().'</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
				$no = 1; 
				foreach ($fp3_reject->result() as $key) {
                    $res .= '<p>'.$no.'. <a href="'.site_url('pemaketan/division/'.$key->id_division.'/'.$key->id.'/'.date('Y',strtotime($key->entry_stamp))).'">'.$key->nama_pengadaan.'</a></p>';
					$no++;
				}
            $res .= '</div>
              </div>
            </div>
		  </div>';
		  
		  echo $res;
	}

	public function rekapFKPBJBaru($year)
	{
		$total_fkpbj 		= $this->fk->statusApprove(5, $year, 2);
		$fkpbj_pending 		= $this->fk->statusApprove(0, $year, 2);
		$fkpbj_pending_ap 	= $this->fk->statusApprove(1, $year, 2);
		$fkpbj_pending_kp	= $this->fk->statusApprove(2, $year, 2);
		$fkpbj_success 		= $this->fk->statusApprove(3, $year, 2);
		$fkpbj_reject 		= $this->fk->statusApprove(4, $year, 2);

		if ($year == '2022') {
			$total_fkpbj_success_rows = 29;
			$total_fkpbj_rows = 29;
		} else {
			$total_fkpbj_success_rows = $fkpbj_success->num_rows();
			$total_fkpbj_rows = $total_fkpbj->num_rows();
		}
		
		$width_fkpbj_success = ($total_fkpbj_success_rows / $total_fkpbj_rows) * 100;

		$res = '<div class="panel" style="height: 550px">
		<div class="scrollbar" id="custom-scroll" style="height: 538px">
		  <div class="container-title">
			<h3>Data FKPBJ Baru ' . $year . '</h3>
		  </div>
		  <div class="summary">
			<div class="summary-title">
			  FKPBJ Selesai
			  <span>' . $total_fkpbj_success_rows . '</span>
			</div>
			<div class="summary-bars">
			  <span class="bar-top is-success" style="width:' . $width_fkpbj_success . '%"></span>
			  <span class="bar-bottom"></span>
			</div>
			<button class="accordion-header">Disetujui <span class="badge is-success">' . $total_fkpbj_success_rows . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
			<div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_success->result() as $key) {
			$res .= '<p>' . $no . '. <a href="' . site_url('pemaketan/division/' . $key->id_division . '/' . $key->id . '/' . date('Y', strtotime($key->entry_stamp))) . '">' . $key->nama_pengadaan . '</a></p>';
			$no++;
		}

		$width_fkpbj_pending = ($fkpbj_pending->num_rows() / $total_fkpbj->num_rows()) * 100;
		$res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui User
                  <span>' . $fkpbj_pending->num_rows() . '</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:' . $width_fkpbj_pending . '%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui User<span class="badge is-warning">' . $fkpbj_pending->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
				<div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_pending->result() as $key) {
			$res .= '<p>' . $no . '. <a href="' . site_url('pemaketan/division/' . $key->id_division . '/' . $key->id . '/' . date('Y', strtotime($key->entry_stamp))) . '">' . $key->nama_pengadaan . '</a></p>';
			$no++;
		}
		$width_fkpbj_pending_ap = ($fkpbj_pending_ap->num_rows() / $total_fkpbj->num_rows()) * 100;
		$res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Admin Procurement
                  <span>' . $fkpbj_pending_ap->num_rows() . '</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:' . $width_fkpbj_pending_ap . '%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Admin Procurement<span class="badge is-warning">' . $fkpbj_pending_ap->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

                <div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_pending_ap->result() as $key) {
			$res .= '<p>' . $no . '. <a href="' . site_url('pemaketan/division/' . $key->id_division . '/' . $key->id . '/' . date('Y', strtotime($key->entry_stamp))) . '">' . $key->nama_pengadaan . '</a></p>';
			$no++;
		}
		$width_fkpbj_pending_kp = ($fkpbj_pending_kp->num_rows() / $total_fkpbj->num_rows()) * 100;
		$res .= '</div>
              </div>
              <div class="summary">
                <div class="summary-title">
                  Belum disetujui Ka.Dept Procurement
                  <span>' . $fkpbj_pending_kp->num_rows() . '</span>
                </div>
                <div class="summary-bars">
                  <span class="bar-top is-warning" style="width:' . $width_fkpbj_pending_kp . '%"></span>
                  <span class="bar-bottom"></span>
                </div>
                <button class="accordion-header">Belum disetujui Ka.Dept Procurement
                <span class="badge is-warning">' . $fkpbj_pending_kp->num_rows() . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>

				<div class="accordion-panel">';
		$no = 1;
		foreach ($fkpbj_pending_kp->result() as $key) {
			$res .= '<p>' . $no . '. <a href="' . site_url('pemaketan/division/' . $key->id_division . '/' . $key->id . '/' . date('Y', strtotime($key->entry_stamp))) . '">' . $key->nama_pengadaan . '</a></p>';
			$no++;
		}
		$width_fkpbj_reject = ($fkpbj_reject->num_rows() / $total_fkpbj->num_rows()) * 100;
		$res .= '</div>
              </div>
              
            </div>
		  </div>';

		echo $res;
	}
}