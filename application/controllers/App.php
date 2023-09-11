<?php

class App extends MY_Controller
{
	public $eproc_db;

	function __construct(){
		parent::__construct();
		$this->admin = $this->session->userdata('admin');
		$this->load->model('main_model','mm');
		$this->load->model('fppbj_model','fm');
		$this->eproc_db = $this->load->database('eproc',true);
		$this->load->helper('string');
	}

	public function index()
	{
		$admin = $this->session->userdata('admin');
		$getUser = $this->mm->to_app($admin['id_user']);

		$data = array(
			'name' 		 => $getUser['name'],
			'id_user' 	 => $getUser['id'],
			'id_role' 	 => $getUser['id_role'],
			'role_name' 	 => $getUser['role_name'],
			'type' 		 => 'admin',
			'app' 		 => 1,
			'id_sbu' 	 => $getUser['id_sbu'],
			'sbu_name' 	 => $getUser['sbu_name'],
			'division'	 => $admin['division'],
			'id_division' => $admin['id_division'],
		);
		
		$key = random_string('unique').random_string('unique').random_string('unique').random_string('unique');
		
		$this->eproc_db->insert('ms_key_value', array(
			'key' => $key,
			'value'=> json_encode($data),
		));

		$this->session->sess_destroy();
		
		header("Location: ".$this->config->item("pengadaan_url")."main/login_admin?key=".$key);
	}

	public function getUsers()
	{
		$query = " 	SELECT 
						a.id_division,
						a.id_role_app2,
						a.name,
						b.username,
						b.password
					FROM
						ms_admin a
					JOIN
						ms_login b ON b.id_user=a.id AND type = 'admin' 
					";
		$query = $this->eproc_db->query($query)->result_array();

		$tabel = '<table border=1>
		<tr>
			<td>Divisi</td>
			<td>Role</td>
			<td>Nama</td>
			<td>Username</td>
			<td>Password</td>
		</tr>
		';

		foreach ($query as $key => $value) {
			$divisi = $this->db->where('id',$value['id_division'])->get('tb_division')->row_array();
			$role = $this->db->where('id',$value['id_role_app2'])->get('tb_role')->row_array();

			$tabel .= '<tr>
			<td>'.$divisi['name'].'</td>
			<td>'.$role['name'].'</td>
			<td>'.$value['name'].'</td>
			<td>'.$value['username'].'</td>
			<td>'.$value['password'].'</td>
			</tr>';
		}

		$tabel .= '</table>';

		echo $tabel;
	}

	public function cleanTrEmailBlast()
	{
		$fppbj = $this->db->where('del',0)->get('ms_fppbj')->result_array();
		$this->db->where('del',0)->delete('tr_email_blast');
		foreach ($fppbj as $key => $value) {
			$this->fm->insert_tr_email_blast($value['id'],$value['jwpp_start'],$value['metode_pengadaan']);
		}
		echo "string";
	}

	public function show_lampiran()
	{
		$query = " SELECT * FROM ms_fppbj WHERE del = 0 AND entry_stamp LIKE '%2020%' AND ((pr_lampiran != null OR pr_lampiran != '') OR (kak_lampiran != '' OR kak_lampiran != null)) ";

		$data = $this->db->query($query)->result_array();

		$a = '<table border=1>
			<tr>
				<td>Nama Pengadaan</td>
				<td>Lampiran PR</td>
				<td>KAK Lampiran</td>
			</tr>';

		foreach ($data as $key => $value) {
			$a .= '<tr>
				<td><a href="'.site_url('pemaketan/division/'.$value['id_division'].'/'.$value['id']).'">'.$value['nama_pengadaan'].'</a></td>
				<td>'.$value['pr_lampiran'].'</td>
				<td>'.$value['kak_lampiran'].'</td>
			</tr>';
		}

		$a .='</table>';

		echo $a;
	}

	public function clean_division()
	{
		$procurement = $this->eproc_db->get('ms_procurement')->result_array();

		$division = array(
			6 => 3,// sekper
			7 => 4,//Hukum
			8 => 5,//HSSE
			9 => 2,//spi
			10=> 8,//lng&gas
			11=> 7,//perencanaan&pengembangan bisnis
			12=>10,//reliability
			13=>12,//QMQA
			14=> 9,//Transportasi LNG & FSRU
			15=>11,//gas & ORF
			16=>13,//controller
			17=>14,//perbendaharaan
			18=>18,//layum
			19=>16,//perbendaharaan
			20=>15,//sisteminformasi
			21=> 1,//procurement
			22=> 6,//resiko
		);

		foreach ($procurement as $key => $value) {
			$update = array(
				'id_division' => $division[$value['budget_spender']]
			);

			if ($value['id_division'] == '0' || $value['id_division'] == '' || $value['id_division'] == null) {
				$this->eproc_db->where('id', $value['id'])->update('ms_procurement',$update);
			}
		}
	}
}