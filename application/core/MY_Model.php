<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	protected $table;
	protected $primary_key = 'id';
	protected $db_group = 'default';
	protected $db;

	public function __construct() {
		parent::__construct();
		$this->db = $this->load->database($this->db_group, TRUE);
	}

	protected function build_where_clause($conditions = []) {
		$where = [];
		$params = [];

		foreach ($conditions as $key => $value) {
			if (is_array($value)) {
				$where[] = $key . ' ' . $value[0] . ' ?';
				$params[] = $value[1];
			} else {
				$where[] = $key . ' = ?';
				$params[] = $value;
			}
		}

		return [
			'clause' => implode(' AND ', $where),
			'params' => $params
		];
	}

	protected function build_year_filter($year, $field = 'entry_stamp') {
		if (!empty($year)) {
			return " AND $field LIKE '%$year%'";
		}
		return '';
	}

	protected function build_division_filter($division_id) {
		if ($division_id != 1 && $division_id != 5) {
			return " AND id_division = $division_id";
		}
		return '';
	}

	protected function build_perencanaan_filter($is_perencanaan) {
		if ($is_perencanaan != '1') {
			return " AND is_perencanaan = $is_perencanaan";
		}
		return " AND is_perencanaan = 1";
	}

	public function get_by_id($id) {
		return $this->db->where($this->primary_key, $id)
					   ->get($this->table)
					   ->row_array();
	}

	public function get_all($conditions = [], $order_by = null) {
		$where = $this->build_where_clause($conditions);
		
		$query = $this->db->where($where['clause'], $where['params']);
		
		if ($order_by) {
			$query = $query->order_by($order_by);
		}
		
		return $query->get($this->table);
	}

	public function update($id, $data) {
		return $this->db->where($this->primary_key, $id)
					   ->update($this->table, $data);
	}

	public function delete($id) {
		return $this->db->where($this->primary_key, $id)
					   ->update($this->table, ['del' => 1]);
	}

	public function count($conditions = []) {
		$where = $this->build_where_clause($conditions);
		return $this->db->where($where['clause'], $where['params'])
					   ->from($this->table)
					   ->count_all_results();
	}

	function getData($form){
		$query = "SELECT * FROM ".$this->table." WHERE del = 0";
		if($this->input->post('filter')){
			$query .= $this->filter($this->input->post('filter'), false);
		}
		return $query;
	}

	function insert($data){
		$data['del'] = 0;
		foreach ($data as $key => $value) {

			if(is_array($value)){
				foreach ($value as $keys => $values) {
					if($values=='') unset($value[$keys]);
				}

				$data[$key] = implode(',',$value);

			}
		}
		$a =  $this->db->insert($this->table, $data);

		return $a;
	}

	function remove($id){
		return $this->db->where('id', $id)
						->delete($this->table);
	}

	function filter($form, $filter=array(), $prefix=true){
		$query = '';
		if($prefix) {
			$query .= ' WHERE';
		}else{
			$query .= ' AND ';
		}
		$i = 0;
		$_filter = $this->keyForm($form['filter']);
		
		foreach ($filter as $key => $value) {
			$query .= '(';
			$j = 0;
			$_key = str_replace('|', '.', $key);
			foreach($value as $keyField => $valueField){
				$type = $_filter[$key];
				$empty = false;
				$res = '';

				switch ($type) {

					case 'date_range':
						if($valueField[$key.'_start']==''&&$valueField[$key.'_end']!=''){
							$res .= '(`'.$key.'` <  "'.date('Y-m-d',strtotime($valueField[$key.'_end'])).'")';
						}else if($valueField[$key.'_start']!=''&&$valueField[$key.'_end']==''){
							$res .= '(`'.$key.'` >  "'.date('Y-m-d',strtotime($valueField[$key.'_start'])).'")';
						}else if($valueField[$key.'_start']!=''&&$valueField[$key.'_end']!=''){
							$res .= '(`'.$key.'` BETWEEN "'.date('Y-m-d',strtotime($valueField[$key.'_start'])).'" AND "'.date('Y-m-d',strtotime($valueField[$key.'_end'])).'")';
						}else{
							$empty = true;
						}
						break;
					case 'date_range_lifetime':
						if(is_array($valueField)){
							if($valueField[$key.'_start']==''&&$valueField[$key.'_end']!=''){
								$res .= '(`'.$key.'` <  "'.date('Y-m-d',strtotime($valueField[$key.'_end'])).'" AND `'.$key.'` NOT LIKE "lifetime")';
							}else if($valueField[$key.'_start']!=''&&$valueField[$key.'_end']==''){
								$res .= '(`'.$key.'` >  "'.date('Y-m-d',strtotime($valueField[$key.'_start'])).'" AND `'.$key.'` NOT LIKE "lifetime")';
							}else if($valueField[$key.'_start']!=''&&$valueField[$key.'_end']!=''){
								$res .= '(`'.$key.'` BETWEEN "'.date('Y-m-d',strtotime($valueField[$key.'_start'])).'" AND "'.date('Y-m-d',strtotime($valueField[$key.'_end'])).'" AND `'.$key.'` NOT LIKE "lifetime")';
							}else{
								$empty = true;
							}
						}else{
							$res .= '('.$_key.' LIKE "lifetime")';
						}
						break;
					case 'dropdown':
						if($valueField==''){
							$empty = true;
						}else{
							$res .= '('.$_key.' LIKE "'.$valueField.'")';
						}
						
						break;
					case 'text':
					default:
						if($valueField==''){
							$empty = true;
						}else{
							$res .= '('.$_key.' LIKE "%'.$valueField.'%")';
						}
						break;
				}
				if($keyField>0 && !$empty) $query .= ' OR ';
				$query.=$res;

				$j++;				
			}
			$query .= ')';

			$i++;

			if(count($filter)>$i) $query .= ' AND ';
		}
		return $query;
	}

	function keyForm($form){
		$return = array();
		foreach ($form as $key => $value) {
			if($value['type']=='date_range'||$value['type']=='date_range_lifetime'){
				$f = 'name';
			}else{
				$f = 'field';
			}

			$return[$value[$f]] = $value['type'];
		}
		return $return;
	}

	public function activity_log($id_user,$activity,$iden)
	{
		$arr = array(
			'id_user' 		=> $id_user,
			'activity'		=> $activity,
			'activity_date' => date('Y-m-d H:i:s'),
			'iden'			=> $iden
		);

		return $this->db->insert('tr_log_activity',$arr);
	}

	public function insertHistoryPengadaan($id_pengadaan,$type,$data)
	{
		unset($data['entry_stamp']);
		$data['id_pengadaan'] 	= $id_pengadaan;
		$data['status']			= $type;
		$data['entry_stamp']	= date('Y-m-d H:i:s');
		return $this->db->insert('tr_history_pengadaan', $data);
	}

}