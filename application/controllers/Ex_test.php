<?php 
/**
 * 
 */
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Ex_test extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model','mm');
		$this->load->model('Fppbj_model','fm');
		$this->load->model('Fkpbj_model','fkm');
		$this->load->model('Export_test_model','ext');
		$this->load->library('session');
	}

	public function update_fp3($year)
	{
		$table = '<table class="rekap break" align="center" border=1>
					  <b><p align="center">
					    Rekapitulasi Pengadaan Barang/Jasa per Departemen 
					    </p></b>
					  <tr>
					    <th rowspan=3>No</th>
					    <th rowspan=3>Pengguna Barang/Jasa</th>
					    <th colspan=7>pelelangan</th>
					    <th colspan=7>Pemilihan Langsung</th>
					    <th colspan=7>Swakelola</th>
					    <th colspan=7>Penunjukan Langsung</th>
					    <th colspan=7>Pengadaan Langsung</th>
					    <th rowspan=3>Keterangan</th>
					  </tr>
					  <tr>
					    <td rowspan=2>Perencanaan</td>
					    <td colspan=6 align="center">Aktual</td>
					    <td rowspan=2>Perencanaan</td>
					    <td colspan=6 align="center">Aktual</td>
					    <td rowspan=2>Perencanaan</td>
					    <td colspan=6 align="center">Aktual</td>
					    <td rowspan=2>Perencanaan</td>
					    <td colspan=6 align="center">Aktual</td>
					    <td rowspan=2>Perencanaan</td>
					    <td colspan=6 align="center">Aktual</td>
					  </tr>
					  <tr>
					    <td>FPPBJ</td>
					    <td>FP3 Nama Pengadaan</td>
					    <td>FP3 Timeline</td>
					    <td>FP3 Metode Pengadaan</td>
					    <td>FP3 Batal</td>
					    <td>FPPBJ Baru</td>
					    <td>FPPBJ</td>
					    <td>FP3 Nama Pengadaan</td>
					    <td>FP3 Timeline</td>
					    <td>FP3 Metode Pengadaan</td>
					    <td>FP3 Batal</td>
					    <td>FPPBJ Baru</td>
					    <td>FPPBJ</td>
					    <td>FP3 Nama Pengadaan</td>
					    <td>FP3 Timeline</td>
					    <td>FP3 Metode Pengadaan</td>
					    <td>FP3 Batal</td>
					    <td>FPPBJ Baru</td>
					    <td>FPPBJ</td>
					    <td>FP3 Nama Pengadaan</td>
					    <td>FP3 Timeline</td>
					    <td>FP3 Metode Pengadaan</td>
					    <td>FP3 Batal</td>
					    <td>FPPBJ Baru</td>
					    <td>FPPBJ</td>
					    <td>FP3 Nama Pengadaan</td>
					    <td>FP3 Timeline</td>
					    <td>FP3 Metode Pengadaan</td>
					    <td>FP3 Batal</td>
					    <td>FPPBJ Baru</td>
					  </tr>';

		$data = $this->ext->rekap_department($year);

		$no = 1;
		foreach ($data as $key => $value) {
			$data_fppbj 	 = $this->ext->rekap_department_fppbj($year,$value['id_division']);
			$data_fp3_np 	 = $this->ext->rekap_department_fp3($year,$value['id_division'],'nama');
			$data_fp3_tl 	 = $this->ext->rekap_department_fp3($year,$value['id_division'],'time_line');
			$data_fp3_mp 	 = $this->ext->rekap_department_fp3($year,$value['id_division'],'metode');
			$data_fp3_hps 	 = $this->ext->rekap_department_fp3($year,$value['id_division'],'hapus');
			$data_fppbj_baru = $this->ext->rekap_department_fppbj($year,$value['id_division'],'1');

			$table .= '<tr>
					<td>'.$no.'</td>
					<td style="text-align: left;">'.$value['divisi_name'].'</td>';
					
				if (count($data_fppbj) > 0) {

					$metodes = [
									1 => 'pelelangan',
									2 => 'Pemilihan Langsung',
									3 => 'Swakelola',
									4 => 'Penunjukan Langsung',
									5 => 'Pengadaan Langsung'
								];

					foreach ($metodes as $key_metode => $metode) {
						$fppbj 	 = $data_fppbj[0]['metode_'.$key_metode];
						$fp3_np  = $data_fp3_np[0]['metode_'.$key_metode];
						$fp3_tl  = $data_fp3_tl[0]['metode_'.$key_metode];
						$fp3_mp  = $data_fp3_mp[0]['metode_'.$key_metode];
						$fp3_hps = $data_fp3_hps[0]['metode_'.$key_metode];
						$fppbj_baru = $data_fppbj_baru[0]['metode_'.$key_metode];
						
						$table .= ' <td>'.$value['metode_'.$key_metode].'</td>
									<td>'.$fppbj.'</td>
									<td>'.$fp3_np.'</td>
									<td>'.$fp3_tl.'</td>
									<td>'.$fp3_mp.'</td>
									<td>'.$fp3_hps.'</td>
									<td>'.$fppbj_baru.'</td>';
						
						${'fppbj_'.(str_replace(" ", _, strtolower($metode)))} += $fppbj;
						${'fp3_np_'.(str_replace(" ", _, strtolower($metode)))} += $fp3_np;
						${'fp3_tl_'.(str_replace(" ", _, strtolower($metode)))} += $fp3_tl;
						${'fp3_mp_'.(str_replace(" ", _, strtolower($metode)))} += $fp3_mp;
						${'fp3_hps_'.(str_replace(" ", _, strtolower($metode)))} += $fp3_hps;
						${'fppbj_baru_'.(str_replace(" ", _, strtolower($metode)))} += $fppbj_baru;
						${'__'.(str_replace(" ", _, strtolower($metode)))} += $value['metode_'.$key_metode];
						// ${'__'.(str_replace(" ", _, strtolower($metode)))} += $value['metode_'.$key_metode];
					}
									
					$table .= '<td></td></tr>';

					
				} else {
					$table .= '<td>'.$value['metode_1'].'</td>
						<td>'.$value['metode_2'].'</td>
						<td>'.$value['metode_3'].'</td>
						<td>'.$value['metode_4'].'</td>
						<td>'.$value['metode_5'].'</td>
						<td></td>
					</tr>
					';

					$__pelelangan 			+= $value['metode_1'];
					$__pemilihan_langsung 	+= $value['metode_2'];
					$__swakelola 			+= $value['metode_3'];
					$__penunjukan_langsung 	+= $value['metode_4'];
					$__pengadaan_langsung 	+= $value['metode_5'];
				}

					
			
			$no++;

		}

		$total_perencanaan = $__pelelangan + $__pemilihan_langsung + $__swakelola + $__penunjukan_langsung + $__pengadaan_langsung;

		$total_fppbj = $fppbj_pelelangan + $fppbj_pemilihan_langsung + $fppbj_swakelola + $fppbj_penunjukan_langsung + $fppbj_pengadaan_langsung;

		$total_fp3_np = $fp3_np_pelelangan + $fp3_np_pemilihan_langsung + $fp3_np_swakelola + $fp3_np_penunjukan_langsung + $fp3_np_pengadaan_langsung;

		$total_fp3_tl = $fp3_tl_pelelangan + $fp3_tl_pemilihan_langsung + $fp3_tl_swakelola + $fp3_tl_penunjukan_langsung + $fp3_tl_pengadaan_langsung;

		$total_fp3_mp = $fp3_mp_pelelangan + $fp3_mp_pemilihan_langsung + $fp3_mp_swakelola + $fp3_mp_penunjukan_langsung + $fp3_mp_pengadaan_langsung;

		$total_fp3_hps = $fp3_hps_pelelangan + $fp3_hps_pemilihan_langsung + $fp3_hps_swakelola + $fp3_hps_penunjukan_langsung + $fp3_hps_pengadaan_langsung;

		$total_fppbj_baru = $fppbj_baru_pelelangan + $fppbj_baru_pemilihan_langsung + $fppbj_baru_swakelola + $fppbj_baru_penunjukan_langsung + $fppbj_baru_pengadaan_langsung;

		$total_aktual = $total_fppbj + $total_fp3_np + $total_fp3_tl + $total_fp3_mp + $total_fp3_hps + $total_fppbj_baru;

		$table .= '
					<tr>
						<td colspan="2"></td>
						<td>'.$__pelelangan.'</td>
						<td>'.$fppbj_pelelangan.'</td>
						<td>'.$fp3_np_pelelangan.'</td>
						<td>'.$fp3_tl_pelelangan.'</td>
						<td>'.$fp3_mp_pelelangan.'</td>
						<td>'.$fp3_hps_pelelangan.'</td>
						<td>'.$fppbj_baru_pelelangan.'</td>

						<td>'.$__pemilihan_langsung.'</td>
						<td>'.$fppbj_pemilihan_langsung.'</td>
						<td>'.$fp3_np_pemilihan_langsung.'</td>
						<td>'.$fp3_tl_pemilihan_langsung.'</td>
						<td>'.$fp3_mp_pemilihan_langsung.'</td>
						<td>'.$fp3_hps_pemilihan_langsung.'</td>
						<td>'.$fppbj_baru_pemilihan_langsung.'</td>

						<td>'.$__swakelola.'</td>
						<td>'.$fppbj_swakelola.'</td>
						<td>'.$fp3_np_swakelola.'</td>
						<td>'.$fp3_tl_swakelola.'</td>
						<td>'.$fp3_mp_swakelola.'</td>
						<td>'.$fp3_hps_swakelola.'</td>
						<td>'.$fppbj_baru_swakelola.'</td>

						<td>'.$__penunjukan_langsung.'</td>
						<td>'.$fppbj_penunjukan_langsung.'</td>
						<td>'.$fp3_np_penunjukan_langsung.'</td>
						<td>'.$fp3_tl_penunjukan_langsung.'</td>
						<td>'.$fp3_mp_penunjukan_langsung.'</td>
						<td>'.$fp3_hps_penunjukan_langsung.'</td>
						<td>'.$fppbj_baru_penunjukan_langsung.'</td>

						<td>'.$__pengadaan_langsung.'</td>
						<td>'.$fppbj_pengadaan_langsung.'</td>
						<td>'.$fp3_np_pengadaan_langsung.'</td>
						<td>'.$fp3_tl_pengadaan_langsung.'</td>
						<td>'.$fp3_mp_pengadaan_langsung.'</td>
						<td>'.$fp3_hps_pengadaan_langsung.'</td>
						<td>'.$fppbj_baru_pengadaan_langsung.'</td>

						<td></td>
					</tr>
					<tr>
	                  	<td colspan=2>Total Perencanaan</td>
	                    <td colspan=37 align="center">'.$total_perencanaan.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total Aktual</td>
	                    <td colspan=37 align="center">'.$total_aktual.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total FPPBJ</td>
	                    <td colspan=37 align="center">'.$total_fppbj.'</td>
	                  <tr>
	                    <td colspan=2>Total FP3 Nama Pengadaan</td>
	                    <td colspan=37 align="center">'.$total_fp3_np.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total FP3 Timeline</td>
	                    <td colspan=37 align="center">'.$total_fp3_tl.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total FP3 Metode Pengadaan</td>
	                    <td colspan=37 align="center">'.$total_fp3_mp.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total FP3 Batal</td>
	                    <td colspan=37 align="center">'.$total_fp3_hps.'</td>
	                  </tr>
	                  <tr>
	                    <td colspan=2>Total FPPBJ Baru</td>
	                    <td colspan=37 align="center">'.$total_fppbj_baru.'</td>
	                  </tr>';
		$table .='</table>';

		echo $table;
	}

	public function cadangan($value='')
	{
		
		$query = "	SELECT 
						a.id,
					    a.year_anggaran
					FROM
						ms_fppbj a
					JOIN
						ms_fp3 b On b.id_fppbj=a.id
					WHERE
						a.del = 0";
		$query = $this->db->query($query)->result_array();

		// print_r($query);die;

		foreach ($query as $key => $value) {
			$arr = array(
				'is_status' => 1,
				'edit_stamp' => date('Y-m-d H:i:s')
			);

			$this->db->where('del',0)->where('id',$value['id'])->update('ms_fppbj',$arr);
		}
	}

	function rekap_perencanaan($year = null){
		// fetch data	
		$dateHead 	= $this->date_week($year);
		$dateDetail = $this->date_detail($year);
		// print_r($dateDetail);die;
		$data		= $this->ex->rekap_department($year);
		$count_fkpbj= $this->ex->count_rekap_department_fkpbj($year);
		// print_r($data);die;
		$table = '';
		$no = 1;

		$__pelelangan 			= 0;
		$__pemilihan_langsung 	= 0;
		$__penunjukan_langsung 	= 0;
		$__pengadaan_langsung 	= 0;
		$__swakelola 			= 0;

		$fkpbj_pelelangan 			= 0;
		$fkpbj_pemilihan_langsung 	= 0;
		$fkpbj_penunjukan_langsung 	= 0;
		$fkpbj_pengadaan_langsung 	= 0;
		$fkpbj_swakelola 			= 0;

		$fkpbj_pelelangan_telat 			= 0;
		$fkpbj_pemilihan_langsung_telat 	= 0;
		$fkpbj_penunjukan_langsung_telat 	= 0;
		$fkpbj_pengadaan_langsung_telat 	= 0;
		$fkpbj_swakelola_telat 				= 0;

		$fkpbj_pelelangan_tidak_telat 			= 0;
		$fkpbj_pemilihan_langsung_tidak_telat 	= 0;
		$fkpbj_penunjukan_langsung_tidak_telat 	= 0;
		$fkpbj_pengadaan_langsung_tidak_telat 	= 0;
		$fkpbj_swakelola_tidak_telat 			= 0;
		$arr = array();
		foreach ($data as $key => $value) {

			$data_fkpbj = $this->ex->rekap_department_fkpbj($year,$value['id_division']);
			// print_r($data_fkpbj);die;

			if (count($data_fkpbj) > 0) {
								
					$table .= '<tr>
								<td>'.$no.'</td>
								<td style="text-align: left;">'.$value['divisi_name'].'</td>';
					
					$metodes = [
									1 => 'pelelangan',
									2 => 'Pemilihan Langsung',
									3 => 'Swakelola',
									4 => 'Penunjukan Langsung',
									5 => 'Pengadaan Langsung'
								];
					foreach ($metodes as $key_metode => $metode) {
						$aktual = $data_fkpbj[0]['metode_'.$key_metode];

						$data_telat = $this->ex->count_rekap_department_fkpbj_telat($year,$value['id_division'],$metode);
						$telat = $data_telat[0]['metode_'.$key_metode];

						$data_tidak_telat = $this->ex->count_rekap_department_fkpbj_tidak_telat($year,$value['id_division'],$metode);
						$tidak_telat = $data_tidak_telat[0]['metode_'.$key_metode];
						
						$table .= '<td>'.$value['metode_'.$key_metode].'</td>
								<td style="background-color:#ced6e0;">'.$aktual.'</td>
								<td style="background-color:#FF7675;">'.$telat.'</td>
								<td style="background-color:#FECA57;">'.$tidak_telat.'</td>';
						
						${'fkpbj_'.(str_replace(" ", _, strtolower($metode)))} += $aktual;
						${'fkpbj_'.(str_replace(" ", _, strtolower($metode))).'_telat'} += $telat;
						${'fkpbj_'.(str_replace(" ", _, strtolower($metode))).'_tidak_telat'} += $tidak_telat;
						${'__'.(str_replace(" ", _, strtolower($metode)))} += $value['metode_'.$key_metode];
					}
									
							$table .= '<td></td></tr>';

			} else {
				$table .= '<tr>
					<td>'.$no.'</td>
					<td style="text-align: left;">'.$value['divisi_name'].'</td>
					<td>'.$value['metode_1'].'</td>
					<td>'.$value['metode_2'].'</td>
					<td>'.$value['metode_3'].'</td>
					<td>'.$value['metode_4'].'</td>
					<td>'.$value['metode_5'].'</td>
					<td></td>
				</tr>
				';
				$__pelelangan 			+= $value['metode_1'];
				$__pemilihan_langsung 	+= $value['metode_2'];
				$__swakelola 			+= $value['metode_3'];
				$__penunjukan_langsung 	+= $value['metode_4'];
				$__pengadaan_langsung 	+= $value['metode_5'];	
			}
			
			$no++;

		}

		$divId = 'TableRekap';

		if (count($count_fkpbj) > 0) {
			$grand_total = $__pelelangan +  $__pemilihan_langsung +  $__swakelola +  $__penunjukan_langsung +  $__pengadaan_langsung ;

			$grand_total_fkpbj = $fkpbj_pelelangan + $fkpbj_pemilihan_langsung + $fkpbj_swakelola + $fkpbj_penunjukan_langsung + $fkpbj_pengadaan_langsung;

			$grand_total_fkpbj_telat = $fkpbj_pelelangan_telat + $fkpbj_pemilihan_langsung_telat + $fkpbj_swakelola_telat + $fkpbj_penunjukan_langsung_telat + $fkpbj_pengadaan_langsung_telat;

			$grand_total_fkpbj_tidak_telat = $fkpbj_pelelangan_tidak_telat + $fkpbj_pemilihan_langsung_tidak_telat + $fkpbj_swakelola_tidak_telat + $fkpbj_penunjukan_langsung_tidak_telat + $fkpbj_pengadaan_langsung_tidak_telat;

			$gt = $grand_total + $grand_total_fkpbj;

			// echo $gt;die;
			$table .= '<tr class="bold" >
							<td colspan="2" style="text-align: right; font-weight: 700"></td>
							<td>'.$__pelelangan.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pelelangan.'</td>
							<td style="background-color:#FF7675;">'.$fkpbj_pelelangan_telat.'</td>
							<td style="background-color:#FECA57;">'.$fkpbj_pelelangan_tidak_telat.'</td>
							<td>'.$__pemilihan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pemilihan_langsung.'</td>
							<td style="background-color:#FF7675;">'.$fkpbj_pemilihan_langsung_telat.'</td>
							<td style="background-color:#FECA57;">'.$fkpbj_pemilihan_langsung_tidak_telat.'</td>
							<td>'.$__swakelola.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_swakelola.'</td>
							<td style="background-color:#FF7675;">'.$fkpbj_swakelola_telat.'</td>
							<td style="background-color:#FECA57;">'.$fkpbj_swakelola_tidak_telat.'</td>
							<td>'.$__penunjukan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_penunjukan_langsung.'</td>
							<td style="background-color:#FF7675;">'.$fkpbj_penunjukan_langsung_telat.'</td>
							<td style="background-color:#FECA57;">'.$fkpbj_penunjukan_langsung_tidak_telat.'</td>
							<td>'.$__pengadaan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pengadaan_langsung.'</td>
							<td style="background-color:#FF7675;">'.$fkpbj_pengadaan_langsung_telat.'</td>
							<td style="background-color:#FECA57;">'.$fkpbj_pengadaan_langsung_tidak_telat.'</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: right; font-weight: 700">Total Plan</td>
							<td style="font-weight: 700;font-size:15px;" colspan=21>'.$grand_total.'</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: right; font-weight: 700">Total Aktual</td>
							<td style="font-weight: 700;font-size:15px;background-color:#ced6e0;" colspan=21>'.$grand_total_fkpbj.'</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: right; font-weight: 700">Total Telat</td>
							<td style="font-weight: 700;font-size:15px;background-color:#FF7675;" colspan=21>'.$grand_total_fkpbj_telat.'</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: right; font-weight: 700">Total tidak telat</td>
							<td style="font-weight: 700;font-size:15px;background-color:#FECA57;" colspan=21>'.$grand_total_fkpbj_tidak_telat.'</td>
						</tr>';

			$show_table = '<table class="rekap break" align="center">
									<b><p align="center">
										Rekapitulasi Pengadaan Barang/Jasa per Departemen 
									</p></b>
									<tr>
										<th rowspan=2>No</th>
										<th rowspan=2>Pengguna Barang/Jasa</th>
										<th colspan=4>pelelangan</th>
										<th colspan=4>Pemilihan Langsung</th>
										<th colspan=4>Swakelola</th>
										<th colspan=4>Penunjukan Langsung</th>
										<th colspan=4>Pengadaan Langsung</th>
										<th rowspan=2>Keterangan</th>
									</tr>
									<tr>
										<td>Perencanaan</td>
										<td>Aktual</td>
										<td>Telat</td>
										<td>Tidak Telat</td>
										<td>Perencanaan</td>
										<td>Aktual</td>
										<td>Telat</td>
										<td>Tidak Telat</td>
										<td>Perencanaan</td>
										<td>Aktual</td>
										<td>Telat</td>
										<td>Tidak Telat</td>
										<td>Perencanaan</td>
										<td>Aktual</td>
										<td>Telat</td>
										<td>Tidak Telat</td>
										<td>Perencanaan</td>
										<td>Aktual</td>
										<td>Telat</td>
										<td>Tidak Telat</td>
									</tr>
									'.$table.'
								</table>';

		}else{
			$grand_total = $__pelelangan +  $__pemilihan_langsung +  $__swakelola +  $__penunjukan_langsung +  $__pengadaan_langsung ;

			$grand_total_fkpbj = $fkpbj_pelelangan + $fkpbj_pemilihan_langsung + $fkpbj_swakelola + $fkpbj_penunjukan_langsung + $fkpbj_pengadaan_langsung;

			$gt = $grand_total + $grand_total_fkpbj;

			// echo $gt;die;
			$table .= '<tr class="bold" >
							<td colspan="2" style="text-align: right; font-weight: 700">Total</td>
							<td>'.$__pelelangan.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pelelangan.'</td>
							<td>'.$__pemilihan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pemilihan_langsung.'</td>
							<td>'.$__swakelola.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_swakelola.'</td>
							<td>'.$__penunjukan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_penunjukan_langsung.'</td>
							<td>'.$__pengadaan_langsung.'</td>
							<td style="background-color:#ced6e0;">'.$fkpbj_pengadaan_langsung.'</td>
							<td style="font-weight: 700;font-size:15px;">'.$gt.'</td>
						</tr>';

			$show_table = '<table class="rekap break" align="center">
									<b><p align="center">
										Rekapitulasi Pengadaan Barang/Jasa per Departemen 
									</p></b>
									<tr>
										<th>No</th>
										<th>Pengguna Barang/Jasa</th>
										<th colspan=2>pelelangan</th>
										<th colspan=2>Pemilihan Langsung</th>
										<th colspan=2>Swakelola</th>
										<th colspan=2>Penunjukan Langsung</th>
										<th colspan=2>Pengadaan Langsung</th>
										<th>Keterangan</th>
									</tr>
									'.$table.'
								</table>';
		}

		$page = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="UTF-8" />
						<meta name="viewport" content="width=device-width, initial-scale=1" />
						<style>
						
							thead:before, thead:after { display: none; }
							tbody:before, tbody:after { display: none; }
								@page{
									size: A4 landscape;
									page-break-after : avoid-column;
								}

								@media print {
								     body {margin-top: 50mm; margin-bottom: 50mm; 
								           margin-left: 0mm; margin-right: 0mm;}
								}
								
								@media print{
									ol{
										padding-left : 20px;
										padding-top : -15px;
										padding-bottom : -15px;
									}

									table { page-break-inside:auto }
									tr    { page-break-before:always;page-break-inside:avoid;page-break-after:always }
									td    { page-break-inside:avoid; page-break-after:auto }
									thead { display:table-header-group }
									tfoot { display:table-footer-group }
								}
							table {
								/*width: 705px;*/
								width: 857px;
					    		font-size: 14px;
								border : 1px solid #000;
								border-spacing : 0;
								align: center;
								border-collapse:collapse;
								page-break-inside: avoid !important;
							}
							.no{
								text-align: center;
								width: 20px;
							}
							td, th {
								border : 1px solid #000;
								padding: 3px 1px;
								word-wrap: break-word;
								text-align: center;
								page-break-inside: avoid !important;
								page-break-after:always;
								font-size: 11px;
								border-collapse:collapse;
								border-bottom: 0.01em solid black;
								position: relative;
							}
							tr{
								page-break-inside: avoid; 
								
								border-collapse:collapse;
							}
							.desc{
								margin-top: 50px;
								margin-bottom: 50px;
							}
							.desc, .desc td, .desc th{
								border: none !important;
							}
							span img{
								width: 15px !important;
								margin: 0 5px;
							}
							.ttd{
								width: 705px;
								margin-top: 25px;
							}
							.ttd td, .ttd th{
								padding: 5px;
							}
							.is-yellow {background-color: #FECA57!important;}
							.is-red {background-color: #FF7675!important;}
							.is-blue {background-color: #54A0FF!important;}
							img {
								height: 10px;
							}
							.row-small , .week-small {
								font-size: 10px;
								font-weight: 700;
								padding: 3px 1px;
								width: 2%;
							}
							.more_ {
								background-color: black;
							}
							.row-small:nth-child(1), .week-small:nth-child(1) {padding: 3px;}
							.row-small:nth-child(2), .week-small:nth-child(2) {padding: 3px;}
							.row-small:nth-child(3), .week-small:nth-child(3) {padding: 3px;}
							.row-small:nth-child(4), .week-small:nth-child(4) {padding: 3px;}
							.row-small:nth-child(5), .week-small:nth-child(5) {padding: 3px;}
							.row-small:nth-child(6), .week-small:nth-child(6) {padding: 3px;}
							.row-small:nth-child(7), .week-small:nth-child(7) {padding: 3px;}
							.row-small:nth-child(8), .week-small:nth-child(8) {padding: 3px;}
							.row-small:nth-child(9), .week-small:nth-child(9) {padding: 3px;}
							.row-small:nth-child(10) {padding: 4px;}
							.row-small:nth-child(11) {padding: 4px;}
							.row-small:nth-child(12) {padding: 4px;}
							.row-small:nth-child(13) {padding: 4px;}
							.row-small:nth-child(14) {padding: 4px;}
							.row-small:nth-child(15) {padding: 4px;}
							.row-small:nth-child(16) {padding: 4px;}
						</style>
					</head>
					
					<body>
						<div id="TableRekap">
							<b><p align="center">Perencanaan Pengadaan Barang/Jasa <br> Tahun '.$year.'
							</p></b>
							<font color="#ced6e0">&#8718;</font> Grafik actual <span color="#fff" style="border: 1px #000 solid; height: 7px; width: 6px; display: inline-block;"></span> Grafik Perencanaan 
							'.$dateDetail.'
							<br>
							<br>
							<div style="margin-top: 2rem">
							<br><br>
								'.$show_table.'
								</div>
						</div>
					</body>
		</html>';

		// header('Content-Disposition: attachment; filename=Rekap Perencanaan'.$year.'.xls');
  //   	header('Cache-Control: max-age=0');
    	echo $page;
		// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
		// $spreadsheet = $reader->loadFromString($page);

		// $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
		// $writer->save('write.xls'); 
	}

	function date_week($year=null){
		if ($year == null) {
			$year = date('Y');
		}
		define('NL', "\n");

		$year           = $year;
		$firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
		$nextMonday     = strtotime('monday', $firstDayOfYear);
		$nextSunday     = strtotime('sunday', $nextMonday);
		$_month			= 0;
		$_week 			= 1;
		$weekly 		= array();

		while (date('Y', $nextMonday) == $year) {
			$month = date('M', $nextMonday);

			$weekly[$month][] = $_week;

			// echo "<td>".$_week."</td>";

			$nextMonday = strtotime('+1 week', $nextMonday);
			$nextSunday = strtotime('+1 week', $nextSunday);

			$_week++;
		}
		$_week = $_week - 1;
		// --------- HEADER -------
		$table = '<table align="center" style="max-width:100%;min-width:100%;">
								<tr class="gery">
									<th rowspan="4" style="padding: 2px;width:10px; height:10px;">No</th>
									<th rowspan="4" style="padding: 4px;width:10px; height:10px;">Pengguna Barang/Jasa</th>
									<th rowspan="4" style="padding: 4px;width:40px; height:10px;">Nama Pengadaan Barang/Jasa</th>
									<th rowspan="4" style="padding: 4px;width:20px; height:10px;">Metode Pengadaan</th>
									<th rowspan="4" style="padding: 4px;width:20px; height:10px;">Anggaran (include PPN 10%) </th>
									<th rowspan="4" style="padding: 4px;width:20px; height:10px;">Jenis Pengadaan</th>
									<th rowspan="4" style="padding: 4px;width:20px; height:10px;">Status</th>
									<th colspan="'.$_week.'" style="vertical-align: middle">
										<font color="#FECA57">&#8718;</font> Persiapan & Permohonan Pengadaan (PP1) - <font color="#FF7675">&#8718;</font> 
										Proses Pengadaan (PP2) - <font color="#54A0FF">&#8718;</font>
										Pelaksanaan Pekerjaan (PP3)
									</th>
								</tr>
								<tr>
									<td style="font-weight:700" colspan='.$_week.'>'.$year.'</td>
								</tr>
							';

		// --------- YEAR ---------
		// $table .= "<tr>";
		// 	$table .= "<td style='font-weight:700' colspan='".$_week."'>".$year."</td>";
		// $table .= "</tr>";

		
	
			// --------- MONTH ---------
			$table .= "<tr>";
			foreach ($weekly as $month => $value) {
				$month_ = count($weekly[$month]);
					$table .= "<td class='month-row' style='font-weight:700' colspan='".$month_."'>".$month."</td>";
			}
			$table .= "</tr>";

				// --------- WEEK ---------
				
				$table .= "<tr>";
				foreach ($weekly as $month => $value) {
					foreach ($value as $week) {
						$table .= "<td class='week-small' id='".$week."'>".$week."</td>";
					}
				}
				$table .= "</tr>";

		return $table;
	}

	function date_week_($year=null, $jwpp, $metode){
		define('NL', "\n");
		$jwpp 			= json_decode($jwpp);
		// echo $metode;die;

		$metode = trim($metode);
		// DAY BASED ON METODE PROC
		$metode_day		= 0;
		if ($metode == "Pelelangan") {
			$metode_day = 13; //60 hari
		}else if ($metode == "Pengadaan Langsung") {
			$metode_day = 1;// 10 hari
		}else if ($metode == "Pemilihan Langsung"){
			$metode_day = 6; //45 hari
		}else if ($metode == "Swakelola"){
			$metode_day = 0;
		}else if ($metode == "Penunjukan Langsung") {
			$metode_day = 3;// 20 hari
		}else{
			// $metode_day = 1;
		}

		//Variable 
		$start			= $this->get_week($jwpp->start);
		$end			= $this->get_week($jwpp->end);
		$start_red		= $start - $metode_day;
		$end_red		= $start;
		$start_yellow	= $start_red - 2;
		$end_yellow		= $end_red ;

		if (($jwpp->end > "2019-12-28") && ($end == 01)) {
			// echo $end;
			$end = 52;
			// echo "----".$start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";
			
		}else{
			$end = $end;
			// echo $start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";
		}
		// echo $start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";

		$year           = $year;
		$firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
		$nextMonday     = strtotime('monday', $firstDayOfYear);
		$nextSunday     = strtotime('sunday', $nextMonday);
		$weekly 		= array();
		$_month			= 0;
		$_week 			= 1;
		$_yellow		= 'class="is-yellow"';
		$_red			= 'class="is-red"';
		$_blue			= 'class="is-blue"';
		

		// print_r($start_red);
		while (date('Y', $nextMonday) == $year) {
			$month = date('M', $nextMonday);

			$weekly[$month][] = $_week;

			$nextMonday = strtotime('+1 week', $nextMonday);
			$nextSunday = strtotime('+1 week', $nextSunday);

			$_week++;
		}
			// --------- WEEK ---------
			foreach ($weekly as $month => $value) {
				foreach ($value as $week) {
					//echo $end_red." Ini adalah end red - ".$start_red." Ini adalah start red - ".$week." Ini adalah week - ".$end." Ini adalah end <br>";
					// echo $week." > ini adalah week <br>";
					if ($week >= $start && $week <= $end) {
						// BLUE
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-blue' style='border-bottom:0.01em solid black' bgcolor='#54A0FF'>&nbsp;</td>";
					}else if ($week >= $start_red && $week <= $end_red){
						// RED
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-red' style='border-bottom:0.01em solid black' bgcolor='#FF7675'>&nbsp;</td>";
					}else if ($week >= $start_yellow && $week <= $end_yellow){
						// YELLOW
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-yellow' style='border-bottom:0.01em solid black' bgcolor='#FECA57'>&nbsp;</td>";
					}else{
						// PLAIN
						$table .= "<td class='row-small' id='".sprintf('%02d', $week)."' style='border-bottom:0.01em solid black'>&nbsp;</td>";//border-bottom:1px solid black
					}
				}
			}

		// print_r($table);
		return $table;
	}

	function get_week($ddate=null){
		// $ddate = "2018-04-07";					
		$date = new DateTime($ddate);
		$week = $date->format("W");

		return $week;
	}

	function date_detail($year=null){
		$data = $this->ex->rekap_perencanaan($year);
		$dateHead = $this->date_week($year);
		// print_r($data);die;

			$table .= $dateHead;
		foreach ($data as $divisi => $value) {
			// print_r($value);die;
			$time_range = json_encode(array('start'=>$value['jwpp_start'],'end'=>$value['jwpp_end']));
			// echo $time_range;die;
			$week 		= $this->date_week_($year, $time_range, $value['metode_pengadaan']);

			// $table 		.= '<tr class="content">
			// 					<td id="'.$value['id_fppbj'].'">'.($key + 1).'</td>
			// 					<td>'.$value['divisi'].'</td>
			// 					<td>'.$value['nama_pengadaan'].'</td>
			// 					<td>'.$value['metode_pengadaan'].'</td>
			// 					<td>Rp. '.number_format($value['idr_anggaran']).'</td>
			// 					<td>'.$jenis_pengadaan.'</td>
			// 					'.$week.'
			// 				</tr>';	
							// <td>'.$value['desc'].'</td>

			foreach ($value as $key => $value_) {
				
				if (count($value_)>0) {
					$table 		.= '<tr class="content">
										<td colspan="59" style="text-align: left; font-weight:bold;">'.$divisi." - ".$key.'</td>
									</tr>';

					foreach ($value_ as $key_ => $value__) {
						// print_r($value__);die;
						if ($value__['jenis_pengadaan'] == 'jasa_lainnya') {
							$jenis_pengadaan = 'Jasa Lainnya';
						} else if($value__['jenis_pengadaan'] == 'jasa_konstruksi'){
							$jenis_pengadaan = 'Jasa Konstruksi';
						} else if($value__['jenis_pengadaan'] == 'jasa_konsultasi'){
							$jenis_pengadaan = 'Jasa Konsultasi';
						} else if($value__['jenis_pengadaan'] == 'jasa_lainnya'){
							$jenis_pengadaan = 'Jasa Lainnya';
						} else if($value__['jenis_pengadaan'] == 'stock'){
							$jenis_pengadaan = 'Stock';
						} else if($value__['jenis_pengadaan'] == 'non_stock'){
							$jenis_pengadaan = 'Non-Stock';
						} else {
							$jenis_pengadaan = '-';
						}
						$time_range_ = $time_range = json_encode(array('start'=>$value__['jwpp_start'],'end'=>$value__['jwpp_end']));
						// echo $time_range_;die;
						
						$week_ 		= $this->date_week_($year, $time_range_, $value__['metode_pengadaan']);

						$get_fkpbj 	= $this->ex->get_fkpbj($value__['id']);
						$get_fp3 	= $this->ex->get_fp3($value__['id']);
						// print_r($get_fkpbj);die;
						// print_r($get_fp3);
						$no__ = $key_+1;

						if (count($get_fkpbj) > 0) {
							$table 		.= '<tr class="content" style="border-bottom:0.01em solid black;">
											<td id="'.$value__['id_fppbj'].'" rowspan=2>'.$no__.'</td>
											<td rowspan=2>'.$value__['divisi'].'</td>
											<td rowspan=2>'.$value__['nama_pengadaan'].'</td>
											<td>'.$value__['metode_pengadaan'].'</td>
											<td>Rp. '.number_format($value__['idr_anggaran']).'</td>
											<td>'.$jenis_pengadaan.'</td>
											<td>FPPBJ</td>
											'.$week_.'
										</tr>
										';
						} else {
							$table 		.= '<tr class="content" style="border-bottom:0.01em solid black;">
											<td id="'.$value__['id_fppbj'].'">'.$no__.'</td>
											<td>'.$value__['divisi'].'</td>
											<td>'.$value__['nama_pengadaan'].'</td>
											<td>'.$value__['metode_pengadaan'].'</td>
											<td>Rp. '.number_format($value__['idr_anggaran']).'</td>
											<td>'.$jenis_pengadaan.'</td>
											<td>FPPBJ</td>
											'.$week_.'
										</tr>
										';
						}

						if (count($get_fkpbj) > 0) {

							foreach ($get_fkpbj as $key_fk => $value_fk) {
								// print_r($value_fk);die;
								$start_date = $value_fk['jwpp_start'];
								$metode = trim($value_fk['metode_pengadaan_name']);
								// echo($metode);die;
						        if ($metode == "Pelelangan") {
						            $metode_day = 60; //60 hari
						        }else if ($metode == "Pengadaan Langsung") {
						            $metode_day = 10;// 10 hari
						        }else if ($metode == "Pemilihan Langsung"){
						            $metode_day = 45; //45 hari
						        }else if ($metode == "Swakelola"){
						            $metode_day = 0;
						        }else if ($metode == "Penunjukan Langsung") {
						            $metode_day = 20;// 20 hari
						        }else{
						            //$metode_day = 1;
						        }
						        $start_yellow = $metode_day + 14;
						        $end_yellow = $metode_day + 1;

						        $yellow_start = date('Y-m-d', strtotime('-'.$start_yellow.'days', strtotime($start_date)));
						        $yellow_end = date('Y-m-d', strtotime('-'.$end_yellow.'days', strtotime($start_date)));
						        // echo 'Ini yellow start '.$yellow_start;
									
						       	$entry_date = strtotime($value_fk['entry_stamp']);
						       	$yellow_start_ = strtotime($yellow_start);
						       	$yellow_end_ = strtotime($yellow_end);

						       	 $fkpbj= 'FKPBJ ('.date('d-M-Y',strtotime($value_fk['entry_stamp'])).')';

						       	if ($entry_date > $yellow_end_) {
						       		$date1 = $value_fk['entry_stamp'];
									$date2 = $yellow_end;

									$diff = abs(strtotime($date1) - strtotime($date2));

									$years = floor($diff / (365*60*60*24));
									$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
									$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
									$diff_ = floor($diff / (60*60*24)); 
									if ($years > 0) {
										$fkpbj = 'FKPBJ (Telat '.$years.' Tahun, '.$months.' Bulan, '.$days.' Hari)';
									} else if ($diff_ == 0) {
										 $fkpbj= 'FKPBJ ('.date('d-M-Y',strtotime($value_fk['entry_stamp'])).')';
									}
									else {
										$fkpbj = 'FKPBJ ('.date('d-M-Y',strtotime($value_fk['entry_stamp'])).',Telat '.$diff_.' Hari)';
									}

									// $time_range_telat = json_encode(array('start'=>,'end'=>));
									// $week__		= $this->date_week_($year, $time_range_telat, $value_fk['metode_pengadaan']);
									// (printf("%d tahun, %d bulan, %d hari\n", $years, $months, $days))
									// echo $fkpbj;

						       		// $diff = abs(strtotime($jwpp_end) - strtotime($entry_stamp));
						       		// $diff_ = floor($diff / (60*60*24));

						       		// $jwpp_start = date('Y-m-d',strtotime('-'.$diff_.' days', strtotime($value_fk['jwpp_start'])));
						       		// $jwpp_end 	= date('Y-m-d',strtotime('-'.$diff_.' days', strtotime($value_fk['jwpp_end'])));

						       		$jwpp_start = $value_fk['jwpp_start'];
						       		$jwpp_end = $value_fk['jwpp_end'];

						       		$start_jwpp = date('Y-m-d', strtotime('+'.$diff_.'days', strtotime($jwpp_start)));
						       		$end_jwpp = date('Y-m-d', strtotime('+'.$diff_.'days', strtotime($jwpp_end)));
						       		$entry_stamp = $value_fk['entry_stamp'];
						       		// echo($entry_stamp.'-'.$end_jwpp).'<br>';
						       		$jwpp = json_encode(array('start'=>$start_jwpp,'end'=>$end_jwpp));
									$week__ = $this->date_week_actual($year, $jwpp, $metode,$entry_stamp);
						       	} else {
						       		$jwpp_start = $value_fk['jwpp_start'];
						       		$jwpp_end 	= $value_fk['jwpp_end'];

						       		$date1 = $value_fk['entry_stamp'];
									$date2 = $yellow_end;

									$diff = abs(strtotime($date1) - strtotime($date2));
									$diff_ = floor($diff / (60*60*24)); 
						       		// echo "Diff = ".$diff_;
						       		$start_jwpp = date('Y-m-d', strtotime('-'.$diff_.'days', strtotime($jwpp_start)));
						       		$end_jwpp = date('Y-m-d', strtotime('-'.$diff_.'days', strtotime($jwpp_end)));
						       		$entry_stamp = $value_fk['entry_stamp'];
						       		// echo($entry_stamp.'-'.$end_jwpp).'<br>';
						       		$jwpp = json_encode(array('start'=>$start_jwpp,'end'=>$end_jwpp));
									$week__ 		= $this->date_week_actual($year, $jwpp, $metode,$entry_stamp);
						       	}

								if ($value_fk['jenis_pengadaan'] == 'jasa_lainnya') {
									$jenis_pengadaan = 'Jasa Lainnya';
								} else if($value_fk['jenis_pengadaan'] == 'jasa_konstruksi'){
									$jenis_pengadaan = 'Jasa Konstruksi';
								} else if($value_fk['jenis_pengadaan'] == 'jasa_konsultasi'){
									$jenis_pengadaan = 'Jasa Konsultasi';
								} else if($value_fk['jenis_pengadaan'] == 'jasa_lainnya'){
									$jenis_pengadaan = 'Jasa Lainnya';
								} else if($value_fk['jenis_pengadaan'] == 'stock'){
									$jenis_pengadaan = 'Stock';
								} else if($value_fk['jenis_pengadaan'] == 'non_stock'){
									$jenis_pengadaan = 'Non-Stock';
								} else {
									$jenis_pengadaan = '-';
								}
								$no__ = $key_+2;
								// if (count($get_fp3) > 0) {
								// 	$no__ = $key_+2;
								// }
								$table 		.= '<tr class="content" style="border-bottom:0.01em solid black;">
												<td style="background-color: #ced6e0">'.$value_fk['metode_pengadaan_name'].'</td>
												<td style="background-color: #ced6e0">Rp. '.number_format($value_fk['idr_anggaran']).'</td>
												<td style="background-color: #ced6e0">'.$jenis_pengadaan.'</td>
												<td style="background-color: #ced6e0">'.$fkpbj.'</td>
												'.$week__.'
											</tr>
											';	
							}
						} 

						// if (count($get_fp3) > 0) {
						// 	$no__ = $key_+3;
						// }

						if (count($get_fp3) > 0) {
							// $no__ = $key+1;

							foreach ($get_fp3 as $key_fp => $value_fp) {
								$start_date = $value_fp['jwpp_start'];
								$metode = trim($value_fp['metode_pengadaan']);
						        if ($metode == "Pelelangan") {
						            $metode_day = 60; //60 hari
						        }else if ($metode == "Pengadaan Langsung") {
						            $metode_day = 10;// 10 hari
						        }else if ($metode == "Pemilihan Langsung"){
						            $metode_day = 45; //45 hari
						        }else if ($metode == "Swakelola"){
						            $metode_day = 0;
						        }else if ($metode == "Penunjukan Langsung") {
						            $metode_day = 20;// 20 hari
						        }else{
						            //$metode_day = 1;
						        }
						        $start_yellow = $metode_day + 14;
						        $end_yellow = $metode_day + 1;

						        $yellow_start = date('Y-m-d', strtotime('-'.$start_yellow.'days', strtotime($start_date)));
						        // echo 'Ini yellow start '.$yellow_start;

						       	$yellow_end = date('Y-m-d', strtotime('-'.$end_yellow.'days', strtotime($start_date)));
						        // echo 'Ini yellow start '.$yellow_start;

						       	$entry_date = strtotime($value_fp['entry_stamp']);
						       	$yellow_start_ = strtotime($yellow_start);
						       	$yellow_end_ = strtotime($yellow_end);

						       	$fp3 = 'FP3 ('.date('d-M-Y',strtotime($value_fp['entry_stamp'])).')';
						       	if ($entry_date > $yellow_end_) {
						       		$date1 = date('Y-m-d');
									$date2 = $yellow_start;

									$diff = abs(strtotime($date1) - strtotime($date2));

									$years = floor($diff / (365*60*60*24));
									$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
									$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

									if ($years > 0) {
										$fp3 = 'FP3 (Telat '.$years.' Tahun, '.$months.' Bulan, '.$days.' Hari)';
									} else {
										$fp3 = 'FP3 (Telat '.$months.' Bulan, '.$days.' Hari)';
									}
									// (printf("%d tahun, %d bulan, %d hari\n", $years, $months, $days))
									// echo $fkpbj;
						       	}


								if ($value_fp['jenis_pengadaan'] == 'jasa_lainnya') {
									$jenis_pengadaan = 'Jasa Lainnya';
								} else if($value_fp['jenis_pengadaan'] == 'jasa_konstruksi'){
									$jenis_pengadaan = 'Jasa Konstruksi';
								} else if($value_fp['jenis_pengadaan'] == 'jasa_konsultasi'){
									$jenis_pengadaan = 'Jasa Konsultasi';
								} else if($value_fp['jenis_pengadaan'] == 'jasa_lainnya'){
									$jenis_pengadaan = 'Jasa Lainnya';
								} else if($value_fp['jenis_pengadaan'] == 'stock'){
									$jenis_pengadaan = 'Stock';
								} else if($value_fp['jenis_pengadaan'] == 'non_stock'){
									$jenis_pengadaan = 'Non-Stock';
								} else {
									$jenis_pengadaan = '-';
								}
								$year = $value_fp['year'];
								$time_range__ = json_encode(array('start'=>$value_fp['jwpp_start'],'end'=>$value_fp['jwpp_end']));
								$week__		= $this->date_week_($year, $time_range__, $value_fp['metode_pengadaan']);
								$table 		.= '<tr class="content" style="border-bottom:0.01em solid black;">
												<td id="'.$value_fp['id_fppbj'].'"></td>
												<td>'.$value_fp['divisi'].'</td>
												<td>'.$value_fp['nama_pengadaan'].'</td>
												<td>'.$value_fp['metode_pengadaan'].'</td>
												<td>Rp. '.number_format($value_fp['idr_anggaran']).'</td>
												<td>'.$jenis_pengadaan.'</td>
												<td>'.$fp3.'</td>
												'.$week__.'
											</tr>
											';	
							}
						}

					}
					// $table .= '</table>';
				}
				
			}
		}
		return $table;
	}

	function date_week_actual($year=null, $jwpp, $metode,$fkpbj){
		define('NL', "\n");
		$jwpp 			= json_decode($jwpp);
		// echo $metode;die;

		$metode = trim($metode);
		// DAY BASED ON METODE PROC
		$metode_day		= 0;
		if ($metode == "Pelelangan") {
			$metode_day = 13; //60 hari
		}else if ($metode == "Pengadaan Langsung") {
			$metode_day = 1;// 10 hari
		}else if ($metode == "Pemilihan Langsung"){
			$metode_day = 6; //45 hari
		}else if ($metode == "Swakelola"){
			$metode_day = 0;
		}else if ($metode == "Penunjukan Langsung") {
			$metode_day = 3;// 20 hari
		}else{
			// $metode_day = 1;
		}

		//Variable 
		$start			= $this->get_week($jwpp->start);
		$end			= $this->get_week($jwpp->end);
		$start_red		= $start - $metode_day;
		$end_red		= $start;
		$start_yellow	= $start_red - 2;  // FKPBJ must be submited within 2 weeks
		$end_yellow		= $end_red ;

		// KECEPETAN
		// print_r($fkpbj."<br>");
		// if ($fkpbj < $start_yellow) {
		// 	# code...

		// 	// blue
		// 	$start			= $this->get_week($jwpp->start);
		// 	$end			= $this->get_week($jwpp->end);
		// 	// red
		// 	$start_red		= $start - $metode_day;
		// 	$end_red		= $start;
		// 	//yellow
		// 	$start_yellow 	= $this->get_week($fkpbj);
		// 	$end_yellow		= $end_red ;
		// 	// echo(">>>".$start_yellow);

		// // TELAT
		// }else if($fkpbj > $end_yellow){

		// 	$lately			= $this->get_week($fkpbj) - $end_yellow ; // Selisih entry_stamp fkpbj dan $end_yellow

		// 	// blue
		// 	$start			= $this->get_week($jwpp->start) - $lately;
		// 	$end			= $this->get_week($jwpp->end) - $lately;

		// 	// red
		// 	$start_red		= $start - $metode_day ;
		// 	$end_red		= $start;

		// 	//yellow
		// 	$start_yellow 	= $start_red - 2 - ($lately * -1) ;
		// 	$end_yellow 	= $end_red;

		// 	// echo("<<<".$lately."-".$fkpbj."<br><br>");
		// }


		if (($jwpp->end > "2019-12-28") && ($end == 01)) {
			// echo $end;
			$end = 52;
			// echo "----".$start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";
			
		}else{
			$end = $end;
			// echo $start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";
		}
		// echo $start." > start - ".$end." > end - ".$metode." > metode - ".$metode_day." > metode day<br>";

		$year           = $year;
		$firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
		$nextMonday     = strtotime('monday', $firstDayOfYear);
		$nextSunday     = strtotime('sunday', $nextMonday);
		$weekly 		= array();
		$_month			= 0;
		$_week 			= 1;
		$_yellow		= 'class="is-yellow"';
		$_red			= 'class="is-red"';
		$_blue			= 'class="is-blue"';
		

		// print_r($start_red);
		while (date('Y', $nextMonday) == $year) {
			$month = date('M', $nextMonday);

			$weekly[$month][] = $_week;

			$nextMonday = strtotime('+1 week', $nextMonday);
			$nextSunday = strtotime('+1 week', $nextSunday);

			$_week++;
		}
			// --------- WEEK ---------
			foreach ($weekly as $month => $value) {
				foreach ($value as $week) {
					//echo $end_red." Ini adalah end red - ".$start_red." Ini adalah start red - ".$week." Ini adalah week - ".$end." Ini adalah end <br>";
					// echo $week." > ini adalah week <br>";
					if ($week >= $start && $week <= $end) {
						// BLUE
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-blue' style='border-bottom:0.01em solid black' bgcolor='#54A0FF'>&nbsp;</td>";
					}else if ($week >= $start_red && $week <= $end_red){
						// RED
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-red' style='border-bottom:0.01em solid black' bgcolor='#FF7675'>&nbsp;</td>";
					}else if ($week >= $start_yellow && $week <= $end_yellow){
						// YELLOW
						$table .= "<td id='".sprintf('%02d', $week)."' class='row-small is-yellow' style='border-bottom:0.01em solid black' bgcolor='#FECA57'>&nbsp;</td>";
					}else{
						// PLAIN
						$table .= "<td class='row-small' id='".sprintf('%02d', $week)."' style='border-bottom:0.01em solid black;background-color: #ced6e0;'>&nbsp;</td>";//border-bottom:1px solid black
					}
				}
			}

		// print_r($table);
		return $table;
	}

	public function show($value='')
	{
		$getData = $this->db->where('is_status',2)->get('ms_fppbj')->result_array();
		$year = date('Y');
		$table = " 
			<a href=".site_url('ex_test/export/'.$year).">Export Data</a><br>
			<table border=1>
				<thead>
					<tr>
						<th>Nama Pengadaan</th>
						<th>No PR</th>
						<th>Tipe Pr</th>
					</tr>
				</thead>
				<tbody>";

		foreach ($getData as $key => $value) {
			$table .= "<tr>
						<td>".$value['nama_pengadaan']."</td>
						<td>".$value['no_pr']."</td>
						<td>".$value['tipe_pr']."</td>
					</tr>";
		}

		$table .= "</tbody>
			</table>
		";

		echo $table;
	}

	public function export($year)
	{
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Nama Pengadaan", "No PR", "Tipe Pr");

		$column = 0;
		$object->getActiveSheet()->setCellValueByColumnAndRow(0, 1, "No")->mergeCells("A1:A4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(1, 1, "Pengguna Barang/Jasa")->mergeCells("B1:B4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(2, 1, "Nama Pengadaan Barang/Jasa")->mergeCells("C1:C4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(3, 1, "Metode Pengadaan")->mergeCells("D1:D4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(4, 1, "Anggaran (include PPN 10%)")->mergeCells("F1:F4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(5, 1, "Jenis Pengadaan")->mergeCells("E1:E4");
		$object->getActiveSheet()->setCellValueByColumnAndRow(6, 1, "Status")->mergeCells("G1:G4");
		
		// foreach($table_columns as $field)
		// {
		//    $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
		//    $column++;
		// }

		$data = $this->ex->rekap_perencanaan($year);
		// print_r($data);die;

		$excel_row = 2;
		$no = 1;
		foreach($data as $divisi => $value)
		{
		  foreach ($value as $key => $value1) {

		  	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $divisi." - ".$key);

		  	foreach ($value1 as $key2 => $value2) {
		  		if ($value2['jenis_pengadaan'] == 'jasa_lainnya') {
					$jenis_pengadaan = 'Jasa Lainnya';
				} else if($value2['jenis_pengadaan'] == 'jasa_konstruksi'){
					$jenis_pengadaan = 'Jasa Konstruksi';
				} else if($value2['jenis_pengadaan'] == 'jasa_konsultasi'){
					$jenis_pengadaan = 'Jasa Konsultasi';
				} else if($value2['jenis_pengadaan'] == 'jasa_lainnya'){
					$jenis_pengadaan = 'Jasa Lainnya';
				} else if($value2['jenis_pengadaan'] == 'stock'){
					$jenis_pengadaan = 'Stock';
				} else if($value2['jenis_pengadaan'] == 'non_stock'){
					$jenis_pengadaan = 'Non-Stock';
				} else {
					$jenis_pengadaan = '-';
				}

		  		$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $no)->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $value2['divisi'])->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $value2['nama_pengadaan'])->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $value2['metode_pengadaan'])->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $value2['idr_anggaran'])->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $jenis_pengadaan)->setAutoSize(true);
		  		$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, 'FPPBJ')->setAutoSize(true);
		  	}
		  	
		  	$excel_row++;
		  	$no++;
		  }
		  
		   // $no++;
		}
		
		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Employee Data.xls"');
		$object_writer->save('php://output');
		
	}

	public function get_week_cells($year="")
	{
		if ($year == null) {
			$year = date('Y');
		}
		define('NL', "\n");

		$year           = $year;
		$firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
		$nextMonday     = strtotime('monday', $firstDayOfYear);
		$nextSunday     = strtotime('sunday', $nextMonday);
		$_month			= 0;
		$_week 			= 1;
		$weekly 		= array();

		while (date('Y', $nextMonday) == $year) {
			$month = date('M', $nextMonday);

			$weekly[$month][] = $_week;

			// echo "<td>".$_week."</td>";

			$nextMonday = strtotime('+1 week', $nextMonday);
			$nextSunday = strtotime('+1 week', $nextSunday);

			$_week++;
		}
		return $_week = $_week - 1;
	}
}