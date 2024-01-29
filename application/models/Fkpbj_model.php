<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fkpbj_model extends MY_Model
{
	public $table = 'ms_fkpbj';
	function __construct()
	{
		parent::__construct();
	}
	function getFppbj($form)
	{
		$query = "	SELECT
						a.*
						FROM ms_fppbj a WHERE a.del=0";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['nama_pengadaan'];
		}
		return $data;
	}

	function getData($form = array(), $id_division = "", $id_fppbj = "", $year = "")
	{
		$admin = $this->session->userdata('admin');

		if ($year != '') {
			$year_anggaran = " AND b.entry_stamp LIKE '%" . $year . "%'";
		} else {
			$year_anggaran = " ";
		}

		if ($id_fppbj == '0' || $id_fppbj == '') {
			$id_fppbj = '';
		} else {
			$id_fppbj = 'AND a.id_fppbj = ' . $id_fppbj;
		}

		$query = "	SELECT
						b.nama_pengadaan,
						a.desc,
						a.file,
						a.is_status,
						a.id,
						a.is_approved

						FROM " . $this->table . " a

						LEFT JOIN ms_fppbj b ON b.id = a.id_fppbj

					WHERE a.del = 0 AND b.id_division = $id_division $id_fppbj $year_anggaran";
		if ($this->input->post('filter')) {
			$query .= $this->filter($form, $this->input->post('filter'), true);
		}

		return $query;
	}

	// function selectData($id){
	// 	$query = "SELECT 
	// 					b.nama_pengadaan,
	// 					a.desc,
	// 					a.file,
	// 					a.is_status,
	// 					a.id

	// 					FROM ".$this->table." a
	// 					LEFT JOIN ms_fppbj b ON b.id = a.id_fppbj

	// 				WHERE a.del = 0 and a.id = ?";
	// 	$query = $this->db->query($query, array($id));
	// 	return $query->row_array();
	// }

	function selectData($id)
	{
		$query = "SELECT 	ms_fkpbj.*, tb_division.name division
						FROM " . $this->table . "
						LEFT JOIN tb_division ON tb_division.id = ms_fkpbj.id_division
						WHERE ms_fkpbj.id = " . $id . "";
		$query = $this->db->query($query, array($id));
		return $query->row_array();
	}

	function selectDataFKPBJ($id)
	{
		$query = "SELECT 	ms_fkpbj.*, tb_division.name division
						FROM " . $this->table . "
						LEFT JOIN tb_division ON tb_division.id = ms_fkpbj.id_division
						WHERE ms_fkpbj.id = " . $id . "";
		$query = $this->db->query($query);
		return $query;
	}

	function get_fkpbj($id)
	{
		$query = "SELECT 	ms_fppbj.*, tb_division.name division
						FROM " . $this->table . "
						LEFT JOIN tb_division ON tb_division.id = ms_fppbj.id_division
						WHERE ms_fppbj.id = " . $id . "";
		$query = $this->db->query($query, array($id));
		return $query->row_array();
	}

	function get_fkpbj_by_id_fppbj($id)
	{
		$query = "SELECT 	ms_fkpbj.*, 
							tb_division.name division,
							b.desc_dokumen desc_dokumen_fppbj,
							b.tipe_pengadaan,
							c.name metode_name
						FROM " . $this->table . "
						LEFT JOIN tb_division ON tb_division.id = ms_fkpbj.id_division
						LEFT JOIN ms_fppbj b ON b.id=ms_fkpbj.id_fppbj
						LEFT JOIN tb_proc_method c ON c.id=ms_fkpbj.metode_pengadaan
						WHERE ms_fkpbj.id_fppbj = " . $id . "";
		$query = $this->db->query($query, array($id));
		return $query->row_array();
	}

	public function insert($id,$save)
	{
		//print_r($save);die;
		$update_fppbj = array(
			'nama_pengadaan'		 => $save['nama_pengadaan'],
			'metode_pengadaan'		 => $save['metode_pengadaan'],
			'pr_lampiran'			 => $save['pr_lampiran'],
			'kak_lampiran' 			 => $save['kak_lampiran'],
			'idr_anggaran' 			 => $save['idr_anggaran'],
			'usd_anggaran' 			 => $save['usd_anggaran'],
			'year_anggaran' 		 => $save['year_anggaran'],
			'hps' 					 => $save['hps'],
			'lingkup_kerja' 		 => $save['lingkup_kerja'],
			'penggolongan_penyedia'  => $save['penggolongan_penyedia'],
			'desc_metode_pembayaran' => $save['desc_metode_pembayaran'],
			'jenis_kontrak' 		 => $save['jenis_kontrak'],
			'sistem_kontrak' 		 => $save['sistem_kontrak'],
			'is_status' 			 => $save['is_status'],
			'is_approved' 			 => $save['is_approved'],
			'edit_stamp' 			 => $save['edit_stamp'],
			'no_pr'					 => $save['no_pr'],
			'desc_dokumen'			 => $save['desc_dokumen'],
			'jwpp_start'			 => $save['jwpp_start'],
			'jwpp_end'			 	 => $save['jwpp_end']
		);

		$this->db->where('id', $id)->update('ms_fppbj', $update_fppbj);

		$this->db->where('id_fppbj', $id)->update('ms_fp3', array('edit_stamp' => date('Y-m-d H:i:s'), 'del' => 1));

		$getDpt = $this->db->where('id_fppbj', $id)->get('tr_analisa_risiko')->row_array();
		if (count($getDpt) > 0) {
			$this->db->where('id_fppbj', $id)->update('tr_analisa_risiko', array('dpt_list' => $save['dpt'], 'edit_stamp' => date('Y-m-d H:i:s'),));
		} else {
			$this->db->insert('tr_analisa_risiko', array(
				'dpt_list' => $save['dpt'],
				'id_fppbj' => $id,
				'entry_stamp' => date('Y-m-d H:i:s'),
				'del' => 0
			));
		}

		return $this->db->insert('ms_fkpbj', $save);
	}

	public function statusApprove($status, $year, $is_perencanaan = "1")
	{
		$admin = $this->session->userdata('admin');

		if ($status == '4') {
			$s = " AND fkpbj.is_reject = 1 ";
		} elseif ($status == '5') {
			$s = "";
		} else {
			$s = " AND fkpbj.is_reject = 0 AND fkpbj.is_approved = " . $status;
		}

		if ($year != '') {
			$q = ' AND fkpbj.entry_stamp LIKE "%' . $year . '%"';
		} else {
			$q = '';
		}

		if ($is_perencanaan != '1') {
			$selection = " fkpbj.*, fppbj.* ";
		 	$join_fppbj = " JOIN ms_fppbj fppbj ON fkpbj.id_fppbj = fppbj.id";
		 	$join_fppbj_conditional = " AND fppbj.is_perencanaan = 2 AND YEAR(fppbj.entry_stamp) = $year and fppbj.is_approved = 3";
		} else {
			$selection = " fkpbj.*, fppbj.id_division as fppbj_division ";
            $join_fppbj = " JOIN ms_fppbj fppbj ON fkpbj.id_fppbj = fppbj.id";
            $join_fppbj_conditional = " GROUP BY id_fppbj";
		}

		$division_query = '';
		if ($admin['id_division'] != 1 && $admin['id_division'] != 5) {
			$division_query = " AND fkpbj.id_division = " . $admin['id_division'];
		}

		$query = " 	SELECT
						$selection
					FROM
					". $this->table ." fkpbj $join_fppbj
					WHERE
					fkpbj.del = 0 AND fppbj.del = 0 AND fkpbj.is_status = 2 $s $q $division_query $join_fppbj_conditional";

		$query = $this->db->query($query);
		
		return $query;
	}
	
	public function getDataFp3($id_fppbj)
	{
		$query = $this->db->where('del', 0)->where('id_fppbj', $id_fppbj)->order_by('id', 'desc')->get('ms_fp3');
		return $query->row_array();
	}

	public function get_fkpbj_pending($year,$is_perencanaan="1"){
		$id_role = $this->session->userdata('admin')['id_role'];
		$id_division = $this->session->userdata('admin')['id_division'];

		if ($id_division != 1 && $id_division != 5) {
			$divisi = "id_division = ".$id_division." AND ";
		} else{
			$divisi = " ";
		}
		
		if($year != ''){
			$q = ' AND entry_stamp LIKE "%'.$year.'%" ';
		} else{
			$q = '';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " AND is_perencanaan = ".$is_perencanaan;
		} else {
			$perencanaan = " AND is_perencanaan = 1";
		}
		
		$sql = "	SELECT
						*
				  	FROM
				  		ms_fppbj
				  	WHERE 
				  		$divisi del = 0 AND is_approved = 0 AND is_status = 2 AND is_reject = 0 ".$q.$perencanaan;
		
		$query = $this->db->query($sql);

		

		
		return $query;
	}

	public function get_total_fkpbj_semua($year,$is_perencanaan="1"){
		$id_role = $this->session->userdata('admin')['id_role'];
		$id_division = $this->session->userdata('admin')['id_division'];

		if($year != ''){
			$q = ' AND entry_stamp LIKE "%'.$year.'%" ';
		} else{
			$q = '';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " AND is_perencanaan = ".$is_perencanaan;
		} else {
			$perencanaan = " AND is_perencanaan = 1";
		}

		$sql = "SELECT
						*
				  FROM
				  		ms_fppbj
				  WHERE 
				  		is_status = 2 AND del = 0".$q.$perencanaan;

		if ($id_division != 1 && $id_division != 5) {
			$sql .= " AND id_division = ".$id_division;
		}
		
		$query = $this->db->query($sql);
		return $query;
	}

	public function get_fkpbj_selesai($year,$is_perencanaan='1'){
		$id_division = $this->session->userdata('admin')['id_division'];

		if ($id_division != 1 && $id_division != 5) {
			$divisi = "id_division = ".$id_division." AND ";
		}else{
			$divisi = '';
		}

		if($year != ''){
			$q = ' entry_stamp LIKE "%'.$year.'%" AND ';
		} else{
			$q = '';
		}

        if ($is_perencanaan != '1') {
            $sql = "SELECT * from ms_fppbj a where a.is_status = 1 AND a.is_perencanaan = 2 AND YEAR(a.entry_stamp) = $year and is_approved = 3";
        } else {
            $sql = "SELECT
					*
				FROM
					ms_fppbj
				WHERE 
					is_approved_hse < 2
                    AND (".$divisi." $q is_perencanaan = 1 AND is_status = 2 AND is_reject = 0 AND del = 0 AND is_approved = 3 AND (idr_anggaran <= 100000000))
					OR  (".$divisi." $q is_perencanaan = 1 AND is_status = 2 AND is_reject = 0 AND del = 0 AND is_approved = 4 AND idr_anggaran > 100000000)
					";
        }
        
		$query = $this->db->query($sql);
		return $query;
	}

	public function get_fkpbj_reject($year,$is_perencanaan="1"){
		$id_role = $this->session->userdata('admin')['id_role'];
		$id_division = $this->session->userdata('admin')['id_division'];

		if ($id_division!= 1 && $id_division != 5) {
			$divisi = "id_division = ".$id_division." AND ";
		} else{
			$divisi = '';
		}

		if($year != ''){
			$q = ' AND entry_stamp LIKE "%'.$year.'%" AND ';
		} else{
			$q = ' AND ';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " is_perencanaan = ".$is_perencanaan;
		} else {
			$perencanaan = " is_perencanaan = 1";
		}
		
		$sql = "SELECT
						*
				  FROM
				  		ms_fppbj
				  WHERE 
				  ".$divisi."
				  		is_writeoff = 0
						AND 
						(is_status = 2 $q $perencanaan AND del = 0 AND is_reject = 1 AND idr_anggaran < 100000000)
                        OR
						(is_status = 2 $q $perencanaan AND del = 0 AND is_reject = 1 AND idr_anggaran > 100000000)";
		
		$query = $this->db->query($sql);
	
		return $query;
	}

	public function get_pending_dirut($year = "", $is_perencanaan = "1")
	{
		$admin = $this->session->userdata('admin');

		if ($admin['id_division'] != 1 && $admin['id_division'] != 5) {
			$q = "id_division = " . $admin['id_division'] . " AND";
		}

		if ($year != '') {
			$q2 = ' entry_stamp LIKE "%' . $year . '%" AND';
		} else {
			$q2 = '';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " is_perencanaan = " . $is_perencanaan;
		} else {
			$perencanaan = " is_perencanaan = 1";
		}

		$query = "SELECT 
						* 
					FROM 
						ms_fppbj
					WHERE
						$q $q2 $perencanaan AND is_status = 0 AND is_approved = 3 AND is_reject = 0 AND is_writeoff = 0 AND idr_anggaran >= 10000000000";
		return $this->db->query($query);
	}

	public function get_pending_dirke($year = "", $is_perencanaan = "1")
	{
		$admin = $this->session->userdata('admin');

		if ($admin['id_division'] != 1 && $admin['id_division'] != 5) {
			$q = "id_division = " . $admin['id_division'] . " AND";
		}

		if ($year != '') {
			$q2 = ' entry_stamp LIKE "%' . $year . '%" AND';
		} else {
			$q2 = '';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " is_perencanaan = " . $is_perencanaan;
		} else {
			$perencanaan = " is_perencanaan = 1";
		}

		$query = "SELECT 
						* 
					FROM 
						ms_fppbj
					WHERE
						$q $q2 $perencanaan AND del = 0 AND is_status = 0 AND is_approved = 3 AND is_reject = 0 AND is_writeoff = 0 AND (idr_anggaran > 1000000000 AND idr_anggaran <= 10000000000)";

		return $this->db->query($query);
	}

	public function get_pending_dirsdm($year = "", $is_perencanaan = "1")
	{
		$admin = $this->session->userdata('admin');

		if ($admin['id_division'] != 1 && $admin['id_division'] != 5) {
			$q = "id_division = " . $admin['id_division'] . " AND";
		}

		if ($year != '') {
			$q2 = ' entry_stamp LIKE "%' . $year . '%" AND';
		} else {
			$q2 = '';
		}

		if ($is_perencanaan != '1') {
			$perencanaan = " is_perencanaan = " . $is_perencanaan;
		} else {
			$perencanaan = " is_perencanaan = 1";
		}

		$query = "SELECT 
						* 
					FROM 
						ms_fppbj
					WHERE
						$q $q2 $perencanaan AND
						is_status = 2 AND 
				        is_approved = 3 AND 
				        is_reject = 0 AND 
				        is_writeoff = 0 AND 
				        ((idr_anggaran > 100000000 AND idr_anggaran <= 1000000000)) AND del = 0";

		return $this->db->query($query);
	}
}
