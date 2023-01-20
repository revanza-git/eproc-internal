<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengadaan_model extends CI_Model {

	public $fppbj="ms_fppbj";

	public function getData()
	{
		$this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");
		$query = "	SELECT  nama_pengadaan AS name,
							count(*) AS total,
							year_anggaran AS year,
							ms_fppbj.id
					FROM ".$this->fppbj."
					WHERE ms_fppbj.del = 0 ";

		$query .= " GROUP BY YEAR(entry_stamp)";

		if($this->input->post('filter')){
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}

		// echo $this->db->last_query();

		return $query;
	}

	public function getDataByYear($year)
	{
		// echo $year;die;
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
		$this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

		$query = "	SELECT  nama_pengadaan AS name,
							count(*) AS total,
							year_anggaran AS year,
							ms_fppbj.id
					FROM ".$this->fppbj."
					WHERE ms_fppbj.del = 0 AND ms_fppbj.is_status = 1";

		$query .= " GROUP BY YEAR(entry_stamp)";

		if($this->input->post('filter')){
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}

		// echo $this->db->last_query();

		return $query;
	}

	function getDataFP3ByYear($year){
		$admin = $this->session->userdata('admin');

		$get = "WHERE ms_fppbj.is_status = 1 AND ms_fppbj.del = 0 AND ms_fppbj.entry_stamp LIKE '%".$year."%' ";

		$query = "	SELECT  name,
							count(*) AS total,
							ms_fppbj.id,
							tb_division.id id_division
					FROM ".$this->fppbj."
					JOIN tb_division ON ms_fppbj.id_division = tb_division.id 
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