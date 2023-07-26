<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fp3_model extends MY_Model
{
	public $table = 'ms_fp3';
	function __construct()
	{
		parent::__construct();
	}
	function getFppbj($form = "", $year=null)
	{
		// date('yyyy')
		// echo date('Y');
		$year = date('yyyy');
		$admin = $this->session->userdata('admin');
		/*$query = "	SELECT
						a.*
						FROM ms_fppbj a WHERE 
                            (is_status = 0 AND a.del = 0 AND is_approved = 3 AND (idr_anggaran <= 100000000 OR (idr_anggaran > 100000000 AND metode_pengadaan = 3) AND id_division = ?)
                            OR  

                            (is_status = 0 AND a.del = 0 AND is_approved = 4 AND idr_anggaran > 100000000)) AND id_division = ?";*/
		if ($admin['id_division'] == 1) {
			$division = "";
		} else {
			$division = " AND id_division = " . $admin['id_division'];
		}
		if (isset($year)) {
            $year_conditional = " AND a.entry_stamp LIKE '%$year%'";
        } else {
            $year_conditional = "";
        }

		$year_anggaran = " AND a.year_anggaran = 2023 ";
		$query = "	SELECT
						a.*,
						b.name division
					FROM 
						ms_fppbj a 
					LEFT JOIN
						tb_division b ON b.id=a.id_division
					WHERE 
						(is_status = 0 AND a.del = 0 AND (idr_anggaran <= 100000000 OR (idr_anggaran > 100000000 AND metode_pengadaan = 3) $division $year_conditional $year_anggaran)
						OR  

						(is_status = 0 AND a.del = 0 AND idr_anggaran > 100000000))  $division $year_conditional $year_anggaran

						OR
						(is_status = 2 AND a.del = 0 $division $year_conditional $year_anggaran)

						OR

						(is_status = 1 AND a.del = 0 $division $year_conditional $year_anggaran)
						
						-- AND

						";
						

		$query = $this->db->query($query)->result_array();
		$data = array();
		$data[''] = 'Pilih Salah Satu';
		foreach ($query as $key => $value) {
			$year = date('Y', strtotime($value['entry_stamp']));
			$data[$value['id']] = $value['division'] . ' - ' . $value['nama_pengadaan'] . ' - ' . $year;
		}
		return $data;
	}

	function getData($id_division = "", $id_fppbj = "", $year = "")
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
						a.nama_pengadaan,
						b.nama_pengadaan nama_lama,
						a.metode_pengadaan,
						a.jadwal_pengadaan,
						a.desc,
						a.is_status,
						a.id,
						a.status,
						b.id id_fppbj,
						a.kak_lampiran,
						a.is_approved,
						a.is_reject,
						c.value,
						a.entry_stamp,
						b.id_division,
						b.tipe_pengadaan,
						b.idr_anggaran,
						a.pejabat_pengadaan_id

						FROM ms_fp3 a

						LEFT JOIN ms_fppbj b ON b.id = a.id_fppbj						
						LEFT JOIN tr_note c ON c.id_fppbj=b.id AND c.type = 'reject'
					WHERE a.del = 0 AND b.id_division = $id_division $id_fppbj $year_anggaran";

		// if ($admin['id_division'] != 1) {
		// 	$query .= " AND b.id_division = ".$admin['id_division'];
		// }

		// echo $this->db->last_query();die;

		$query .= " GROUP BY a.id ";
		if ($this->input->post('filter')) {
			$query .= $this->filter($form, $this->input->post('filter'), false);
		}
		return $query;
	}

	function selectData($id)
	{
		$query = "	SELECT 
						a.nama_pengadaan,
						b.nama_pengadaan nama_lama,
						a.metode_pengadaan,
						a.jadwal_pengadaan,
						a.desc,
						a.is_status,
						a.id,
						a.status,
						a.kak_lampiran,
						a.is_approved,
						a.is_reject,
						a.idr_anggaran,
						c.value,
						a.id_fppbj,
						a.jwpp_start,
						a.jwpp_end,
						d.name metode_name,
						b.idr_anggaran,
						b.metode_pengadaan metode_lama,
						b.jwpp_start jwpp_start_lama,
						b.jwpp_end jwpp_end_lama,
						b.desc_dokumen desc_lama,
						b.kak_lampiran kak_lama,
						a.no_pr,
						b.no_pr no_pr_lama,
						a.pr_lampiran,
						b.pr_lampiran pr_lama,
						e.name pic_name,
						a.desc_batal

						FROM ms_fp3 a

						LEFT JOIN ms_fppbj b ON b.id = a.id_fppbj
						LEFT JOIN tr_note c ON b.id = c.id_fppbj
						LEFT JOIN tb_proc_method d ON d.id=a.metode_pengadaan
						LEFT JOIN eproc.ms_admin e ON e.id=b.id_pic
	
					WHERE a.id = ? AND a.del = 0";
		$query = $this->db->query($query, array($id));
		return $query->row_array();
	}

	function updateStatus($id, $status = '')
	{
		$query	= "UPDATE
						`ms_fp3` 
						SET
						`status` = " . $status . "
						WHERE `ms_fp3`.`id`=?";
		$query = $this->db->query($query, array($id));
		return $query;
	}

	public function get_data_fppbj($id)
	{
		$query = "SELECT * FROM ms_fppbj WHERE id = " . $id;
		return $this->db->query($query)->row_array();
	}

	public function edit_to_fp3($data)
	{
		$admin = $this->session->userdata('admin');
		$id_fppbj = $data['id_fppbj'];
		$is_approved = (in_array($admin['id_role'], array(3, 6))) ? 2 : 0;
		$fp3_type = $data['fp3_type'];
		unset($data['fp3_type']);
		// $perubahan = $this->cekPerubahan($data);

		$get_data = "SELECT * FROM ms_fppbj WHERE id = " . $data['id_fppbj'];
		$get_fppbj = $this->db->query($get_data)->row_array();

		if ($fp3_type == 'ubah') {
			$data_fppbj = array(
				// 'nama_pengadaan'   => $data['nama_pengadaan'],
				// 'metode_pengadaan' => $data['metode_pengadaan'],
				// 'desc' 			   => $data['desc'],
				'edit_stamp' 	   => date('Y-m-d H:i:s'),
				'is_status' 	   => 1,
				'is_approved' 	   => $is_approved,
				'is_reject'		   => 0
			);

			$this->db->where('id', $id_fppbj)->update('ms_fppbj', $data_fppbj);

			if ($data['nama_pengadaan'] != '') {
				$data['perubahan'] = 'nama';
				$data['nama_pengadaan'] = $data['nama_pengadaan'];
			} else {
				$data['nama_pengadaan'] = $get_fppbj['nama_pengadaan'];
			}

			if ($data['metode_pengadaan'] != '') {
				$data['perubahan'] = 'metode';
				$data['metode_pengadaan'] = $data['metode_pengadaan'];
			} else {
				$data['metode_pengadaan'] = $get_fppbj['metode_pengadaan'];
			}

			if ($data['jwpp_start'] != '') {
				$data['perubahan'] = 'time_line';
				$data['jwpp_start'] = $data['jwpp_start'];
				$data['jwpp_end'] = $data['jwpp_end'];
			} else {
				$data['jwpp_start'] = $get_fppbj['jwpp_start'];
				$data['jwpp_end'] = $get_fppbj['jwpp_end'];
			}

			foreach ($data as $key => $value) {
				if ($value == '' || $value == null) {
					$data[$key] == $get_fppbj[$key];
				}
			}
			$data['is_approved'] = $is_approved;

			$this->db->insert('ms_fp3', $data);
			unset($data['id_fppbj']);
			return $this->insertHistoryPengadaan($id_fppbj, $data['status'], $data);
		} else {
			$up = array(
				'is_writeoff' => 0,
				'is_status'	  => 1,
				'is_approved' => $is_approved,
				'edit_stamp'  => date('Y-m-d H:i:s'),
				'is_reject'	  => 0,
				'del'	 	  => 1,
			);
			$this->db->where('id', $data['id_fppbj'])->update('ms_fppbj', $up);
			$data_fp3 = array(
				'id_fppbj' => $get_fppbj['id'],
				'status' => 'hapus',
				'nama_pengadaan' => $get_fppbj['nama_pengadaan'],
				'metode_pengadaan' => $get_fppbj['metode_pengadaan'],
				'jwpp_start' => $get_fppbj['jwpp_start'],
				'jwpp_end' => $get_fppbj['jwpp_end'],
				'desc' => $data['desc'],
				'idr_anggaran' => $get_fppbj['idr_anggaran'],
				'is_status' => 1,
				'is_approved' => $is_approved,
				'kak_lampiran' => $data['kak_lampiran'],
				'pr_lampiran' => $data['pr_lampiran'],
				'no_pr'	=> $get_fppbj['no_pr'],
				'desc_batal' => $data['desc_batal']
			);
			$this->insert_tr_email_blast($get_fppbj['id'], $get_fppbj['jwpp_start'], $get_fppbj['metode_pengadaan']);
			$this->db->insert('ms_fp3', $data_fp3);
			unset($data_fp3['id_fppbj']);
			return $this->insertHistoryPengadaan($id_fppbj, $data_fp3['status'], $data_fp3);
		}
	}

	// public function cekPerubahan($data)
	// {
	// 	if (isset($data['nama_pengadaan'])) {
	// 		$return = "nama";
	// 	} else {
	// 		if (isset(var)) {
	// 			# code...
	// 		}
	// 	}
	// }

	public function insert_tr_email_blast($id, $jwpp_start, $metode)
	{
		$metode_day	= 0;

		$get_metode = $this->db->where('id', $metode)->get('tb_proc_method')->row_array();

		$metode = trim($get_metode['name']);
		if ($metode == "Pelelangan") {
			$metode_day = 60; //60 hari
		} else if ($metode == "Pengadaan Langsung") {
			$metode_day = 10; // 10 hari
		} else if ($metode == "Pemilihan Langsung") {
			$metode_day = 45; //45 hari
		} else if ($metode == "Swakelola") {
			$metode_day = 0;
		} else if ($metode == "Penunjukan Langsung") {
			$metode_day = 20; // 20 hari
		} else {
			// $metode_day = 1;
		}
		$yellow = $jwpp_start;
		// echo $value['metode_pengadaan'].'<br>';
		$start_yellow 	= $metode_day + 14;
		$end_yellow 	= $metode_day + 1;
		$yellow__ 		= date('Y-m-d', strtotime($yellow . '-' . $start_yellow . ' days'));
		$yellow___ 		= date('Y-m-d', strtotime($yellow . '-' . $end_yellow . ' days'));

		$prevDate 		= date('Y-m-d', strtotime($yellow__ . '-14 days'));

		$this->date_periode($id, $prevDate, $yellow__, 1);
		$this->date_periode($id, $yellow__, $yellow___, 2);
	}

	public function date_periode($id, $begin, $end, $type)
	{
		$begin = new DateTime($begin);
		$end = new DateTime($end);

		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);

		foreach ($period as $dt) {
			// echo $dt->format("Y-m-d").'<br>';die;
			$data = array(
				'id_pengadaan'	=> $id,
				'date_alert'	=> $dt->format("Y-m-d"),
				'type'			=> $type
			);
			$this->db->where('id_pengadaan', $id)->update('tr_email_blast', $data);
		}
	}

	function delete($id)
	{

		$get_data = $this->db->where('id', $id)->get('ms_fppbj')->row_array();

		$activity = $this->session->userdata('admin')['name'] . " menghapus data : " . $get_data['nama_pengadaan'];

		$this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

		return $this->db->where('id', $id)
			->update($this->table, array(
				'del' => 1,
				'edit_stamp' => timestamp()
			));
	}

	public function getTotalFP3($year = "")
	{
		$admin = $this->session->userdata('admin');

		if ($year != '') {
			$q = ' entry_stamp LIKE "%' . $year . '%"';
		} else {
			$q = '';
		}

		$query = " 	SELECT
						*
					FROM
						ms_fp3
					WHERE
						$q";

		$query = $this->db->query($query);

		// echo $this->db->last_query();die;

		return $query;
	}


	public function statusApprove($status = "", $year = "")
	{
		$admin = $this->session->userdata('admin');

		if ($admin['id_division'] == 1 || $admin['id_division'] == 5) {
			$id_division = "";
		} else {
			$id_division = " AND id_division = " . $admin['id_division'];
		}

		if ($year != '') {
			$q = ' entry_stamp LIKE "%' . $year . '%" AND ';
		} else {
			$q = '';
		}

		if ($status == '4') {
			$s = " $q del = 0 AND is_status = 1 AND is_reject = 1 $id_division";
		} elseif ($status == '5') {
			$s = " $q is_status = 1 AND del = 0 $id_division";
		} elseif ($status == '7') {
			$s = " $q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND ((idr_anggaran > 100000000 AND idr_anggaran <= 1000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))";
		} elseif ($status == '8') {
			$s = " $q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND ((idr_anggaran > 1000000000 AND idr_anggaran <= 10000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))";
		} elseif ($status == '9') {
			$s = " $q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND idr_anggaran >= 10000000000 AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5)";
		} elseif ($status == '10') {
			$s = " ($q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND ((idr_anggaran > 100000000 AND idr_anggaran <= 1000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))) OR ($q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND ((idr_anggaran > 1000000000 AND idr_anggaran <= 10000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))) OR ($q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND idr_anggaran >= 10000000000 AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))";
		} elseif ($status == '3') {
			$s = " ($q del = 0 $id_division AND is_status = 1 AND is_approved = 3 AND is_reject = 0 AND idr_anggaran <= 100000000) OR ($q del = 0 $id_division AND is_status = 1 AND is_approved = 4 AND is_reject = 0 AND ((idr_anggaran > 100000000 AND idr_anggaran <= 1000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))) OR ($q del = 0 $id_division AND is_status = 1 AND is_approved = 4 AND is_reject = 0 AND ((idr_anggaran > 1000000000 AND idr_anggaran <= 10000000000) AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))) OR ($q del = 0 $id_division AND is_status = 1 AND is_approved = 4 AND is_reject = 0 AND idr_anggaran >= 10000000000 AND (metode_pengadaan = 4 OR metode_pengadaan = 2 OR metode_pengadaan = 1 OR metode_pengadaan = 5))";
		} else {
			$s = " $q del = 0 $id_division AND is_status = 1 AND is_reject = 0 AND is_approved = " . $status;
		}

		$query = " 	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						$s";
						
		if ($status == 0 || $status == '0') {
            log_message('error', 'start reject fp3');
            log_message('error', $query);
            log_message('error', 'end reject fp3');
        }

		$query = $this->db->query($query);
		
		return $query;
	}
}
