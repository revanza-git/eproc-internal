<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemaketan_model extends MY_Model{
	public $ms_user = 'ms_user';
	public $fppbj = 'ms_fppbj';
	public $eproc_db;
	protected $table = 'pemaketan';
	protected $fppbj_table = 'ms_fppbj';
	protected $division_table = 'tb_division';
	protected $user_table = 'ms_user';
	protected $admin_table = 'ms_admin';
	protected $analysis_table = 'tr_analisa_risiko';
	protected $analysis_detail_table = 'tr_analisa_risiko_detail';
	protected $swakelola_table = 'tr_analisa_swakelola';
	protected $planning_table = 'ms_perencanaan_umum';
	protected $pic_table = 'pemaketan_pic';
	function __construct(){
		parent::__construct();
		$this->eproc_db = $this->load->database('eproc',true);
	}

	function pejabatPengadaan()
	{
		$query = "SELECT id, name FROM " . $this->ms_user . " where id_role = 9 or id_role = 8 or id_role = 7 or id_role = 2";

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
	
	/**
	 * Get procurement officers
	 * @return array
	 */
	public function get_procurement_officers() {
		$query = "SELECT id, name FROM {$this->user_table} 
				 WHERE id_role IN (9, 8, 7, 2)";
		
		$data = $this->db->query($query)->result_array();
		
		$result = [];
		foreach ($data as $value) {
			if ($value['name'] == "Haryo") {
				$value['name'] = "Kepala Procurement";
			}
			$result[$value['id']] = $value['name'];
		}
		
		return $result;
	}
	
	/**
	 * Get pemaketan data by year with role-based filtering
	 * @param string $year
	 * @return string
	 */
	public function getData($year) {
		$admin = $this->session->userdata('admin');
		$years = explode(',', $year);
		
		// Build year condition
		if (count($years) == 1) {
			$query_year = "{$this->fppbj_table}.entry_stamp BETWEEN '{$years[0]}-01-01 00:00:00' AND '{$years[0]}-12-31 23:59:59'";
		} else {
			$query_year = "{$this->fppbj_table}.entry_stamp BETWEEN '{$years[0]}-01-01 00:00:00' AND '{$years[count($years)-1]}-12-31 23:59:59'";
		}
		
		// Build role-based conditions
		$where_conditions = $this->build_role_conditions($admin, $query_year);
		
		// Build main query
		$query = "SELECT name, count(*) AS total, {$this->fppbj_table}.id, {$this->division_table}.id id_division
				 FROM {$this->fppbj_table}
				 JOIN {$this->division_table} ON {$this->fppbj_table}.id_division = {$this->division_table}.id 
				 {$where_conditions}";
		
		if ($this->input->post('filter')) {
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}
		
		$query .= " GROUP BY id_division";
		return $query;
	}
	
	/**
	 * Get pemaketan data by year
	 * @param string $year
	 * @return array
	 */
	public function getDataByYear($year) {
		$query = "SELECT nama_pengadaan AS name,
						count(*) AS total,
						year_anggaran AS year,
						{$this->fppbj_table}.id
				FROM {$this->fppbj_table}
				WHERE is_reject = 0 
			    AND is_approved_hse < 2
				AND ((year_anggaran LIKE '%{$year}%' AND del = 0 AND is_approved = 3 
					AND (idr_anggaran <= 100000000 OR (idr_anggaran > 100000000 AND metode_pengadaan = 3))))
				OR (year_anggaran LIKE '%{$year}%' AND del = 0 AND is_approved = 4 
					AND idr_anggaran > 100000000)
				OR (year_anggaran LIKE '%{$year}%' AND is_status = 2 AND is_approved = 3 AND del = 0)
				OR (year_anggaran LIKE '%{$year}%' AND is_status = 1 AND is_approved = 3 AND del = 0)";
		
		return $this->db->query($query)->result_array();
	}
	
	/**
	 * Get pemaketan data by division
	 * @param array $form
	 * @param string $id_division
	 * @param string $id_fppbj
	 * @param string $year
	 * @return string
	 */
	public function getDataDivision($form = [], $id_division = "", $id_fppbj = "0", $year = "") {
		$admin = $this->session->userdata('admin');
		
		// Build year condition
		$year_condition = $this->build_year_condition($year);
		
		// Build role-based conditions
		$where_conditions = $this->build_division_conditions($admin, $year_condition, $id_division, $id_fppbj);
		
		// Build main query
		$query = "SELECT {$this->fppbj_table}.*, 
						tb_proc_method.name metode,
						tr_note.value,
						tr_note.type,
						fp3.nama_pengadaan nama_baru,
						fp3.desc_batal
				 FROM {$this->fppbj_table}
				 LEFT JOIN tb_proc_method ON {$this->fppbj_table}.metode_pengadaan = tb_proc_method.id
				 LEFT JOIN tr_note ON tr_note.id_fppbj = {$this->fppbj_table}.id AND tr_note.type = 'reject'
				 LEFT JOIN ms_fp3 fp3 ON fp3.id_fppbj = {$this->fppbj_table}.id
				 WHERE {$where_conditions}";
		
		if ($this->input->post('filter')) {
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}
		
		$query .= " GROUP BY {$this->fppbj_table}.id";
		return $query;
	}
	
	/**
	 * Build role-based conditions for queries
	 * @param array $admin
	 * @param string $query_year
	 * @return string
	 */
	protected function build_role_conditions($admin, $query_year) {
		if (!in_array($admin['id_role'], [7, 8, 9])) {
			$pic = ($admin['id_role'] == 6) ? " AND {$this->fppbj_table}.id_pic = {$admin['id_user']}" : " ";
			return "WHERE {$this->fppbj_table}.del = 0 AND {$query_year}{$pic}";
		}
		
		$conditions = [
			7 => "WHERE ({$this->fppbj_table}.is_status = 0 OR {$this->fppbj_table}.is_status = 2) 
				  AND {$query_year} AND {$this->fppbj_table}.is_approved = 3 
				  AND {$this->fppbj_table}.is_reject = 0 AND {$this->fppbj_table}.is_writeoff = 0 
				  AND (({$this->fppbj_table}.idr_anggaran > 100000000) 
				  AND ({$this->fppbj_table}.metode_pengadaan IN (4, 2, 1))) 
				  AND {$this->fppbj_table}.del = 0",
			8 => "WHERE ({$this->fppbj_table}.is_status = 0 OR {$this->fppbj_table}.is_status = 2) 
				  AND {$query_year} AND {$this->fppbj_table}.is_approved = 4 
				  AND {$this->fppbj_table}.is_reject = 0 AND {$this->fppbj_table}.is_writeoff = 0 
				  AND ({$this->fppbj_table}.idr_anggaran > 1000000000) 
				  AND ({$this->fppbj_table}.metode_pengadaan IN (4, 2, 1))",
			9 => "WHERE ({$this->fppbj_table}.is_status = 0 OR {$this->fppbj_table}.is_status = 2) 
				  AND {$query_year} AND {$this->fppbj_table}.is_approved = 5 
				  AND {$this->fppbj_table}.is_reject = 0 AND {$this->fppbj_table}.is_writeoff = 0 
				  AND {$this->fppbj_table}.idr_anggaran >= 10000000000 
				  AND ({$this->fppbj_table}.metode_pengadaan IN (4, 2, 1))"
		];
		
		return $conditions[$admin['id_role']] ?? $conditions[7];
	}
	
	/**
	 * Build year condition for queries
	 * @param string $year
	 * @return string
	 */
	protected function build_year_condition($year) {
		if (empty($year)) {
			return " ";
		}
		
		$years = explode(',', $year);
		if (count($years) == 1) {
			return "{$this->fppbj_table}.entry_stamp BETWEEN '{$years[0]}-01-01 00:00:00' AND '{$years[0]}-12-31 23:59:59' AND";
		}
		
		return "{$this->fppbj_table}.entry_stamp BETWEEN '{$years[0]}-01-01 00:00:00' AND '{$years[count($years)-1]}-12-31 23:59:59' AND";
	}
	
	/**
	 * Get PIC data for a FPPBJ
	 * @param int $fppbj_id The FPPBJ ID
	 * @param string|null $method The procurement method
	 * @return CI_DB_result
	 */
	public function get_pic($fppbj_id, $method = null) {
		$fppbj = $this->db->where('id', $fppbj_id)->get($this->fppbj_table)->row_array();
		
		$id_pic = ($fppbj['metode_pengadaan'] != 3) ? " AND id != 110" : "";
		
		$query = "SELECT id, name, email 
				 FROM {$this->admin_table} 
				 WHERE id_role_app2 = 6 AND del = 0 {$id_pic}";
		
		return $this->eproc_db->query($query);
	}
	
	/**
	 * Get analysis data
	 * @param int $id
	 * @return array
	 */
	public function get_analysis($id) {
		$fppbj = $this->db->where('id', $id)->get($this->fppbj_table)->row_array();
		
		$query = "SELECT a.* 
				 FROM {$this->analysis_detail_table} a 
				 INNER JOIN {$this->analysis_table} b ON b.id = a.id_analisa_risiko
				 WHERE b.id_fppbj = {$fppbj['id']}
				 GROUP BY a.id 
				 ORDER BY a.id ASC";
		
		return $this->db->query($query)->result_array();
	}
	
	/**
	 * Get swakelola data
	 * @param int $id
	 * @return array
	 */
	public function get_swakelola($id) {
		return $this->db->where('id_fppbj', $id)
						->get($this->swakelola_table)
						->row_array();
	}
	
	/**
	 * Update pemaketan data
	 * @param int $id
	 * @param array $data
	 * @return bool
	 */
	public function update($id, $data) {
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				$value = array_filter($value);
				$data[$key] = !empty($value) ? implode(',', $value) : null;
			}
		}
		
		return $this->db->where('id', $id)
						->update($this->fppbj_table, $data);
	}
	
	/**
	 * Check if planning exists for year
	 * @param string $year
	 * @return int
	 */
	public function check_perencanaan_umum($year) {
		return $this->db->where('year', $year)
						->where('del', 0)
						->get($this->planning_table)
						->num_rows();
	}
}