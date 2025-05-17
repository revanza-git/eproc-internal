<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PdfService {
    private $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
        include_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';
    }
    
    public function generateRekapPdf($year, $data = null) {
        $dateHead = $this->date_week($year);
        $dateDetail = $this->date_detail($year);
        
        $page = $this->generateHtml($year, $dateHead, $dateDetail, $data);
        
        $dompdf = new DOMPDF();
        $dompdf->load_html($page);
        $dompdf->set_paper("A4", "landscape");
        $dompdf->render();
        
        return $dompdf;
    }
    
    private function generateHtml($year, $dateHead, $dateDetail, $data) {
        return '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <title>Table Layout</title>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <style>
                        ' . $this->getStyles() . '
                    </style>
                </head>
                <body>
                    ' . $this->generateHeader($year) . '
                    ' . $this->generateContent($year, $dateHead, $dateDetail) . '
                </body>
                </html>';
    }
    
    private function getStyles() {
        return '@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,700");
                * {
                    box-sizing: border-box;
                    -moz-box-sizing: border-box;
                }
                @page {
                    margin-top: 0cm;
                    margin-bottom: 0cm;
                }
                .break {
                    page-break-inside: always;
                    page-break-after: always;
                    page-break-before: always;
                }
                body {
                    width: 100%;
                    font-family: "Open Sans";
                    background-color: #f9f9f9;
                }
                .border tr td, .border tr th {border: none; padding: 2px}
                .no-border tr td {border: none;}
                .no-border tr th {border: none;}
                tr.gery {background-color: #ddd;}
                .export {
                    background-color: #fff;
                    width: 1050px;
                    border-right: 1px solid #ddd;
                    margin: 0 15px;
                }
                .nopadding td {
                    padding: 0!important;
                }
                .export td, .export th {
                    vertical-align: middle;
                    text-align: center;
                    border-collapse: collapse;
                    border-spacing: none;
                    padding: 5px;
                    word-wrap: break-word;
                }
                .export th {
                    padding: 0;
                }
                .export-logo {
                    margin: 5px;
                    float: left;
                }
                .export-logo img {
                    left: 15px;
                    height: 35px;
                }
                .export-name {
                    font-size: 1.2rem;
                    font-weight: 400;
                    margin: 15px;
                    text-transform: uppercase;
                }
                .export-info li {
                    display: flex;
                }
                .export-info li span {
                    padding: 5px 15px;
                    text-align: left;
                }
                .export-info li span:nth-child(1) {
                    width: calc(40% - 15px * 2);
                }
                .export-info li span:nth-child(2) {
                    width: calc(10% - 15px * 2);
                }
                .export-info li span:nth-child(3) {
                    width: calc(60% - 15px * 2);
                }
                .export .sign-area {
                    height: 71px;
                }
                ul li {list-style: none;}
                .sign-name {
                    font-size: 13px;
                }
                .sign-position {
                    font-size: 11px;
                }
                .smaller-text {
                    font-size: 10px;
                    width: 670px;
                }
                .is-yellow {
                    background-color: #FECA57!important;
                }
                .is-red {
                    background-color: #FF7675!important;
                }
                .is-blue {
                    background-color: #54A0FF!important;
                }
                .row-small {
                    border: 1px solid #ddd!important;
                }
                .gery th:last-child {
                    border: 1px solid #ddd!important;
                    background-color: #fff;
                    color: #3b4758;
                }
                .content:nth-child(odd) {background-color: #fff!important}
                .content {background-color: #f9f9f9!important}
                .content td.row-small {background-color: white; color: #3b4758}';
    }
    
    private function generateHeader($year) {
        return '<div class="export-logo">
                    <img src="' . base_url() . 'assets/images/NUSANTARA-REGAS-2.png" style="float: left">
                </div>
                <table class="export nopadding">
                    <tr>
                        <td>
                            <div class="text-wrapper">
                                <div class="text-header" style="font-size: 15px; font-weight: 700; margin-bottom: 10px">
                                    KOMITMEN PENGADAAN BARANG/JASA <br> TAHUN ' . $year . '
                                </div>
                                <div class="text-content" style="text-align: left; font-size: 12px">
                                    ' . $this->getCommitmentText($year) . '
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                ' . $this->generateSignatureSection($year);
    }
    
    private function getCommitmentText($year) {
        return 'Kami yang bertandatangan di bawah ini, menyatakan komitmen atas pengadaan barang/jasa tahun ' . $year . ', sebagai berikut: 
                <ul style="margin-left: -25px">
                    <li>
                        1. Pengadaan Barang/Jasa dilaksanakan berdasarkan pada prinsip, etika dan kebijakan Pengadaan Barang/Jasa Perusahaan;
                    </li>
                    <li>
                        2. Perencana pengadaan barang/jasa (daftar terlampir) telah disusun berdasarkan rencana kerja masing-masing fungsi di Perusahaan; 
                    </li>
                    <li>
                        3. Perubahan atas pengadaan barang/jasa dalam daftar perencanaan tersebut diatas, baik nama, ruang lingkup, jenis, metode dan jadwal pengadaan, wajib disampaikan tertulis kepada GM SOM dan Umum, dengan melampirkan Formulir Perubahan Perencanaan Pengadaan Barang/Jasa Tahun ' . $year . ' ("Formulir Perubahan") yang ditandatangani oleh Manager (Fungsi Leher) atau General Manager terkait; 
                    </li>
                    <li>
                        4. Permintaan pengadaan barang/jasa diluar daftar perencanaan tersebut diatas atau pengadaan barang/jasa yang terlambat/mundur dari jadwal dalam daftar perencanaan tersebut diatas, akan tetap diproses namun tidak menjadi prioritas dan mempertimbangkan beban kerja dari Fungsi Pengadaan pada saat permintaan pengadaan barang/jasa tersebut diajukan, kecuali ditentukan lain oleh Direktur Utama.
                    </li>
                </ul>
                Demikian komitmen ini kami buat dengan sebenar-benarnya, untuk digunakan sebagaimana mestinya';
    }
    
    private function generateSignatureSection($year) {
        return '<table class="export no-border nopadding">
                    <caption style="font-size: 13px">Jakarta, 01 April ' . $year . '</caption>
                    ' . $this->generateSignatureRows() . '
                </table>';
    }
    
    private function generateSignatureRows() {
        $signatures = '';
        $positions = [
            'Direktur Operasi dan Komersial',
            'Direktur Operasi dan Komersial',
            'Direktur Operasi dan Komersial',
            'Direktur Operasi dan Komersial',
            'Direktur Operasi dan Komersial',
            'Direktur Operasi dan Komersial'
        ];
        
        foreach ($positions as $position) {
            $signatures .= $this->generateSignatureCell($position);
        }
        
        return $signatures;
    }
    
    private function generateSignatureCell($position) {
        return '<td>
                    <div class="sign-wrapper">
                        <div class="sign-area"></div>
                        <div class="sign-name">Bara Frontasia</div>
                        <div class="sign-position">' . $position . '</div>
                    </div>
                </td>';
    }
    
    private function generateContent($year, $dateHead, $dateDetail) {
        return '<div style="margin-top: 2.1rem" class="break">
                    <table class="export smaller-text border" style="width: 1050px; border-collapse: collapse;">
                        <caption style="font-size: 15px; font-weight: 700; margin-bottom: 10px">
                            Rencana Pengadaan Barang/Jasa Tahun ' . $year . ' <br> Metode Pelelangan, Pemilihan langsung dan Penunjukan langsung serta Swakelola
                        </caption>
                        <tr class="gery">
                            <th rowspan="4">No.</th>
                            <th rowspan="4">Pengguna Barang/Jasa</th>
                            <th rowspan="4">Paket Pengadaan Barang/Jasa</th>
                            <th rowspan="4">Anggaran (include PPN 10%)</th>
                            <th rowspan="4">Metode Pengadaan</th>
                            <th colspan="54">Persiapan & Permohonan Pengadaan (PP1) - Proses Pengadaan (PP2) - Pelaksanaan Pekerjaan (PP3)</th>
                        </tr>
                        ' . $dateHead . '
                        ' . $dateDetail . '
                    </table>
                </div>';
    }
    
    private function date_week($year) {
        $year = $year;
        $firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
        $nextMonday = strtotime('monday', $firstDayOfYear);
        $nextSunday = strtotime('sunday', $nextMonday);
        $_month = 0;
        $_week = 1;
        $weekly = array();
        
        while (date('Y', $nextMonday) == $year) {
            $month = date('M', $nextMonday);
            $weekly[$month][] = $_week;
            $nextMonday = strtotime('+1 week', $nextMonday);
            $nextSunday = strtotime('+1 week', $nextSunday);
            $_week++;
        }
        
        $table = "<tr>";
        $table .= "<td class='row-small' colspan='" . $_week . "'>" . $year . "</td>";
        $table .= "</tr>";
        
        $table .= "<tr>";
        foreach ($weekly as $month => $value) {
            $month_ = count($weekly[$month]);
            $table .= "<td class='row-small' colspan='" . $month_ . "'>" . $month . "</td>";
        }
        $table .= "</tr>";
        
        $table .= "<tr>";
        foreach ($weekly as $month => $value) {
            foreach ($value as $week) {
                $table .= "<td class='row-small' id='" . $week . "'>" . $week . "</td>";
            }
        }
        $table .= "</tr>";
        
        return $table;
    }
    
    private function date_week_($year, $jwp, $metode) {
        $jwp = json_decode($jwp);
        $metode_day = $this->getMetodeDay($metode);
        
        $start = $this->get_week($jwp->start);
        $end = $this->get_week($jwp->end);
        $start_red = $start - $metode_day;
        $end_red = $start;
        $start_yellow = $start_red - 2;
        $end_yellow = $end_red;
        
        $year = $year;
        $firstDayOfYear = mktime(0, 0, 0, 1, 1, $year);
        $nextMonday = strtotime('monday', $firstDayOfYear);
        $nextSunday = strtotime('sunday', $nextMonday);
        $_month = 0;
        $_week = 1;
        $weekly = array();
        
        while (date('Y', $nextMonday) == $year) {
            $month = date('M', $nextMonday);
            $weekly[$month][] = $_week;
            $nextMonday = strtotime('+1 week', $nextMonday);
            $nextSunday = strtotime('+1 week', $nextSunday);
            $_week++;
        }
        
        $table = '';
        foreach ($weekly as $month => $value) {
            foreach ($value as $week) {
                if ($week >= $start && $week <= $end) {
                    $table .= "<td id='" . sprintf('%02d', $week) . "' class='row-small is-blue' >&nbsp;</td>";
                } else if ($week >= $start_red && $week <= $end_red) {
                    $table .= "<td id='" . sprintf('%02d', $week) . "' class='row-small is-red' >&nbsp;</td>";
                } else if ($week >= $start_yellow && $week <= $end_yellow) {
                    $table .= "<td id='" . sprintf('%02d', $week) . "' class='row-small is-yellow' >&nbsp;</td>";
                } else {
                    $table .= "<td class='row-small' id='" . sprintf('%02d', $week) . "' >&nbsp;</td>";
                }
            }
        }
        
        return $table;
    }
    
    private function getMetodeDay($metode) {
        switch ($metode) {
            case "Pelelangan":
                return 8; // 60 hari
            case "Pemilihan Langsung":
                return 6; // 45 hari
            case "Swakelola":
                return 0;
            case "Penunjukan Langsung":
                return 3; // 20 hari
            default:
                return 0;
        }
    }
    
    private function get_week($ddate) {
        $date = new DateTime($ddate);
        return $date->format("W");
    }
    
    private function date_detail($year) {
        $data = $this->CI->db->select('ms_fppbj.id id_fppbj, year_anggaran, nama_pengadaan, tb_division.name divisi, ms_fppbj.id, idr_anggaran, jenis_pengadaan, tb_proc_method.name metode_pengadaan, desc, jwp')
            ->where('year_anggaran', $year)
            ->where('is_approved', 1)
            ->where('is_status', 0)
            ->join('tb_division', 'tb_division.id = ms_fppbj.id_division')
            ->join('tb_proc_method', 'tb_proc_method.id = ms_fppbj.metode_pengadaan')
            ->get('ms_fppbj')
            ->result_array();
        
        $table = '';
        foreach ($data as $key => $value) {
            $week = $this->date_week_($year, $value['jwp'], $value['metode_pengadaan']);
            
            $table .= '<tr class="content">
                        <td id="' . $value['id_fppbj'] . '">' . ($key + 1) . '</td>
                        <td>' . $value['divisi'] . '</td>
                        <td>' . $value['nama_pengadaan'] . '</td>
                        <td>Rp. ' . number_format($value['idr_anggaran']) . '</td>
                        <td>' . $value['metode_pengadaan'] . '</td>
                        <td>' . $value['desc'] . '</td>
                        ' . $week . '
                    </tr>';
        }
        
        return $table;
    }
} 