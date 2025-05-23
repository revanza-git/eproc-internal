<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengadaan_model extends CI_Model {

	public $fppbj="ms_fppbj";
	
	function pejabatPengadaan()
	{
		$query = "SELECT id, name FROM ms_user where id_role = 9 or id_role = 8 or id_role = 7 or id_role = 2";

		$data = $this->db->query($query)->result_array();

		$result = array();
		foreach($data as $value)
		{
			if ($value['name'] == "Haryo") {
                $value['name'] = "Kepala Procurement";
            }
			$result[$value['id']] = $value['name'];
		}

		return $result;
	}

	public function getData()
	{
		$admin = $this->session->userdata('admin');
		log_message('debug', print_r($admin['id_role'],true));

		if($admin['id_role'] == 7){
			$approve = " AND is_approved = 3 AND 
			(ms_fppbj.is_status = 0 OR ms_fppbj.is_status = 2) AND 
			ms_fppbj.is_reject = 0 AND 
			ms_fppbj.is_writeoff = 0 AND 
			((ms_fppbj.idr_anggaran > 100000000) AND 
			(ms_fppbj.metode_pengadaan = 4 OR 
			ms_fppbj.metode_pengadaan = 2 OR 
			ms_fppbj.metode_pengadaan = 1))";
		}else if($admin['id_role'] == 8){
			$approve = " AND is_approved = 4 AND 
			(ms_fppbj.is_status = 0 OR ms_fppbj.is_status = 2) AND 
			ms_fppbj.is_reject = 0 AND 
			ms_fppbj.is_writeoff = 0 AND 
			((ms_fppbj.idr_anggaran > 1000000000) AND 
			(ms_fppbj.metode_pengadaan = 4 OR 
			ms_fppbj.metode_pengadaan = 2 OR 
			ms_fppbj.metode_pengadaan = 1))";
		}else if($admin['id_role'] == 9){
			$approve = " AND is_approved = 5 AND 
			(ms_fppbj.is_status = 0 OR ms_fppbj.is_status = 2) AND 
			ms_fppbj.is_reject = 0 AND 
			ms_fppbj.is_writeoff = 0 AND 
			((ms_fppbj.idr_anggaran > 10000000000) AND 
			(ms_fppbj.metode_pengadaan = 4 OR 
			ms_fppbj.metode_pengadaan = 2 OR 
			ms_fppbj.metode_pengadaan = 1))";
		}else{
			$approve= "";
		}

		$query = "	SELECT count(*) AS total, YEAR(entry_stamp) AS year
					FROM ".$this->fppbj."
					WHERE ms_fppbj.del = 0".$approve;

		$query .= " GROUP BY YEAR(entry_stamp)";

		log_message('error', $query);	

		if($this->input->post('filter')){
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}

		return $query;
	}

	public function getDataByYear($year)
	{
		$admin = $this->session->userdata('admin');
		if ($admin['id_role'] != in_array(7,8,9)) {
			if ($admin['id_role'] == 6) {
				$pic = " AND ms_fppbj.id_pic = ".$admin['id_user'];
			} else {
				$pic = " ";
			}
			
			$get = "WHERE ms_fppbj.del = 0 AND ms_fppbj.year_anggaran LIKE '%".$year."%' ".$pic;
		}
		$query = "	SELECT  nama_pengadaan AS name,
							count(*) AS total,
							year_anggaran AS year,
							ms_fppbj.id
					FROM ".$this->fppbj."
					".$get;
		// $query .= " GROUP BY year";

		$data = $this->db->query($query)->result_array();

		// echo $this->db->last_query();

		return $data;
	}

	public function getDataFP3()
	{
		$query = "	SELECT  b.nama_pengadaan AS name,
							count(*) AS total,
							year_anggaran AS year,
							b.id
					FROM ms_fp3 a 
					LEFT JOIN ".$this->fppbj." b ON b.id = a.id_fppbj";

		$query .= " GROUP BY YEAR(b.entry_stamp)";

		if($this->input->post('filter')){
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}

		// echo $this->db->last_query();
		log_message('error', $query);
		return $query;
	}

	function getDataFP3ByYear($year){
		$admin = $this->session->userdata('admin');

		$get = "WHERE ms_fppbj.entry_stamp LIKE '%".$year."%' ";

		$query = "	SELECT  name,
							count(*) AS total,
							ms_fppbj.id,
							tb_division.id id_division
					FROM ms_fp3
					LEFT JOIN ".$this->fppbj." ON ms_fppbj.id = ms_fp3.id_fppbj
					LEFT JOIN tb_division ON ms_fppbj.id_division = tb_division.id 
					 ".$get."";
		if($this->input->post('filter')){
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}
		//echo $query;die;
		$query .= " GROUP BY id_division ";
		
		return $query;
	}
}

/* End of file Pengadaan_model.php */
/* Location: ./application/models/Pengadaan_model.php */