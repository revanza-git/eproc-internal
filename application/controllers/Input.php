<?php
/**
 * 
 */
class Input extends CI_Controller
{
	public $db_perencanaan;
	public $db_server_eproc;
	public $db_server_eproc_gabungan;
	public $eproc_db;
	
	function __construct()
	{
		parent::__construct();
		$this->db_perencanaan 			= $this->load->database('default',true);
		// $this->db_server_eproc 			= $this->load->database('server_eproc',true);
		// $this->db_server_eproc_gabungan = $this->load->database('server_eproc_gabungan',true);
		$this->eproc_db = $this->load->database('eproc',true);
	}

	public function index()
	{
		$data = array(
			'table' 	=> $this->getData(),
			'role_1'	=> $this->role_1(),
			'role_2'	=> $this->role_2(),
			'division'	=> $this->division()
		);
		$this->load->view('input',$data);
	}

	public function getData()
	{
		$query = "	SELECT 
						a.name,
						a.email,
						a.id_role,
						a.id_role_app2,
						b.username,
						b.password,
						b.type_app
					FROM
						ms_admin a
					JOIN
						ms_login b ON b.id_user=a.id
					WHERE
						a.del = 0 AND DATE(a.entry_stamp) = ?
					ORDER BY
						a.id desc";
		return $this->db->query($query,array(date('Y-m-d')))->result_array();
	}

	public function role_1()
	{
		return $this->db->get('tb_role')->result_array();
	}

	public function role_2()
	{
		return $this->db_perencanaan->get('tb_role')->result_array();
	}

	public function division()
	{
		return $this->db_perencanaan->where('del',0)->get('tb_division')->result_array();
	}

	public function save()
	{
		$save = $this->input->post();
		// print_r($save);die;
		$arr__ = array(
			'name'			=> $save['name'],
			'id_role'		=> $save['id_role'],
			'id_role_app2'	=> $save['id_role_app2'],
			'id_sbu'		=> 1,
			'id_division'	=> $save['id_division'],
			'email'			=> $save['email'],
			'entry_stamp'	=> date('Y-m-d H:i:s'),
			'del'			=> 1
		);

		$id_user 					= $this->getIdUsers($arr__);
		$id_user_server_eproc		= $this->getIdUsersServerEproc($arr__);
		$id_user_server_eproc_gabungan = $this->getIdUsersServerEprocGabungan($arr__);

		$arr = array(
			'id_user'	=> $id_user,
			'type_app'	=> $save['id_app'],
			'type'		=> 'admin',
			'username'	=> $save['username'],
			'password'	=> '123',
			'entry_stamp'=>date('Y-m-d H:i:s'),
			// 'del'			=> 1
		);

		$this->insertLogin($arr);
		$this->insertLoginServerEproc($arr);
		$this->insertLoginServerEprocGabungan($arr);

		redirect('input');
	}

	public function getIdUsers($data)
	{
		$this->db->insert('ms_admin',$data);
		return $this->db->insert_id();
	}

	public function getIdUsersServerEproc($data)
	{
		$this->db_server_eproc->insert('ms_admin',$data);
		return $this->db_server_eproc->insert_id();
	}

	public function getIdUsersServerEprocGabungan($data)
	{
		$this->db_server_eproc_gabungan->insert('ms_admin',$data);
		return $this->db_server_eproc_gabungan->insert_id();
	}

	public function insertLogin($data)
	{
		return $this->db->insert('ms_login',$data);
	}

	public function insertLoginServerEproc($data)
	{
		return $this->db_server_eproc->insert('ms_login',$data);
	}

	public function insertLoginServerEprocGabungan($data)
	{
		return $this->db_server_eproc_gabungan->insert('ms_login',$data);
	}

   	public function r($id)
   	{
   		//$this->db->where('id',389)->update('ms_fppbj',array('idr_anggaran'=>'953000000.00'));
   		// print_r($this->db->where('id',51)->get('ms_fp3')->result_array());
   		print_r($this->db->where('id',$id)->get('ms_fppbj')->result_array());
   	}

   	public function s($id = null)
   	{
		//$q = "SELECT * FROM ms_fp3 WHERE status = 'hapus' AND entry_stamp LIKE '%2021%' and del = 0";
		//$q = $this->db->query($q)->result();
		//$q = $this->db->where_in('id',array(191))->update('ms_fppbj',array('del'=>'1'));
		//$q = $this->db->where_in('id_fppbj',array(514))->get('ms_fp3')->result();
		//$q = $this->db->where_in('id_fppbj',array(514))->update('ms_fp3',array('jwpp_end'=>'2022-01-05'));
		//$q = $this->eproc_db->join('ms_vendor','ms_vendor.id=tr_surat_ubo.id_vendor', 'LEFT')->get('tr_surat_ubo')->result();
		//$q = $this->eproc_db->where_in('id',array('847','852'))->where_in('id_vendor',array('278','109'))->get('ms_ijin_usaha')->result();
		
		//$q = "SELECT * FROM ms_fppbj WHERE nama_pengadaan LIKE '%AR TB%' AND entry_stamp LIKE '%2021%'";
	//	$q = $this->db->query($q)->result();
		
		//$q = $this->db->where('id_fppbj', 487)->get('ms_fkpbj')->result();
		
		/*$q = $this->db->where('id', 532)->update('ms_fppbj', array(
		'jwpp_start' => '2021-09-11', 
		'jwp_start' => '2021-09-11', 
		'desc_dokumen' => '- Rencana Pengangkutan untuk BR 11 
		- Metode Pengadaan Penunjukan langsung sesuai dengan Memorandum Kadiv Operasi No. 103/NR/B200/M/2021 tanggal 8 September 2021.
		- Untuk BOQ yang disampaikan ke vendor PPH  sudah termasuk dalam harga penawaran tidak dimunculkan terpisah.'));*/
		
		/*$q = $this->db->where('id_fppbj', 525)->update('ms_fkpbj', array('jwpp_end' => '2021-05-06', 'desc_dokumen' => '- Pengangkutan untuk BR06 
		- Metode Pengadaan Penunjukan langsung sesuai dengan Memorandum Kadiv Operasi No. 043/NR/B200/M/2021 tanggal 19 April 2021.
		- Untuk BOQ yang disampaikan ke vendor PPH  sudah termasuk dalam harga penawaran tidak dimunculkan terpisah.'));*/
		
		//$q = $this->eproc_db->where('id_division', 12)->join('ms_login', 'ms_login.id_user=ms_admin.id')->get('ms_admin')->result();
		
		//$q = $this->eproc_db->where('id_role_app2', 6)->join('ms_login', 'ms_login.id_user=ms_admin.id')->get('ms_admin')->result();
		
		//$q = $this->eproc_db->get('tb_role')->result();
		
		//$q = $this->db->where('id_pengadaan', 515)->where('status', 'approval')->get('tr_history_pengadaan')->result();
		
		//$q = $this->db->where('id_pengadaan', 516)->get('tr_history_pengadaan')->result();
		
		//$q = $this->db->where('id', 514)->get('ms_fppbj')->result();
		
		//$q = $this->db->where('id', 93)->get('ms_fp3')->result();
		
		//$q = $this->eproc_db->get('tr_assessment')->result();
		
		//$q = $this->eproc_db->where('id_procurement', 351)->get('tr_ass_point')->result();
		
		//$q = $this->db->where('id', 93)->update('ms_fp3', array('status' => 'hapus', 'perubahan' => null, 'desc_batal' => 'Informasi kerusakan/permintaan perbaikan  didapatkan pada bulan November 2021, personil di Departemen Layanan Umum tidak ada yang memiliki kompetensi atas pekerjaan tersebut sehingga diperlukan waktu untuk berkoordinasi dengan engineer di Departemen Reliability. Untuk memaksimalkan kontrak eksisting milik Departemen Reliability dibutuhkan tambahan waktu untuk koordinasi dengan kontraktor pelaksana kontrak tersebut. Selain itu diakhir tahun ada kegiatan Turn Around yang pusat koordinasinya ada di site office mempertimbangkan masa pandemi covid 19, sudah banyak personil NR dan kontraktor dalam kegiatan tersebut. Atas halbtersebut diatas, maka pekerjaan perbaikan tersebut diputuskan untuk tidak dilaksanakan di sisa waktu tahun 2021'));
		
		//$q = "SELECT id FROM ms_fppbj WHERE del = 0 AND (metode_pengadaan = 0 ) AND entry_stamp LIKE '%2021%'";
		//$q = $this->db->query($q)->result();
		//$q = $this->db->where('id_fppbj',633)->get('tr_analisa_risiko')->result();
		//$q = $this->db->where('id_analisa_risiko',1594)->get('tr_analisa_risiko_detail')->result();
		//$q = $this->db->where_in('id', array(579,580,581,582,583))->update('ms_fppbj',array('del'=>1));
		$q = $this->db->where('id', 602)->get('ms_fppbj')->result();
		print_r($q);
		
		// desc_dokumen 487 => Penunjukkan langsung kapal pengangkut LNG untuk kargo BR04, jwpp_end => 2021-03-18
		/* desc_dokumen 525 => 1. Metode pengadaan penunjukkan langsung ke PT Sarana  
									Bahari Hikmah, kapal Ekaputra, untuk cargo BR06. 
								2. Akan ada biaya cooldown karena kapal dalam kondisi tidak
									ready to load (RTL) 
			jwpp_end => 2021-05-07
		*/
		/*
			desc_dokumen 529 => Metode pengadaan penunjukkan langsung ke PT Hikmah Sarana Bahari, kapal Ekaputra 1 untuk kargo BR12, BR07 dan BR08
			jwpp_end => 2021-06-30
		*/
		/*
			desc_dokumen 532 => Pengadaan kapal LNG untuk mengankut kargo BR11 dari pelabuhan PT Badak LNG di Bontang ke FSRU Nusantara Regas Satu di Teluk Jakarta
			jwpp_start => 2021-09-11
			pr_lampiran => pr_lampiran_090921_043824_835.pdf
		*/

   	}
	
	function insert_assessment(){
		$_i = array();
		for($i = 1; $i <= 31; $i++){
			if($i < 5){
			$_i[$i] = 1;
			}else{
			$_i[$i] = 0;
			}
		}
		
		$arr = array(
			'ass' => $_i
		);
		
		foreach($arr['ass'] as $key=>$row){

			$this->eproc_db->delete('tr_ass_result',array(
				//'id_vendor' 		=>$post['id_vendor'],
				'id_procurement' 	=>351,
				'id_ass'			=>$key,
			));

			$insert = $this->eproc_db->insert('tr_ass_result',array(
				//'id_vendor' 		=>$post['id_vendor'],
				'id_procurement' 	=>351,
				'id_ass'			=>$key,
				'is_approve'		=>1,
				'value'				=>$row,
				'entry_stamp'		=>date("Y-m-d H:i:s")
			));

			if(!$insert){

				return false;

			}
		}
		
		$this->eproc_db->insert('tr_ass_point', array(
				//'id_vendor'=>$post['id_vendor'],
				'id_procurement'=>351,
				'date'=>date("Y-m-d H:i:s"),
				'point'=>24,
				'entry_stamp'=>date("Y-m-d H:i:s")
				)
			);
	}
	
	/*
	Riwayat approval - 487
	FPPBJ
	approval Oleh Kadept Transportasi 2021-02-22 05:15:26
	approval Oleh Kadept HSSE 2021-02-22 05:31:21
	approval Oleh Admin Pengendalian dan User Logistik 2021-02-22 05:44:50
	approval Oleh Kadept Procurement 2021-02-22 07:04:44
	approval Oleh Direktur Utama 2021-03-17 04:49:09
	FKPBJ
	approval Oleh Kadept Transportasi 2021-04-20 09:17:27
	approval Oleh Officer Pengadaan 2 2021-05-18 05:54:34
	
	Riwayat Approval - 525
	FKPBJ
	approval Oleh Kadept Procurement 2021-04-20 06:45:20
	
	Riwayat Approval - 529
	FPPBJ
	approval Oleh Kadept Procurement 2021-05-19 06:55:30
	approval Oleh Direktur Utama 2021-06-11 12:14:20
	*/
	
	public function cek_dup(){
		$q = "SELECT name, count(name) as total FROM ms_procurement where del = 0 AND (id_mekanisme != 1 OR id_mekanisme != 6) AND entry_stamp LIKE '%2020%' group by name HAVING count(name) > 1";
		$q = $this->eproc_db->query($q)->result();
		$a = '<table border=1>
				<tr>
					<td>No</td>
					<td>Nama Pengadaan</td>
					<td>Nilai Anggaran</td>
					<td>Tahun</td>
				</tr>';
				$no = 1;
		foreach($q as $key => $val){
			$b = $this->eproc_db->where('name',$val->name)->where('del',0)->get('ms_procurement')->result();
			foreach($b as $keys => $item){
				$a .= '<tr>
					<td>'.($no++).'</td>
					<td>'.$item->name.'</td>
					<td>'.number_format($item->idr_value,2,'.',',').'</td>
					<td>'.$item->entry_stamp.'</td>
				</tr>';
			}
		}
		$a .= '</table>';
		/*header('Content-type: application/ms-excel');
		header('Content-Disposition: attachment; filename=List Pengadaan Assessment.xls');
		header('Cache-Control: max-age=0');*/
		echo $a;
	}

   	public function _update_deskripsi()
   	{
   		$desc = " Kesepakatan berdasarkan email dari Procurement tanggal 21 Juni 2021 :
Klarifikasi Procurement :
Menindaklanjuti permintaan pengadaan Kajian Process Safety Fasilitas Operasi PT Nusantara Regas, bersama ini ada beberapa hal yang ingin kami konfirmasi sbb : 
1.Metode Pengadaan yang digunakan adalah penunjukan langsung kepada PT Lemtek Konsultan Indonesia 
2.Masa Penyelesaian Pekerjaan adalah 60 (enam puluh) hari kalender. Jangka waktu kontrak apakah sama dengan masa penyelesaian pekerjaan? 
3.Mohon konfirmasi untuk metode evaluasi teknis yang ingin digunakan, 
a.Scoring- Kualitas/Teknis Terbaik 
b.Scoring- Harga Terendah 
c.Scoring – Kombinasi Teknis & Biaya 
d.Non Scoring
Usulan kami menggunakan scoring Kualitas/Teknis terbaik merujuk pengadaan ini adalah penunjukan langsung, yang mana user sebelumnya sudah mempertimbangkan bahwa calon peserta tersebut secara pengalaman dan kompetensi sudah sesuai. 
4.Kriteria Penilaian teknis yang tercantum dalam KAK adalah sbb: 
a.Pengalaman Perusahaan : 
Peserta Pengadaan diminta untuk menyampaikan pengalaman untuk pekerjaan sejenis dalam kurun waktu 10 (sepuluh) tahun terakhir dengan melampirkan bukti copy perjanjian atau BAST. 
b.Kualifikasi Tenaga Ahli : 
Project Manager - Senior Process Safety Engineer - Control & Instrumentation Engineer - Mechanical & Piping Engineer Peserta Pengadaan diminta untuk menyampaikan CV beserta bukti copy ijazah, dan sertifikat apabila ada. 
c.Metodologi Pekerjaan : 
Peserta Pengadaan diminta untuk menyampaikan metodologi pekerjaan yang menjelaskan hal-hal sebagai berikut : 
- Project Execution Plan/Tahapan Pekerjaan Lengkap - Struktur organisasi - Rencana Jadwal Pekerjaan - Daftar Code & standar acuan - Engineering Software yang akan digunakan. 
Terkait kriteria evaluasi diatas, mohon dapat dilengkapi dengan bobot masing-masing kriteria, dan nilai minimum passing grade yang ditentukan. Untuk di KAK di Poin IV. Persyaratan Konsultan dan Pesonil terdapat duplikasi paragraph awal dan akhir, untuk dapat koreksi kembali sekaligus menambahkan besaran bobot dan passing gradenya.
5.Mohon konfirmasinya terkait term pembayaran yang akan kami cantumkan juga dalam draft kontrak
a.Jenis kontrak yang digunakan lumpsum?
b.Rincian biaya sudah memperhitungkan biaya terkait prosedur covid? 
c.Pembayaran 100% diakhir setelah seluruh hasil pekerjaan (deliverables) diterima dan disetujui oleh NR?
d.Terkait denda yang akan kami cantumkan dalam draft perjanjian adalah sbb :
Dalam hal MASA PENYELESAIAN PEKERJAAN diperkirakan akan melampaui TANGGAL SELESAINYA PEKERJAAN dan PEKERJAAN belum dapat diselesaikan, maka KONSULTAN harus melaporkan mengenai sebab-sebab keterlambatan tersebut kepada PERUSAHAAN selambat-lambatnya 3 (tiga) HARI KALENDER sebelum MASA PENYELESAIAN PEKERJAAN berakhir.
PERUSAHAAN berhak mengenakan denda sebesar 1‰ (satu per seribu) untuk setiap hari keterlambatan dan maksimum sebesar 5% (lima persen) dari HARGA KONTRAK (sebelum PPN) kepada KONSULTAN dalam hal KONSULTAN tidak dapat menyelesaikan PEKERJAAN pada target waktu penyelesaian PEKERJAAN yang ditentukan PERUSAHAAN sebagaimana tercantum dalam Lampiran D. 

6.Mohon dapat dikirimkan native file KAK.
7.Untuk kemudahan komunikasi dan koordinasi , mohon dapat diinformasikan PIC dari Lemtek UI untuk pekerjaan ini. Konfirmasi dari Dept. HSSE melalui email tanggal 29 Juni 2021 

Jawaban Klarifikasi Dept. HSSE tanggal 29 Juni 2021
Berikut kami sampaikan untuk klarifikasinya: 
1. Iya 
2. Masa Penyelesaian Pekerjaan 5 bulan yang terbagi dalam 2 termin (dijelaskan dalam KAK) 
3. Setuju menggunakan scoring Kualitas/Teknis terbaik 
4. Untuk EWS telah kami susun sebagaimana terlampir, mohon untuk dicek ya mba.
5. Untuk term pembayaran usulan kami adalah dibagi menjadi 2 term (dijelaskan dalam KAK)
6. Terlampir kami sampaikan untuk draft KAK yang telah diupdate 
7. Kontak dengan Lemtek UI adalah sbb: Ibu Weny 0815 1437 8545
Note : User menyatakan pekerjaan bersifat lumpsum untuk melaksanakan pekerjaan sesuai ruang lingkup pekerjaan dalam KAK selama 5 bulan.
Asumsi mandays (jumlah hari / jumlah personil) sesuai dengan perhitungan vendor dapat diterima selama total nilai pekerjaan masih dibawah HPS";
   		print_r($this->db->where('id',527)->update('ms_fppbj',array('desc_dokumen' => $desc)));
   	}

   	public function date_alert($id)
	{
		$metode_day	= 0;

		$fppbj = $this->db->where('id', $id)->get('ms_fppbj')->row_array();

		$get_metode = $this->db->where('id', $fppbj['metode_pengadaan'])->get('tb_proc_method')->row_array();

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
		$yellow = $fppbj['jwpp_start'];
		// echo $value['metode_pengadaan'].'<br>';
		$start_yellow 	= $metode_day + 14;
		$end_yellow 	= $metode_day + 1;
		$yellow__ 		= date('Y-m-d', strtotime($yellow . '-' . $start_yellow . ' days'));
		$yellow___ 		= date('Y-m-d', strtotime($yellow . '-' . $end_yellow . ' days'));
		// echo $yellow__;die;
		$prevDate 		= date('Y-m-d', strtotime($yellow__ . '-3 days'));
		// echo $prevDate;die;
		if ($fppbj['metode_pengadaan'] != 3) {
			if ($fppbj['is_perencanaan'] == 1) {
				$this->date_periode($id, $prevDate, $yellow__, 1);
			} else {
				$this->date_periode($id, $yellow__, $yellow___, 2);
			}
		}
	}

	public function date_periode($id, $begin, $end, $type)
	{
		$begin = new DateTime($begin);
		$end = new DateTime($end);

		$interval = DateInterval::createFromDateString('1 day');
		// echo $interval;die;
		$period = new DatePeriod($begin, $interval, $end);
		// print_r($period);die;
		foreach ($period as $dt) {
			// echo $dt->format("Y-m-d") . '<br>';
			$data = array(
				'id_pengadaan'	=> $id,
				'date_alert'	=> $dt->format("Y-m-d"),
				'type'			=> $type,
				'entry_stamp'	=> date('Y-m-d H:i:s')
			);
			$this->db->insert('tr_email_blast', $data);
		}
	}
}