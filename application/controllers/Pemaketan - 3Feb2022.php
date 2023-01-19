<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemaketan extends MY_Controller
{

    public $form;
    public $modelAlias     = 'pm';
    public $alias         = 'ms_fppbj';
    public $module         = 'kurs';
    public $admin        = null;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemaketan_model', 'pm');
        $this->load->model('Fppbj_model', 'fm');
        $this->load->model('Main_model', 'mm');
        $this->load->model('export_model', 'ex');

        $this->admin     = $this->session->userdata('admin');

        $this->formWizard = array(
            'step' => array(
                'intro' => array(
                    'label' => 'Intro',
                    'form' => array(
                        array(
                            'field'    =>     'intro',
                            'type'    =>    'intro',
                            'label'    =>    'Intro FPPBJ',
                            // 'rules' => 	'required',
                        )

                    ),
                    'button' => array(
                        array(
                            'type' => 'next',
                            'label' => 'Mulai',
                            'class' => 'btn-next'
                        )
                    )
                ),
                'fppbj' => array(
                    'label' => 'Form FPPBJ',
                    'form' => array(
                        array(
                            'field'    =>     'is_perencanaan',
                            'type'    =>    'radio',
                            'label'    =>    'Masuk Perencanaan ?',
                            'source' =>    array(
                                '1' => 'Masuk Perencanaan',
                                '2' => 'Tidak Masuk Perencanaan'
                            ),
                            'rules' =>     'required'
                        ),
                        array(
                            'field'    =>     'no_pr',
                            'type'    =>    'text',
                            'label'    =>    'No. PR'
                        ), array(
                            'field'    =>     'tipe_pr',
                            'type'    =>    'dropdown',
                            'label'    =>    'Tipe PR',
                            'source' =>    array('' => 'Pilih Dibawah Ini', 'direct_charge' => 'Direct Charges', 'services' => 'Services', 'user_purchase' => 'User Purchase', 'nda' => 'NDA'),
                            'rules' =>    'required'
                        ), array(
                            'field'    =>     'pr_lampiran',
                            'type'    =>    'file',
                            'label'    =>    'Lampiran PR',
                            'upload_path' => base_url('assets/lampiran/pr_lampiran/'),
                            'upload_url' => site_url('pemaketan/upload_lampiran'),
                            'allowed_types' => '*',
                            'rules' => '',
                            'value' => ''
                        ), array(
                            'field'    =>     'nama_pengadaan',
                            'type'    =>    'text',
                            'label'    =>    'Nama Pengadaan',
                            'rules' =>     'required',
                        ), array(
                            'field'    =>     'pengadaan',
                            'type'    =>    'dropdown',
                            'label'    =>    'Jenis Pengadaan',
                            'source' =>    array('' => 'Pilih Dibawah Ini', 'jasa' => 'Pengadaan Jasa', 'barang' => 'Pengadaan Barang'),
                            'rules'    =>    'required'
                        ), array(
                            'field'    =>     'jenis_pengadaan',
                            'type'    =>    'dropdown',
                            'label'    =>    'Jenis Detail Pengadaan',
                            'source' =>    array('' => 'Pilih Jenis Pengadaan Diatas'),
                            'rules'    =>    'required'
                        ), array(
                            'field'    =>     'metode_pengadaan',
                            'type'    =>    'dropdown',
                            'label'    =>    'Metode Pengadaan',
                            'source' =>    $this->mm->getProcMethod(),
                            'rules'    =>     'required'
                        ), array(
                            'field'    =>     'idr_anggaran[]',
                            'type'    =>    'currency',
                            'label'    =>    'Anggaran (IDR)'
                        ), array(
                            'field'    =>     'usd_anggaran[]',
                            'type'    =>    'currency',
                            'label'    =>    'Anggaran (USD)',
                        ), array(
                            'field'    =>     'year_anggaran[]',
                            'type'    =>    'number',
                            'label'    =>    'Tahun Anggaran',
                            'rules' =>     'required'
                        ), array(
                            'field'    =>     'kak_lampiran',
                            'type'    =>    'file',
                            'label'    =>    'KAK / Spesifikasi Teknis',
                            'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
                            'upload_url' => site_url('fkpbj/upload_lampiran'),
                            'allowed_types' => '*',
                            'rules' => '',
                            'value' => ''
                        ), array(
                            'field'    =>     'hps',
                            'type'    =>    'radio',
                            'label'    =>    'Ketersediaan HPS',
                            'source' =>    array(1 => 'Ada', 0 => 'Tidak Ada')
                        ), array(
                            'field'    =>     'lingkup_kerja',
                            'type'    =>    'textarea',
                            'label'    =>    'Lingkup Kerja',
                            'rules' =>     'required'
                        ), array(
                            'field'    =>     'penggolongan_penyedia',
                            'type'    =>    'dropdown',
                            'label'    =>    'Penggolongan Penyedia Jasa (Usulan)',
                            'source' =>    array(0 => 'Pilih Dibawah Ini', 'perseorangan' => 'Perseorangan', 'usaha_kecil' => 'Usaha Kecil(K)', 'usaha_menengah' => 'Usaha Menengah(M)', 'usaha_besar' => 'Usaha Besar(B)')
                        ),
                        // ,array(
                        // 	'field'	=> 	'penggolongan_CSMS',
                        // 	'type'	=>	'dropdown',
                        // 	'label'	=>	'Penggolongan CSMS (Sesuai Hasil Analisa Resiko)',
                        // 	'source'=>	array(0 => 'Pilih Dibawah Ini', 'high' => 'High', 'medium' => 'Medium', 'low' => 'Low')
                        // )
                        array(
                            'field'    =>     array('jwpp_start', 'jwpp_end'),
                            'type'    =>    'date_range',
                            'label'    =>    'Masa Penyelesaian Pekerjaan',
                            'rules' =>  'required'
                        ), array(
                            'field'    =>     array('jwp_start', 'jwp_end'),
                            'type'    =>    'date_range',
                            'label'    =>    'Masa Pemeliharaan'
                        ), array(
                            'field'    =>     'desc_metode_pembayaran',
                            'type'    =>    'textarea',
                            'label'    =>    'Metode Pembayaran (Usulan)',
                        ), array(
                            'field'    =>     'jenis_kontrak',
                            'type'    =>    'dropdown',
                            'label'    =>    'Jenis Kontrak (Usulan)',
                            'source' =>    array(
                                ''         => 'Pilih Dibawah Ini',
                                'po'     => 'Purchase Order (PO)',
                                'GTC01' => 'GTC01 - Kontrak Jasa Konstruksi non EPC',
                                'GTC02' => 'GTC02 - Kontrak Jasa Konsultan',
                                'GTC03' => 'GTC03 - Kontrak Jasa Umum',
                                'GTC04' => 'GTC04 - Kontrak Jasa Pemeliharaan',
                                'GTC05' => 'GTC05 - Kontrak Jasa Pembuatan Software',
                                'GTC06' => 'GTC06 - Kontrak Jasa Sewa Fasilitas dan Alat',
                                'GTC07' => 'GTC07 - Kontrak Jasa Tenaga Kerja.',
                                'spk'    => 'Perjanjian sederhana/SPK'
                            )
                        ), array(
                            'field'    =>     'sistem_kontrak',
                            'type'    =>    'multiple',
                            'label'    =>    'Sistem Kontrak (Usulan)',
                            'source' =>    array(
                                'lumpsum'         => 'Perikatan Harga - Lumpsum',
                                'unit_price'    => 'Perikatan Harga - Unit Price',
                                'modified'         => 'Perikatan Harga - Modified (lumpsum + unit price)',
                                'outline'         => 'Perikatan Harga - Outline Agreement',
                                'turn_key'         => 'Delivery - Turn Key',
                                'sharing'         => 'Delivery - Sharing Contract',
                                'success_fee'     => 'Delivery - Success Fee',
                                'stockless'     => 'Delivery - Stockless Purchasing',
                                'on_call'         => 'Delivery - On Call Basic',
                            )
                        ), array(
                            'field'    =>     'desc_dokumen',
                            'type'    =>    'textarea',
                            'label'    =>    'Keterangan',
                        )
                        // ,array(
                        // 	'field'	=> 	'desc',
                        // 	'type'	=>	'textarea',
                        // 	'label'	=>	'Keterangan Lainnya',
                        // )

                    ),
                    'button' => array(
                        array(
                            'type' => 'prev',
                            'label' => 'Sebelumnya',
                            'class' => 'btn-prev'
                        ), array(
                            'type' => 'next',
                            'label' => 'Lanjut',
                            // 'class'=>'btn-to-jasa btn-to-swakelola btn-to-jasa-swakelola'
                            'class' => 'btn-to'
                        )
                    )
                ),
                'resiko' => array(
                    'label' => 'Analisa Resiko',
                    'form' => array(
                        array(
                            'type'        => 'penilaianResiko',
                            'label'        => 'Penilaian Resiko',
                        ), array(
                            'field'    =>     'resiko',
                            'type'    =>    'matrix_resiko',
                            'label'    =>    'Matrix Resiko',
                            // 'rules' => 	'required',
                            'full' => true,
                        )

                    ),
                    'button' => array(
                        array(
                            'type' => 'prev',
                            'label' => 'Sebelumnya',
                            'class' => 'btn-prev'
                        ), array(
                            'type' => 'next',
                            'label' => 'Lanjut',
                            'class' => 'btn-next'
                        )
                    )
                ),
                'dpt' => array(
                    'label' => 'Rekomendasi DPT',
                    'form' => array(
                        array(
                            'field'    =>     'type',
                            'type'    =>    'checkbox',
                            'label'    =>    'Daftar DPT',
                            // 'rules' => 	'required',
                            'full' => true,
                            'source' =>    array(
                                '' => 'Pilih DPT'
                            )
                        ),
                        array(
                            'field'        => 'type_usulan',
                            'type'        => 'text',
                            'label'        => 'Usulan Non DPT'
                        ),
                    ),
                    'button' => array(
                        array(
                            'type' => 'prev',
                            'label' => 'Sebelumnya',
                            'class' => 'btn-prev'
                        ), array(
                            'type' => 'next',
                            'label' => 'Lanjut',
                            'class' => 'btn-next'
                        )
                    )
                ),
                'swakelola' => array(
                    'label' => 'Analisa Swakelola',
                    'form' => array(
                        array(
                            'field'        => 'waktu',
                            'type'        => 'dropdown',
                            'label'        => 'Waktu',
                            'source'    => array(
                                0 => 'Pilih Dibawah Ini',
                                1 => 'Penyelesaian Pekerjaan ≤ 3 bulan',
                                2 => 'Penyelesaian Pekerjaan > 3 bulan s.d < 6 bulan',
                                3 => 'Penyelesaian Pekerjaan ≥ 6 bulan',
                            ),
                            'rules'     => 'required'
                        ),
                        array(
                            'field'        => 'biaya',
                            'type'        => 'dropdown',
                            'label'        => 'Biaya',
                            'source'    => array(
                                0 => 'Pilih Dibawah Ini',
                                1 => 'Biaya Pelaksanaan Pekerjaan ≤ 50 juta',
                                2 => 'Biaya Pelaksanaan Pekerjaan > 50 juta s.d < 100 juta',
                                3 => 'Biaya Pelaksanaan Pekerjaan ≥ 100 juta',
                            ),
                            'rules'     => 'required'
                        ),
                        array(
                            'field'        => 'tenaga',
                            'type'        => 'dropdown',
                            'label'        => 'Tenaga Kerja',
                            'source'    => array(
                                0 => 'Pilih Dibawah Ini',
                                1 => 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi sebagai perencana dan pelaksana dan pengawas',
                                2 => 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi salah satu atau lebih sebagai perencana dan/atau pelaksana dan/atau pengawas',
                                3 => 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan tidak memenuhi sebagai perencana dan pelaksana dan pengawas',
                            ),
                            'rules'     => 'required'
                        ), array(
                            'field'        => 'bahan',
                            'type'        => 'dropdown',
                            'label'        => 'Bahan',
                            'source'    => array(
                                0 => 'Pilih Dibawah Ini',
                                1 => 'Bahan mudah didapatkan langsung oleh Pekerja NR',
                                2 => 'Bahan dapat diadakan melalui pihak ketiga',
                                3 => 'Bahan lebih efisien apabila diadakan oleh pihak ketiga',
                            ),
                            'rules'     => 'required'
                        ), array(
                            'field'        => 'peralatan',
                            'type'        => 'dropdown',
                            'label'        => 'Peralatan',
                            'source'    => array(
                                0 => 'Pilih Dibawah Ini',
                                1 => 'Ketersediaan jumlah dan kemampuan peralatan kerja memenuhi kebutuhan pekerjaan',
                                2 => 'Ketersediaan jumlah dan/atau kemampuan peralatan kerja tidak memenuhi kebutuhan pekerjaan',
                                3 => 'Peralatan lebih efisien apabila diadakan oleh pihak ketiga',
                            ),
                            'rules'     => 'required'
                        ), array(
                            'field'    =>     'swakelola',
                            'type'    =>    'matrix_swakelola',
                            'label'    =>    'Matrix Swakelola',
                            // 'rules' => 	'required',
                            'full' => true,
                        )

                    ),
                    'button' => array(
                        array(
                            'type' => 'prev',
                            'label' => 'Sebelumnya',
                            'class' => 'btn-back'
                        ), array(
                            'type' => 'next',
                            'label' => 'Lanjut',
                            'class' => 'btn-to'
                        )
                    )
                ),
            ),
        );

        if ($this->check_perencanaan_umum(date('Y')) == '0') {
            $this->formWizard['step']['fppbj']['form'][0]['rules'] = '';
        }

        $this->form_edit = array(
            'form' => array(
                array(
                    'field'    =>     'no_pr',
                    'type'    =>    'text',
                    'label'    =>    'No. PR',
                    // 'value' =>	'ss'
                ),
                array(
                    'field'    =>     'tipe_pr',
                    'type'    =>    'dropdown',
                    'label'    =>    'Tipe PR',
                    'source' =>    array(0 => 'Pilih Dibawah Ini', 'direct_charge' => 'Direct Charges', 'services' => 'Services', 'user_purchase' => 'User Purchase', 'nda' => 'NDA'),
                ), array(
                    'field'    =>     'pr_lampiran',
                    'type'    =>    'file',
                    'label'    =>    'Lampiran PR',
                    'upload_path' => base_url('assets/lampiran/pr_lampiran/'),
                    'upload_url' => site_url('fkpbj/upload_lampiran'),
                    'allowed_types' => '*',
                ), array(
                    'field'    =>     'nama_pengadaan',
                    'type'    =>    'text',
                    'label'    =>    'Nama Pengadaan',
                    'rules' =>     'required',
                ), array(
                    'field'    =>     'tipe_pengadaan',
                    'type'    =>    'dropdown',
                    'label'    =>    'Jenis Pengadaan',
                    'source' =>    array(0 => 'Pilih Dibawah Ini', 'jasa' => 'Pengadaan Jasa', 'barang' => 'Pengadaan Barang'),
                    'rules'    =>    'required'
                ), array(
                    'field'    =>     'jenis_pengadaan',
                    'type'    =>    'dropdown',
                    'label'    =>    'Jenis Detail Pengadaan',
                    'source' =>    array('stock' => 'Stock', 'non_stock' => 'Non Stock', 'jasa_konsultasi' => 'Jasa Konsultasi', 'jasa_konstruksi' => 'Jasa Konstruksi', 'jasa_lainnya' => 'Jasa Lainnya'),
                    'rules'    =>    'required'
                ), array(
                    'field'    =>     'metode_pengadaan',
                    'type'    =>    'dropdown',
                    'label'    =>    'Metode Pengadaan',
                    'source' =>    $this->mm->getProcMethod(),
                    'rules'    =>     'required'
                ), array(
                    'field'    =>     'idr_anggaran',
                    'type'    =>    'currency',
                    'label'    =>    'Anggaran (IDR)'
                ), array(
                    'field'    =>     'usd_anggaran',
                    'type'    =>    'currency',
                    'label'    =>    'Anggaran (USD)',
                ), array(
                    'field'    =>     'year_anggaran',
                    'type'    =>    'number',
                    'label'    =>    'Tahun Anggaran',
                    'rules' =>     'required'
                ), array(
                    'field'    =>     'kak_lampiran',
                    'type'    =>    'file',
                    'label'    =>    'KAK / Spesifikasi Teknis',
                    'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
                    'upload_url' => site_url('fkpbj/upload_lampiran'),
                    'allowed_types' => '*',
                    'rules' => ''
                ), array(
                    'field'    =>     'hps',
                    'type'    =>    'radio',
                    'label'    =>    'Ketersediaan HPS',
                    'source' =>    array(1 => 'Ada', 0 => 'Tidak Ada')
                ), array(
                    'field'    =>     'lingkup_kerja',
                    'type'    =>    'textarea',
                    'label'    =>    'Lingkup Kerja',
                    'rules' =>     'required'
                ), array(
                    'field'    =>     'penggolongan_penyedia',
                    'type'    =>    'dropdown',
                    'label'    =>    'Penggolongan Penyedia Jasa (Usulan)',
                    'source' =>    array(0 => 'Pilih Di Bawah Ini', 'perseorangan' => 'Perseorangan', 'usaha_kecil' => 'Usaha Kecil(K)', 'usaha_menengah' => 'Usaha Menengah(M)', 'usaha_besar' => 'Usaha Besar(B)')
                ),
                // ,array(
                // 	'field'	=> 	'penggolongan_CSMS',
                // 	'type'	=>	'dropdown',
                // 	'label'	=>	'Penggolongan CSMS (Sesuai Hasil Analisa Resiko)',
                // 	'source'=>	array(0 => 'Pilih Dibawah Ini', 'high' => 'High', 'medium' => 'Medium', 'low' => 'Low')
                // )
                array(
                    'field'    =>     array('jwpp_start', 'jwpp_end'),
                    'type'    =>    'date_range',
                    'label'    =>    'Masa Penyelesaian Pekerjaan',
                    'rules' =>  'required'
                ), array(
                    'field'    =>     array('jwp_start', 'jwp_end'),
                    'type'    =>    'date_range',
                    'label'    =>    'Masa Pemeliharaan'
                ), array(
                    'field'    =>     'desc_metode_pembayaran',
                    'type'    =>    'textarea',
                    'label'    =>    'Metode Pembayaran (Usulan)',
                ), array(
                    'field'    =>     'jenis_kontrak',
                    'type'    =>    'dropdown',
                    'label'    =>    'Jenis Kontrak (Usulan)',
                    'source' =>    array(
                        ''         => 'Pilih Dibawah Ini',
                        'po'     => 'Purchase Order (PO)',
                        'GTC01' => 'GTC01 - Kontrak Jasa Konstruksi non EPC',
                        'GTC02' => 'GTC02 - Kontrak Jasa Konsultan',
                        'GTC03' => 'GTC03 - Kontrak Jasa Umum',
                        'GTC04' => 'GTC04 - Kontrak Jasa Pemeliharaan',
                        'GTC05' => 'GTC05 - Kontrak Jasa Pembuatan Software',
                        'GTC06' => 'GTC06 - Kontrak Jasa Sewa Fasilitas dan Alat',
                        'GTC07' => 'GTC07 - Kontrak Jasa Tenaga Kerja.',
                        'spk'    => 'Perjanjian sederhana/SPK'
                    )
                ), array(
                    'field'    =>     'sistem_kontrak',
                    'type'    =>    'multiple',
                    'label'    =>    'Sistem Kontrak (Usulan)',
                    'source' =>    array(
                        'lumpsum'         => 'Perikatan Harga - Lumpsum',
                        'unit_price'    => 'Perikatan Harga - Unit Price',
                        'modified'         => 'Perikatan Harga - Modified (lumpsum + unit price)',
                        'outline'         => 'Perikatan Harga - Outline Agreement',
                        'turn_key'         => 'Delivery - Turn Key',
                        'sharing'         => 'Delivery - Sharing Contract',
                        'success_fee'     => 'Delivery - Success Fee',
                        'stockless'     => 'Delivery - Stockless Purchasing',
                        'on_call'         => 'Delivery - On Call Basic',
                    )
                ), array(
                    'field'    =>     'desc_dokumen',
                    'type'    =>    'textarea',
                    'label'    =>    'Keterangan',
                )
                // ,array(
                // 	'field'	=> 	'desc',
                // 	'type'	=>	'textarea',
                // 	'label'	=>	'Keterangan Lainnya',
                // )

            )
        );

        // print_r($this->admin);
        // if ($this->admin['id_role'] == 6) {
        // 	$this->formWizard['step']['fppbj']['form'][] = 
        // 		array(
        // 			'field'	=> 	'id_pic',
        // 			'type'	=>	'dropdown',
        // 			'label'	=>	'PIC Pengadaan',
        // 			'source'=>	array(0 => 'Pilih Dibawah Ini', 2 => 'Ayu', 3 => 'Pandu')
        // 		);
        // }

        $this->insertUrl     = site_url('fppbj/save/');
        $this->updateUrl     = 'pemaketan/update';
        $this->deleteUrl     = 'fppbj/delete/';
        $this->exportUrl     = 'fppbj/export/';
        $this->approveFPPBJ = 'fppbj/approve/';
        $this->rejectFPPBJ     = 'fppbj/reject/';
        $this->approveFKPBJ = 'fkpbj/approve/';
        $this->approveFP3     = 'fp3/approve/';
        // $this->getData = $this->pm->getData($this->formWizard);
        $this->form = $this->formWizard['step']['fppbj'];
    }

    public function index($year)
    {
        $this->breadcrumb->addlevel(1, array(
            'url' => site_url('pengadaan'),
            'title' => 'Daftar Pengadaan'
        ));

        $this->breadcrumb->addlevel(2, array(
            'url' => site_url('pemaketan/' . $year),
            'title' => 'Perencanaan Pengadaan ' . $year
        ));

        $data['year'] = $year;
        $data['is_perencanaan'] = $this->check_perencanaan_umum(date('Y'));

        $this->header = 'Perencanaan Pengadaan';
        $this->content = $this->load->view('pemaketan/index', $data, TRUE);
        $this->script = $this->load->view('pemaketan/index_js', $data, TRUE);
        parent::index();
    }

    public function getData($year)
    {
        $config['query'] = $this->pm->getData($year);
        $return = $this->tablegenerator->initialize($config);
        echo json_encode($return);
    }

    public function division($id = "", $id_fppbj = "", $year = "")
    {
        $division = $this->mm->getDiv_($id);
        $admin = $this->session->userdata('admin');
        if ($admin['id_division'] == 1 || ($admin['id_division'] == 5 && $admin['id_role'] == 5)) {
            $this->breadcrumb->addlevel(1, array(
                'url' => site_url('pengadaan'),
                'title' => 'Daftar Pengadaan'
            ));
            $this->breadcrumb->addlevel(2, array(
                'url' => site_url('pemaketan/index/' . $year),
                'title' => 'Perencanaan Pengadaan ' . $year
            ));
        }
        $this->breadcrumb->addlevel(3, array(
            'url' => site_url('division'),
            'title' => $division['name']
        ));
        $data['id_division']    = $id;
        $data['id_fppbj']        = $id_fppbj;
        $data['id_divisi']        = $admin['id_division'];
        $data['step']             = $this->pm->get_data_step($id);
        $data['is_approved']     = $data['step']['is_approved'];
        $data['is_perencanaan'] = $this->check_perencanaan_umum(date('Y'));
        $data['year']             = $year;
        $this->header = 'Perencanaan Pengadaan - ' . $division['name'];
        $this->content = $this->load->view('pemaketan/division/list', $data, TRUE);
        $this->script = $this->load->view('pemaketan/division/list_js', $data, TRUE);
        parent::index();
    }

    function true()
    {
        echo json_encode(array('status' => 'success'));
        // return true;
    }

    public function simpan()
    {
        $__validation = $this->formWizard['step'][$_POST['validation']]['form'];
        if ($_POST['validation'] == 'data') {
            $submitted = array();

            $__val = array();
            foreach ($submitted as $key => $value) {
                $__val[$key] = $__validation[$value];
            }
            print_r($__validation);

            $this->form_validation->set_rules($__val);
            $this->validation($__val);
        } else {

            $this->form_validation->set_rules($this->formWizard['step'][$_POST['validation']]['form']);
            $this->validation($__validation);
        }
    }

    function insertFPPBJ()
    {
        $data = $this->input->post();
        $_page = $_POST['validation'];
        // print_r($_POST);die;

        $analisa_resiko['apa']                 = $data['apa'];
        unset($data['apa']);
        $analisa_resiko['manusia']         = $data['manusia'];
        unset($data['manusia']);
        $analisa_resiko['asset']         = $data['asset'];
        unset($data['asset']);
        $analisa_resiko['lingkungan']     = $data['lingkungan'];
        unset($data['lingkungan']);
        $analisa_resiko['hukum']         = $data['hukum'];
        unset($data['hukum']);

        // DATA ANALISA SWAKELOLA
        $analisa_swakelola['waktu']     = $data['waktu'];
        unset($data['waktu']);
        $analisa_swakelola['biaya']     = $data['biaya'];
        unset($data['biaya']);
        $analisa_swakelola['tenaga']     = $data['tenaga'];
        unset($data['tenaga']);
        $analisa_swakelola['bahan']     = $data['bahan'];
        unset($data['bahan']);
        $analisa_swakelola['peralatan'] = $data['peralatan'];
        unset($data['peralatan']);

        if ($data['jwp_start'] != '' && $data['jwp_end'] != '') {
            $data['jwp_start']     = $data['jwp_start'];
            $data['jwp_end']     = $data['jwp_end'];
        } else {
            $data['jwp_start']     = null;
            $data['jwp_end']     = null;
        }
        $data['tipe_pengadaan']     = $data['pengadaan'];
        $data['id_division']    = $this->session->userdata('admin')['id_division'];
        $data['idr_anggaran']     = str_replace(',', '', $data['idr_anggaran']);
        $data['usd_anggaran']     = str_replace(',', '', $data['usd_anggaran']);
        unset($data['validation']);
        unset($data['izin_file']);
        unset($data['type']);
        unset($data['pengadaan']);
        $data['sistem_kontrak']    = json_encode($data['sistem_kontrak']);
        $usulan = $this->input->post('type_usulan');
        unset($data['type_usulan']);
        // print_r($analisa_swakelola);die;
        // Halaman Intro Pertama
        if ($_page == "intro") {
            echo json_encode(array('status' => 'success'));

            // Halaman FPPBJ
        } else if ($_page == "fppbj") {

            $_validation = $this->formWizard['step'][$_page]['fppbj'];
            $this->form_validation->set_rules($_validation);
            /*$this->form_validation->set_message('jwpp_start', 'Ini Harus Diisi');
            $this->form_validation->set_message('jwpp_end', 'Ini Harus Diisi');*/
			if ($data['jwpp_start']) {
				if (!$this->check_avail_date($data['jwpp_start'], $data['metode_pengadaan'])) {
					$form = [
						'jwpp_start' => 'Tanggal tidak sesuai'
					];
					echo json_encode(array('status' => 'error', 'form' => $form));
					die;
				}
			}
			if ($data['jwpp_end']) {
				if (!$this->check_end_date($data['jwpp_start'], $data['jwpp_end'])) {
					$form = [
						'jwpp_start' => 'Tanggal akhir tidak boleh kurang dari tanggal mulai'
					];
					echo json_encode(array('status' => 'error', 'form' => $form));
					die;
				}
			}
            if ($this->validation($_validation)) {
                $admin = $this->session->userdata('admin');

                $data['is_planning']    =  $this->check_perencanaan_umum($data['year_anggaran'][0]);
                $data['is_perencanaan'] = ($data['is_perencanaan'] == '') ? '2' : $data['is_perencanaan'];
                $data['id_pic']            = ($admin['id_role'] == 6) ? $admin['id_user'] : '';

                foreach ($data['idr_anggaran'] as $key => $value) {
                    // $tr_price[$key]['id_fppbj']		  = $input;
                    $tr_price[$key]['idr_anggaran'] = $value;
                    $tr_price[$key]['usd_anggaran'] = $data['usd_anggaran'][$key];
                    $tr_price[$key]['year_anggaran'] = $data['year_anggaran'][$key];
                }

                unset($data['idr_anggaran']);
                unset($data['usd_anggaran']);
                unset($data['year_anggaran']);

                $year_anggaran = '';
                foreach ($tr_price as $key => $value) {
                    $data['idr_anggaran'] += $tr_price[$key]['idr_anggaran'];
                    $data['usd_anggaran'] += $tr_price[$key]['usd_anggaran'];
                    $year_anggaran .= $value['year_anggaran'] . ",";
                    // $data['year_anggaran'] += $tr_price[$key]['year_anggaran'];
                }

                $year_anggaran = substr($year_anggaran, substr($year_anggaran), -1);
                $data['year_anggaran'] = $year_anggaran;
                // INSERT FPPBJ
				if ($admin['id_role'] == 3) {
					$data['is_approved'] = 2;
				}
                $input = $this->db->insert('ms_fppbj', $data);
                $this->deleteTemp($data);
                $input = $this->db->insert_id();

                $this->insertHistoryPengadaan($input, 'penambahan', $data);

                $this->fm->insert_tr_email_blast($this->db->insert_id(), $data['jwpp_start'], $data['metode_pengadaan']);

                foreach ($tr_price as $key => $value) {
                    $tr_price[$key]['id_fppbj']          = $input;
                }


                $data['id_fppbj'] = $input;

                // INSERT DETAIL BUDGET FPPBJ
                $input = $this->db->insert_batch('tr_price', $tr_price);
                $input = $this->db->insert_id();

                $this->session->set_userdata('fppbj', $data);
                // print_r($this->session->userdata('fppbj'));
                if ($input) {
                    $by_division = $this->get_division($this->session->userdata('admin')['id_division']);
                    $division = $this->get_email_division($this->session->userdata('admin')['id_division']);

                    $to_ = '';
                    foreach ($division as $key => $value) {
                        $to_ .= $value['email'] . ' ,';
                    }
                    $to = substr($to_, substr($to_), -2);
                    $subject = 'FPPBJ baru telah dibuat.';
                    $message = $data['nama_pengadaan'] . ' telah di buat oleh ' . $by_division['name'];
                    // $this->send_mail($to, $subject, $message, $link);

                    $activity = $this->session->userdata('admin')['name'] . " membuat FPPBJ dengan nama pengadaan : " . $data['nama_pengadaan'];

                    $this->activity_log($this->session->userdata('admin')['id_user'], $activity);

                    $data_note = array(
                        'id_user' => $this->session->userdata('admin')['id_division'],
                        'id_fppbj' => $data['id_fppbj'],
                        'value' => 'FPPBJ dengan nama pengadaan ' . $data['nama_pengadaan'] . ' telah di buat oleh ' . $by_division['name'],
                        'entry_stamp' => date('Y-m-d H:i:s'),
                        'is_active' => 1
                    );
                    $this->db->insert('tr_note', $data_note);
                    // $this->deleteTemp($this->input->post());
                    // echo json_encode(array('status' => 'success'));
                }
            }

            // Halaman Analisa Resiko
        } else if ($_page == "resiko") {
            for ($q = 0; $q < 10; $q++) {
                $analisa_resiko['detail'][$q]['apa']            = $analisa_resiko['apa'][$q];
                $analisa_resiko['detail'][$q]['manusia']        = $analisa_resiko['manusia'][$q];
                $analisa_resiko['detail'][$q]['asset']             = $analisa_resiko['asset'][$q];
                $analisa_resiko['detail'][$q]['lingkungan']     = $analisa_resiko['lingkungan'][$q];
                $analisa_resiko['detail'][$q]['hukum']             = $analisa_resiko['hukum'][$q];
            }
            // print_r($analisa_resiko['detail']); print_r($this->session->userdata());die;
            $analisa_resiko['id_fppbj'] = $this->session->userdata('fppbj')['id_fppbj'];
            $this->session->set_userdata('analisa_resiko', array('id' => $input, 'skor' => $analisa_resiko));
            // print_r($analisa_resiko);die;
            if ($input) {
                echo json_encode(array('status' => 'success'));
            }

            // Halaman DPT 
        } else if ($_page == "dpt") {
            $analisa_risiko         = $this->session->userdata('analisa_resiko');
            $dpt_list['dpt']         = $this->input->post('type');
            $dpt_list['usulan']        = $usulan;

            $this->db->where('id_pengadaan', $this->session->userdata('fppbj')['id_fppbj'])->update('tr_history_pengadaan', array('dpt_list' => json_encode($dpt_list)));

            // print_r($analisa_risiko['skor']);
            $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $this->session->userdata('fppbj')['id_fppbj'], 'dpt_list' => json_encode($dpt_list)));
            $input = $this->db->insert_id();

            foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                # code...
                // print_r( $analisa_risiko['skor']['detail'][$key]);die;
                $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
            }

            foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                # code...
                // print_r( $analisa_risiko['skor']['detail'][$key]);die;
                $analisa_risiko['skor']['detail'][$key]['id_pengadaan'] = $this->session->userdata('fppbj')['id_fppbj'];
                $this->db->insert('tr_history_analisa_resiko', $analisa_risiko['skor']['detail'][$key]);
            }
            // $this->db->set($analisa_risiko['detail']);
            // $this->db->insert_batch($this->db->dbprefix . 'tr_analisa_risiko_detail');
            if ($input) {
                echo json_encode(array('status' => 'success'));
            }

            // Halaman Analisa Swakelola
        } else if ($_page == "swakelola") {
            // print_r($analisa_swakelola);die;
            $analisa_swakelola['id_fppbj'] = $this->session->userdata('fppbj')['id_fppbj'];
            // print_r($analisa_swakelola['id_fppbj']);die;

            $input         = $this->db->insert('tr_analisa_swakelola', $analisa_swakelola);
            $input         = $this->db->insert_id();
            // $this->session->set_userdata('analisa_swakelola', array('id' => $input, 'skor' => $analisa_swakelola));
            unset($analisa_swakelola['id_fppbj']);
            $analisa_swakelola['id_pengadaan'] = $this->session->userdata('fppbj')['id_fppbj'];
            $this->db->insert('tr_history_swakelola', $analisa_swakelola);

            if ($input) {
                echo json_encode(array('status' => 'success'));
            }
        } else {
            // print_r($_page);
            echo json_encode(array('status' => 'error'));
        }

        // return true;
    }

    public function getDataDivision($id_division = null, $id_fppbj = null, $year = null)
    {
        $config['query'] = $this->getDataDivision = $this->pm->getDataDivision($this->form, $id_division, $id_fppbj, $year);
        $return = $this->tablegenerator->initialize($config);
        echo json_encode($return);
    }

    public function getSingleData($id)
    {
        $this->form = array(
            'form' => array(
                array(
                    'field'    =>     'no_pr',
                    'type'    =>    'text',
                    'label'    =>    'No. PR',
                ), array(
                    'field'    =>     'tipe_pr',
                    'type'    =>    'text',
                    'label'    =>    'Tipe PR'
                ),
                array(
                    'field'    =>     'nama_pengadaan',
                    'type'    =>    'text',
                    'label'    =>    'Nama Pengadaan',
                    'rules' =>     'required',
                ), array(
                    'field'    =>     'tipe_pengadaan',
                    'type'    =>    'text',
                    'label'    =>    'Jenis Pengadaan'
                ), array(
                    'field'    =>     'jenis_pengadaan',
                    'type'    =>    'text',
                    'label'    =>    'Jenis Detail Pengadaan',
                    'rules'    =>    'required'
                ), array(
                    'field'    =>     'metode_pengadaan',
                    'type'    =>    'text',
                    'label'    =>    'Metode Pengadaan',
                    'rules'    =>     'required'
                ), array(
                    'field'    =>     'idr_anggaran',
                    'type'    =>    'currency',
                    'label'    =>    'Anggaran (IDR)',
                ), array(
                    'field'    =>     'usd_anggaran',
                    'type'    =>    'currency',
                    'label'    =>    'Anggaran (USD)',
                ), array(
                    'field'    =>     'year_anggaran',
                    'type'    =>    'number',
                    'label'    =>    'Tahun Anggaran',
                    'rules' =>     'required'
                ), array(
                    'field'    =>     'kak_lampiran',
                    'type'    =>    'file',
                    'label'    =>    'KAK / Spesifikasi Teknis',
                    'upload_path' => base_url('assets/lampiran/fppbj/'),
                    'upload_url' => site_url('fkpbj/upload_lampiran'),
                    'allowed_types' => '*',
                    'rules' => '',
                    'value' => ''
                ), array(
                    'field'    =>     'hps',
                    'type'    =>    'text',
                    'label'    =>    'Ketersediaan HPS'
                ), array(
                    'field'    =>     'desc_dokumen',
                    'type'    =>    'textarea',
                    'label'    =>    'Keterangan',
                ), array(
                    'field'    =>     'penggolongan_penyedia',
                    'type'    =>    'text',
                    'label'    =>    'Penggolongan Penyedia Jasa (Usulan)'
                ),
                array(
                    'field'    =>     array('jwpp_start', 'jwpp_end'),
                    'type'    =>    'date_range',
                    'label'    =>    'Masa Penyelesaian Pekerjaan'
                ), array(
                    'field'    =>     array('jwp_start', 'jwp_end'),
                    'type'    =>    'date_range',
                    'label'    =>    'Masa Pemeliharaan',
                    'required' => 'required|mustBiggerThan'
                ), array(
                    'field'    =>     'desc_metode_pembayaran',
                    'type'    =>    'textarea',
                    'label'    =>    'Metode Pembayaran (Usulan)',
                ), array(
                    'field'    =>     'jenis_kontrak',
                    'type'    =>    'text',
                    'label'    =>    'Jenis Kontrak (Usulan)'
                ), array(
                    'field'    =>     'sistem_kontrak',
                    'type'    =>    'text',
                    'label'    =>    'Sistem Kontrak (Usulan)'
                ),
                array(
                    'field' => 'id',
                    'type' => 'hidden'
                )
            )
        );
        $admin = $this->session->userdata('admin');
        $param_  = ($admin['id_role'] == 4) ? ($param_ = 1) : (($admin['id_role'] == 6) ? ($param_ = 2) : (($admin['id_role'] == 3) ? ($param_ = 3) : (($admin['id_role'] == 2) ? ($param_ = 4) : '')));

        $this->form['url']         = site_url($this->approveFPPBJ . $id . '/' . $param_);
        site_url($this->rejectFPPBJ . $id . '/' . $param_);
        $this->form['reject']     = site_url('fppbj/btnCallback/' . $id . '/' . $param_);
        $this->form['button']     = array();
        $dataFPPBJ = $this->pm->get_status($id);

        if ($admin['id_role'] == 2 || $admin['id_role'] == 3 || $admin['id_role'] == 4) {
            if ($admin['id_role'] == 2) {
                $btn_setuju = array(
                    array(
                        'type'     => 'submit',
                        'label' => '<i style="line-height:25px;" class="fas fa-thumbs-up"></i>&nbsp;Setujui Data'
                    )
                );
            } else if ($admin['id_role'] == 3 || $admin['id_role'] == 4) {
                $btn_setuju = array(
                    array(
                        'type'     => 'export',
                        'link'    => $this->form['url'],
                        'label' => '<i style="line-height:25px;" class="fas fa-thumbs-up"></i>&nbsp;Setujui Data'
                    )
                );
            }
            $btn_reject = array(
                array(
                    'type'     => 'reject',
                    'label' => '<i style="line-height:25px;" class="fas fa-thumbs-down reject-btn"></i>&nbsp;Tolak Data'
                )
            );
            $btn_cancel = array(
                array(
                    'type' => 'cancel',
                    'label' => 'Tutup'
                )
            );
            if ($dataFPPBJ['is_approved'] == 0 && $admin['id_role'] == 4) {
                $this->form['button'] = array_merge($btn_setuju, $btn_reject, $btn_cancel);
            } else if ($dataFPPBJ['is_approved'] == 1 && $admin['id_role'] == 3) {
                $this->form['button'] = array_merge($btn_setuju, $btn_reject, $btn_cancel);
            } else if ($dataFPPBJ['is_approved'] == 3 && $admin['id_role'] == 2) {
                $this->form['button'] = array_merge($btn_setuju, $btn_reject, $btn_cancel);
            } else if ($dataFPPBJ['is_status'] == 0 && $dataFPPBJ['is_approved'] == 2 && $admin['id_role'] == 2) {
                $this->form['button'] = array_merge($btn_setuju, $btn_reject, $btn_cancel);
            } else if ($dataFPPBJ['is_status'] == 2 && $dataFPPBJ['is_approved'] == 2 && $admin['id_role'] == 3) {
                $this->form['button'] = array_merge($btn_setuju, $btn_reject, $btn_cancel);
            } else {
                $this->form['button'] = $btn_cancel;
            }
        } else {
            $push = array(
                array(
                    'type' => 'cancel',
                    'label' => 'Tutup'
                )
            );
            $this->form['button'] = $push;
        }

        parent::getSingleData($id);
    }

    public function get_step($id)
    {
        $tabel     = '';
        $admin    = $this->session->userdata('admin');
        $data     = $this->pm->get_data_step($id);
        $dataFP3 = $this->pm->get_data_fp3($id);
        $jwpp     = $data['jwpp_start'];
        $jwpp_fp3     = $dataFP3['jwpp_start'];
        $jwp      = $data['jwp_start'];

        if ($jwpp != '' && $data['jwpp_end'] != '' || $jwpp != null && $data['jwpp_end'] != null) {
            $jwpp    = date('d M Y', strtotime($jwpp)) . " sampai " . date('d M Y', strtotime($data['jwpp_end']));
        } else {
            $jwpp = '-';
        }

        if ($data['jwpp_start'] != 0000 - 00 - 00 || $data['jwpp_end'] != 0000 - 00 - 00) {
            $jwpp = date('d M Y', strtotime($data['jwpp_start'])) . " sampai " . date('d M Y', strtotime($data['jwpp_end']));
        } else {
            $jwpp = '-';
        }

        if ($jwpp_fp3 != '' && $dataFP3['jwpp_end'] != '' || $jwpp_fp3 != null && $dataFP3['jwpp_end'] != null) {
            $jwpp_fp3    = date('d M Y', strtotime($jwpp_fp3)) . " sampai " . date('d M Y', strtotime($dataFP3['jwpp_end']));
        } else {
            $jwpp_fp3 = '-';
        }

        if ($dataFP3['jwpp_start'] != 0000 - 00 - 00 || $dataFP3['jwpp_end'] != 0000 - 00 - 00) {
            $jwpp_fp3 = date('d M Y', strtotime($dataFP3['jwpp_start'])) . " sampai " . date('d M Y', strtotime($dataFP3['jwpp_end']));
        } else {
            $jwpp_fp3 = '-';
        }

        if ($data['jwp_start'] != null || $data['jwp_end'] != null) {
            $jwp_ = date('d M Y', strtotime($jwp)) . " sampai " . date('d M Y', strtotime($data['jwp_end']));
        } else {
            $jwp_ = '-';
        }
        if ($data['jwp_start'] != 0000 - 00 - 00 || $data['jwp_end'] != 0000 - 00 - 00) {
            $jwp_ = date('d M Y', strtotime($jwp)) . " sampai " . date('d M Y', strtotime($data['jwp_end']));
        } else {
            $jwp_ = '-';
        }

        if ($data['jenis_kontrak'] == 'po') {
            $jenis_kontrak = 'Purchase Order(PO)';
        } elseif ($data['jenis_kontrak'] == 'GTC03') {
            $jenis_kontrak = 'GTC03 (Kontrak jasa lainnya)';
        } elseif ($data['jenis_kontrak'] == 'GTC01') {
            $jenis_kontrak = 'GTC01 - Kontrak Jasa Konstruksi non EPC';
        } elseif ($data['jenis_kontrak'] == 'GTC02') {
            $jenis_kontrak = 'GTC02 - Kontrak Jasa Konsultan';
        } elseif ($data['jenis_kontrak'] == 'GTC04') {
            $jenis_kontrak = 'GTC04 - Kontrak Jasa Pemeliharaan';
        } elseif ($data['jenis_kontrak'] == 'GTC05') {
            $jenis_kontrak = 'GTC05 - Kontrak Jasa Pembuatan Software';
        } elseif ($data['jenis_kontrak'] == 'GTC06') {
            $jenis_kontrak = 'GTC06 - Kontrak Jasa Sewa Fasilitas dan Alat';
        } elseif ($data['jenis_kontrak'] == 'GTC07') {
            $jenis_kontrak = 'GTC07 - Kontrak Jasa Tenaga Kerja.';
        } elseif ($data['jenis_kontrak'] == 'spk') {
            $jenis_kontrak = 'Perjanjian sederhana/SPK.';
        } else {
            $jenis_kontrak = '-';
        }

        $analisa_resiko = $this->pm->get_data_analisa($id);
        //  print_r($data);
        $table_analisa = '';
        $total_category = '';
        $total = '';
        $no = 1;
        $getCat = array();
        foreach ($analisa_resiko as $key => $value) {
            // Generate Question
            if ($key == 0) {
                $question = "Jenis Pekerjaan";
            } elseif ($key == 1) {
                $question = "Lokasi Kerja";
            } elseif ($key == 2) {
                $question = "Materi Peralatan yang digunakan";
            } elseif ($key == 3) {
                $question = "Potensi paparan terhadap bahaya tempat kerja";
            } elseif ($key == 4) {
                $question = "Potensi paparan terhadap bahaya bagi personil";
            } elseif ($key == 5) {
                $question = "Pekerjaan secara bersamaan oleh kontraktor berbeda";
            } elseif ($key == 6) {
                $question = "Jangka Waktu Pekerjaan";
            } elseif ($key == 7) {
                $question = "Konsekuensi pekerjaan potensian";
            } elseif ($key == 8) {
                $question = "Pengalaman Kontraktor";
            } elseif ($key == 9) {
                $question = "Paparan terhadap publisitas negatif";
            }

            $manusia     = $this->setCategory($value['manusia']);
            $asset         = $this->setCategory($value['asset']);
            $lingkungan = $this->setCategory($value['lingkungan']);
            $hukum         = $this->setCategory($value['hukum']);

            //SET CATEGORY PER QUESTION 
            if ($manusia == "extreme" || $asset == "extreme" || $lingkungan == "extreme" || $hukum == "extreme") {
                $category = '<span id="catatan" class="catatan red">E</span>';
            } else if ($manusia == "high" || $asset == "high" || $lingkungan == "high" || $hukum == "high") {
                $category = '<span id="catatan" class="catatan red">H</span>';
            } else  if ($manusia == "medium" || $asset == "medium" || $lingkungan == "medium" || $hukum == "medium") {
                $category = '<span id="catatan" class="catatan yellow">M</span>';
            } else if ($manusia == "low" || $asset == "low" || $lingkungan == "low" || $hukum == "low") {
                $category = '<span id="catatan" class="catatan green">L</span>';
            } else {
                $category = '<span id="catatan" class="catatan">?</span>';
            }

            array_push($getCat, $category);

            $table_analisa .= '<style>
									.tooltip {
									  position: relative;
									  display: inline-block;
									  border-bottom: 1px dotted black;
									}

									.tooltip .tooltiptext {
									  visibility: hidden;
									  width: 120px;
									  background-color: black;
									  color: #fff;
									  text-align: center;
									  border-radius: 6px;
									  padding: 5px 0;

									  /* Position the tooltip */
									  position: absolute;
									  z-index: 1;
									}

									.tooltip:hover .tooltiptext {
									  visibility: visible;
									}
									</style><tr class="q' . $no . '">
										<td>' . $no . '</td>
										<td>' . $question . '</td>
										<td>
											<div class="tooltip">
												<input type="text" placeholder="isi" class="input" value="' . $value['apa'] . '" readonly>
												<span class="tooltiptext">' . $value['apa'] . '</span>
											</div>
										</td>
										<td><input name="manusia" type="text" placeholder="0" value="' . $value['manusia'] . '" class="input nm-tg" readonly></td>
										<td><input name="asset" type="text" placeholder="0" value="' . $value['asset'] . '" class="input nm-tg" readonly></td>
										<td><input name="lingkungan" type="text" placeholder="0" value="' . $value['lingkungan'] . '" class="input nm-tg" readonly></td>
										<td><input name="hukum" type="text" placeholder="0" value="' . $value['hukum'] . '" class="input nm-tg" readonly></td>
										<td>' . $category . '</td>
								</tr>';
            $no++;
        }

        if (in_array('<span id="catatan" class="catatan red">E</span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan red">E</span>';
        } else if (in_array('<span id="catatan" class="catatan red">H</span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan red">H</span>';
        } else if (in_array('<span id="catatan" class="catatan yellow">M</span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan yellow">M</span>';
        } else if (in_array('<span id="catatan" class="catatan green">L</span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan green">L</span>';
        } else {
            $total = '-';
        }

        $total_category .= '<tr>
								<td colspan="7" style="text-align:right">Hasil Penilaian Keseluruhan :</td><td style="text-align:center!important">' . $total . '</td>
							</tr>';
        $get_dpt = $this->ex->get_analisa($id);
        $dpt = '<table border=1 class="dpt-view">
					<thead>
						<tr>
							<th>Nama DPT</th>
						</tr>
					</thead>
					<tbody>';
        $no = 1;
        if ($get_dpt['dpt_list'] != '') {
            foreach ($get_dpt['dpt_list'] as $key) {
                $dpt .= '<tr>
						<td>' . $no++ . '. ' . $key . '</td>
					</tr>';
            }
        } else {
            $dpt .= '<tr>
						<td> - </td>
					</tr>';
        }
        $dpt .= '</tbody>
					</table>';
        if ($get_dpt['usulan'] != '') {
            $dpt .= '<table border=1 class="dpt-view">
						<thead>
							<tr>
								<th>Non DPT</th>
							</tr>
						</thead>
						<tbody><tr>
							<td>' . $get_dpt['usulan'] . '</td>
						</tr></tbody>
					</table>';
        } else {
            $dpt .= '<table border=1 class="dpt-view">
						<thead>
							<tr>
								<th>Non DPT</th>
							</tr>
						</thead>
						<tbody><tr>
							<td> - </td>
						</tr></tbody>
					</table>';
        }
        $table = 'ms_fppbj';
        $get_sitem_kontrak = $this->ex->get_sistem_kontrak($id, $table);
        // echo "string";print_r(json_decode($data['sistem_kontrak']));die;
        $s_k = '';
        if (!empty(json_decode($data['sistem_kontrak']))) {
            foreach (json_decode($data['sistem_kontrak']) as $key) {
                $key = str_replace("_", " ", $key);
                $s_k .= ucfirst($key) . ", ";
            }
        }
        $sistem_kontrak = substr($s_k, substr($s_k), -2);
        // echo $table_analisa;
        $button = '';
        // print_r($data);
        if ($admin['id_role'] == 6 || $admin['id_role'] == 3 || $admin['id_role'] == 4 || $admin['id_role'] == 2 || $admin['id_role'] == 7 || $admin['id_role'] == 8 || $admin['id_role'] == 9) {
			$btn_setuju = '<button class="button is-primary" type="submit" name="approve"><span class="icon"><i class="far fa-thumbs-up"></i></span> Setujui Data</button>';
			$btn_reject = '<a href="#" class="button is-danger reject-btn-step"><span class="icon"><i class="fas fa-times"></i></span> Tolak Data</a>';
			$btn_cancel = '<button type="button" class="close">Close</button>';
			$btn_app_risiko = '<a class="button is-danger"Setujui Analisa Risiko</a>';

			if ($data['is_status'] == 0) {
				if ($data['is_approved'] == 0 && $admin['id_role'] == 4) {
					$param = 1;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == '1' && (($data['tipe_pengadaan'] == 'barang' && ($data['is_approved_hse'] == '0' || $data['is_approved_hse'] == '1')) || ($data['tipe_pengadaan'] == 'jasa' && $data['is_approved_hse'] == '1')) && $admin['id_role'] == '3') {
					// echo "if 3";
					$param = 2;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 2 && $admin['id_role'] == 2) {
					$param = 3;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_status'] == 2 && $data['is_approved'] == 2 && $admin['id_role'] == 3) {
					$param = 3;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 1 && (($admin['id_role'] == 4 && $admin['id_division'] == 5) || ($admin['id_role'] == 5 && $admin['id_division'] == 5)) && $data['is_approved_hse'] == 0) {
					$param = 1;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				}
				// else if($data['is_approved'] == 3 && $admin['id_role'] == 2){
				// 	$param = 4;
				// 	$button = $btn_setuju.$btn_reject.$btn_cancel;
				// }
				else if ($data['is_approved'] == 3 && $admin['id_role'] == 4 && $admin['id_division'] == 5 && $data['idr_anggaran'] <= 100000000) {
					$param = 4;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 3 && $admin['id_role'] == 7 && $data['idr_anggaran'] > 100000000 && $data['idr_anggaran'] <= 1000000000) {
					$param = 4;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 3 && $admin['id_role'] == 8 && $data['idr_anggaran'] > 1000000000 && $data['idr_anggaran'] <= 10000000000) {
					$param = 4;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 3 && $admin['id_role'] == 9 && $data['idr_anggaran'] > 10000000000) {
					$param = 4;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} elseif ($data['is_approved'] == 0 && $data['id_division'] == 1 && $this->admin['id_division'] == 1 && $this->admin['id_role'] == 2) {
					$param = 3;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else {
					$button = $btn_cancel;
				}
			} else if ($data['is_status'] == 2) {
				if ($data['is_approved'] == 0) {
					if ($data['id_division'] == 1 && $data['is_approved'] == 0 && $admin['id_role'] == 2) {
						$param = 3;
						$button = $btn_setuju . $btn_reject . $btn_cancel;
						$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
					} else if ($admin['id_role'] == 4) {
						$param = 1;
						$button = $btn_setuju . $btn_reject . $btn_cancel;
						$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
					}
				} else if ($data['is_approved'] == 1 && $admin['id_role'] == 6) {
					$param = 2;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else if ($data['is_approved'] == 2 && $admin['id_role'] == 2) {
					$param = 3;
					$button = $btn_setuju . $btn_reject . $btn_cancel;
					$tgl_approval = '<fieldset class="form-group read_only form12" for=""><label for="">Tanggal Approval</label><b>:</b><span><input type="date" name="tgl_approval" value="' . date('Y-m-d') . '"></span>
							</fieldset>';
				} else {
					$button = $btn_cancel;
				}
			}
		}
        if ($data['hps'] != 1) {
            $status_hps = 'Tidak Ada';
        } else {
            $status_hps = 'Ada';
        }

        if ($data['metode_pengadaan'] == 1) {
            $status_metode = 'Pelelangan';
        } else if ($data['metode_pengadaan'] == 2) {
            $status_metode = 'Pemilihan Langsung';
        } else if ($data['metode_pengadaan'] == 3) {
            $status_metode = 'Swakelola';
        } else if ($data['metode_pengadaan'] == 4) {
            $status_metode = 'Penunjukan Langsung';
        } else if ($data['metode_pengadaan'] == 5) {
            $status_metode = 'Pengadaan Langsung';
        } else {
            $status_metode = '-';
        }

        if ($dataFP3['metode_pengadaan'] == 1) {
            $status_metode_fp3 = 'Pelelangan';
        } else if ($dataFP3['metode_pengadaan'] == 2) {
            $status_metode_fp3 = 'Pemilihan Langsung';
        } else if ($dataFP3['metode_pengadaan'] == 3) {
            $status_metode_fp3 = 'Swakelola';
        } else if ($dataFP3['metode_pengadaan'] == 4) {
            $status_metode_fp3 = 'Penunjukan Langsung';
        } else if ($dataFP3['metode_pengadaan'] == 5) {
            $status_metode_fp3 = 'Pengadaan Langsung';
        } else {
            $status_metode_fp3 = '-';
        }

        $jdp = $data['jenis_pengadaan'];
        if ($jdp == 'stock') {
            $vdp = 'Stock';
        } else if ($jdp == 'non_stock') {
            $vdp = 'Non Stock';
        } else if ($jdp == 'jasa_konstruksi') {
            $vdp = 'Jasa Konstruksi';
        } else if ($jdp == 'jasa_konsultasi') {
            $vdp = 'Jasa Konsultasi';
        } else if ($jdp == 'jasa_lainnya') {
            $vdp = 'Jasa Lainnya';
        } else {
            $vdp = ' - ';
        }

        if ($data['penggolongan_penyedia'] == 'perseorangan') {
            $golongan = 'Perseorangan';
        } else if ($data['penggolongan_penyedia'] == 'usaha_kecil') {
            $golongan = 'Usaha Kecil (K)';
        } else if ($data['penggolongan_penyedia'] == 'usaha_menengah') {
            $golongan = 'Usaha Menengah (M)';
        } else if ($data['penggolongan_penyedia'] == 'usaha_besar') {
            $golongan = 'Usaha Besar (B)';
        } else {
            $golongan = '-';
        }

        $swakelola = $this->pm->get_swakelola($id);

        if ($swakelola['waktu'] == 1) {
            $waktu_swakelola = 'Penyelesaian Pekerjaan ≤ 3 Bulan';
        } else if ($swakelola['waktu'] == 2) {
            $waktu_swakelola = 'Penyelesaian Pekerjaan > 3 Bulan s.d < 6 Bulan';
        } else {
            $waktu_swakelola = 'Penyelesaian pekerjaan ≥ 6 Bulan';
        }

        if ($swakelola['biaya'] == 1) {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan ≤ 50 juta';
        } else if ($swakelola['biaya'] == 2) {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan > 50 Bulan s.d < 100 juta';
        } else {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan ≥ 100 juta';
        }

        if ($swakelola['tenaga'] == 1) {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi sebagai perencana dan pelaksana dan pengawas';
        } else if ($swakelola['tenaga'] == 2) {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi salah satu atau lebih sebagai perencana dan/atau pelaksana dan/atau pengawas';
        } else {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan tidak memenuhi sebagai perencana dan pelaksana dan pengawas';
        }

        if ($swakelola['bahan'] == 1) {
            $bahan_swakelola = 'Bahan mudah didapatkan langsung oleh Pekerja NR';
        } else if ($swakelola['bahan'] == 2) {
            $bahan_swakelola = 'Bahan dapat diadakan melalui pihak ketiga';
        } else {
            $bahan_swakelola = 'Bahan lebih efisien apabila diadakan oleh pihak ketiga';
        }

        if ($swakelola['peralatan'] == 1) {
            $peralatan_swakelola = 'Ketersediaan jumlah dan kemampuan peralatan kerja memenuhi kebutuhan pekerjaan';
        } else if ($swakelola['peralatan'] == 2) {
            $peralatan_swakelola = 'Ketersediaan jumlah dan/atau kemampuan peralatan kerja tidak memenuhi kebutuhan pekerjaan';
        } else {
            $peralatan_swakelola = 'Peralatan lebih efisien apabila diadakan oleh pihak ketiga';
        }

        if ($data['tipe_pr'] == 'direct_charge') {
            $tipe_pr = 'Direct Charge';
        } elseif ($data['tipe_pr'] == 'services') {
            $tipe_pr = 'Services';
        } elseif ($data['tipe_pr'] == 'user_purchase') {
            $tipe_pr = 'User Purchase';
        } else {
            $tipe_pr = 'NDA';
        }

        if ($data['is_multiyear'] == 1) {
            $data_multi_years = $this->pm->get_multi_years($id);
            $no = 1;
            $is_multiyear_field .= '<fieldset class="form-group   form6" for="">
										<hr style="display: block; color:#3273dc; border-bottom: 1px #3273dc solid; margin: 20px 0;">
										<div class="multiple-budget">';

            foreach ($data_multi_years as $key => $value) {
                $is_multiyear_field .= '<div id="budget-1">
											<p style="color: #3273dc; font-weight: bold;">Detail Anggaran #' . $no++ . '</p>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Anggaran (IDR)</label>
													<b>:</b>
													<span>Rp ' . number_format($value['idr_anggaran'],2,'.',',') . '</span>
												</div>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Anggaran (USD)</label>
													<b>:</b>
													<span>$ ' . number_format($value['usd_anggaran'],2,'.',',') . '</span>
												</div>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Tahun Anggaran*</label>
													<b>:</b>
													<span>' . $value['year_anggaran'] . '</span>
												</div>
											</div>';
            }
            $is_multiyear_field .= '</div>
			<hr style="display: block; color:#3273dc; border-bottom: 1px #3273dc solid; margin: 20px 0;">
										</fieldset>';
        } else {
            $is_multiyear_field = '<fieldset class="form-group read_only form6 " for="' . $data['idr_anggaran'] . '"><label for="' . $data['idr_anggaran'] . '">Anggaran (IDR)</label><b>:</b><span>Rp.' . number_format($data['idr_anggaran'],2,'.',',') . '</span></fieldset>
							<fieldset class="form-group read_only form7 " for="' . $data['usd_anggaran'] . '"><label for="' . $data['usd_anggaran'] . '">Anggaran (USD)</label><b>:</b><span>' . number_format($data['usd_anggaran'],2,'.',',') . '</span></fieldset>
							<fieldset class="form-group read_only form8 " for="' . $data['year_anggaran'] . '"><label for="' . $data['year_anggaran'] . '">Tahun Anggaran</label><b>:</b><span>' . $data['year_anggaran'] . '</span></fieldset>';
        }

        $table_swakelola = '<div class="ps-wrapper" style="width: 100%;">
	 		<fieldset class="form-group read_only form0 " for="' . $swakelola['waktu'] . '"><label for="' . $swakelola['waktu'] . '">Waktu</label><b>:</b><span>' . $waktu_swakelola . '</span>
	 		</fieldset>
			<fieldset class="form-group read_only form1 " for="' . $swakelola['biaya'] . '"><label for="' . $swakelola['biaya'] . '">Biaya</label><b>:</b><span>' . $biaya_swakelola . '</span>
			</fieldset>
			<fieldset class="form-group read_only form2 " for="' . $swakelola['tenaga'] . '"><label for="' . $swakelola['tenaga'] . '">Tenaga Kerja</label><b>:</b><span>' . $tenaga_swakelola . '</span>
			</fieldset>
			<fieldset class="form-group read_only form3 " for="' . $swakelola['bahan'] . '"><label for="' . $swakelola['bahan'] . '">Bahan</label><b>:</b><span>' . $bahan_swakelola . '</span>
			</fieldset>
			<fieldset class="form-group read_only form4 " for="' . $swakelola['peralatan'] . '"><label for="' . $swakelola['peralatan'] . '">Peralatan</label><b>:</b><span>' . $peralatan_swakelola . '</span>
			</fieldset>
		</div>';

        $table_detail_data = '<fieldset class="form-group read_only form0 " for="' . $data['no_pr'] . '"><label for="' . $data['no_pr'] . '">No.PR</label><b>:</b><span>' . $data['no_pr'] . '</span></fieldset>
							<fieldset class="form-group read_only form1 " for="' . $data['tipe_pr'] . '"><label for="' . $data['tipe_pr'] . '">Tipe PR</label><b>:</b><span>' . $tipe_pr . '</span></fieldset>
							<fieldset class="form-group read_only form9 " for="' . $data['pr_lampiran'] . '"><label for="' . $data['pr_lampiran'] . '">Lampiran PR</label><b>:</b><span><a href="' . base_url('assets/lampiran/pr_lampiran/' . $data['pr_lampiran']) . '" target="blank">' . $data['pr_lampiran'] . '</a></span>
							</fieldset>
							<fieldset class="form-group read_only form2 " for="' . $data['nama_pengadaan'] . '"><label for="' . $data['nama_pengadaan'] . '">Nama Pengadaan</label><b>:</b><span>' . $data['nama_pengadaan'] . '</span></fieldset>
							<fieldset class="form-group read_only form3 " for="' . $data['tipe_pengadaan'] . '"><label for="' . $data['tipe_pengadaan'] . '">Tipe Pengadaan</label><b>:</b><span>' . $data['tipe_pengadaan'] . '</span></fieldset>
							<fieldset class="form-group read_only form4 " for="' . $data['jenis_pengadaan'] . '"><label for="' . $data['jenis_pengadaan'] . '">Jenis Detail Pengadaan</label><b>:</b><span>' . $vdp . '</span></fieldset>
							<fieldset class="form-group read_only form5 " for="' . $data['metode_pengadaan'] . '"><label for="' . $data['metode_pengadaan'] . '">Metode Pengadaan</label><b>:</b><span>' . $status_metode . '</span></fieldset>
							' . $is_multiyear_field . '
							<fieldset class="form-group read_only form9 " for="' . $data['kak_lampiran'] . '"><label for="' . $data['kak_lampiran'] . '">KAK / Spesifikasi Teknis</label><b>:</b><span><a href="' . base_url('assets/lampiran/kak_lampiran/' . $data['kak_lampiran']) . '" target="blank">' . $data['kak_lampiran'] . '</a></span>
							</fieldset>
							<fieldset class="form-group read_only form10 " for="' . $data['hps'] . '"><label for="' . $data['hps'] . '">Ketersediaan HPS</label><b>:</b><span>' . $status_hps . '</span></fieldset>
							<fieldset class="form-group read_only form11 " for="' . $data['lingkup_kerja'] . '"><label for="' . $data['lingkup_kerja'] . '">Lingkup Kerja</label><b>:</b><span>' . $data['lingkup_kerja'] . '</span></fieldset>
							<fieldset class="form-group read_only form12 " for="' . $data['penggolongan_penyedia'] . '"><label for="' . $data['penggolongan_penyedia'] . '">Penggolongan Penyedia Jasa (Usulan)</label><b>:</b><span>' . $golongan . '</span></fieldset>
							<fieldset class="form-group read_only form13 " for="' . $data['jwpp'] . '"><label for="' . $data['jwpp'] . '">Masa Penyelesaian Pekerjaan</label><b>:</b><span>' . $jwpp . '</span></fieldset>
							<fieldset class="form-group read_only form14 " for="' . $data['jwp'] . '"><label for="' . $data['jwp'] . '">Masa Pemeliharaan</label><b>:</b><span>' . $jwp_ . '</span></fieldset>
							<fieldset class="form-group read_only form15 " for="' . $data['desc_metode_pembayaran'] . '"><label for="' . $data['desc_metode_pembayaran'] . '">Metode Pembayaran (Usulan)</label><b>:</b><span>' . $data['desc_metode_pembayaran'] . '</span></fieldset>
							<fieldset class="form-group read_only form16 " for="' . $data['jenis_kontrak'] . '"><label for="' . $data['jenis_kontrak'] . '">Jenis Kontrak (Usulan)</label><b>:</b><span>' . $jenis_kontrak . '</span></fieldset>
							<fieldset class="form-group read_only form17 " for="' . $data['sistem_kontrak'] . '"><label for="' . $data['sistem_kontrak'] . '">Sistem Kontrak (Usulan)</label><b>:</b><span>' . $sistem_kontrak . '</span>
							</fieldset>
							<fieldset class="form-group read_only form11 " for="' . $data['desc_dokumen'] . '"><label for="' . $data['desc_dokumen'] . '">Keterangan</label><b>:</b><span>' . $data['desc_dokumen'] . '</span>
							</fieldset>
							' . $tgl_approval . '
							<fieldset class="form-group form11 " for="' . $data['id'] . '">
								<input type="hidden" name="keterangan" value="' . $data['id'] . '">
							</fieldset>
							<fieldset class="form-group form31 " for="' . $data['metode_pengadaan'] . '">
								<input type="hidden" name="keterangan" value="' . $data['metode_pengadaan'] . '">
							</fieldset>
							<div id="form-pic">
								
							</div>';

        $table_analisa_resiko = '<table class="penilaian_resiko preview">
						 			<thead class="sticky">
										<tr class="header">
							 				<th rowspan="2">No</th>
							 				<th rowspan="2">Daerah Risiko</th>
							 				<th rowspan="2">Apa</th>
							 				<th colspan="5" style="text-align: center;">Konsekuensi <br> L/M/H</th>
							 			</tr>
							 			<tr class="header bottom">
							 				<th>Manusia</th>
							 				<th>Aset</th>
							 				<th>Lingkungan</th>
							 				<th>Reputasi <br>& Hukum</th>
							 				<th>Catatan</th>
							 			</tr>
						 			</thead>
									' . $table_analisa . '
									' . $total_category . '
								</table>';

        $table_detail_data_fp3 = '	<fieldset class="form-group read_only form2 " for="' . $dataFP3['status'] . '">
										<label for="' . $dataFP3['status'] . '">FP3</label>
										<b>:</b>
										<span>' . ucfirst($dataFP3['status']) . '</span>
									</fieldset>
									<fieldset class="form-group read_only form2 " for="' . $data['nama_pengadaan'] . '">
										<label for="' . $data['nama_pengadaan'] . '">Nama Pengadaan (Lama)</label>
										<b>:</b>
										<span>' . $data['nama_pengadaan'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form2 " for="' . $dataFP3['nama_pengadaan'] . '">
										<label for="' . $dataFP3['nama_pengadaan'] . '">Nama Pengadaan (Baru)</label>
										<b>:</b>
										<span>' . $dataFP3['nama_pengadaan'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form0 " for="' . $data['no_pr'] . '">
										<label for="' . $data['no_pr'] . '">No.PR (Lama)</label>
										<b>:</b>
										<span>' . $data['no_pr'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form0 " for="' . $dataFP3['no_pr'] . '">
										<label for="' . $dataFP3['no_pr'] . '">No.PR (Baru)</label>
										<b>:</b>
										<span>' . $dataFP3['no_pr'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form5 " for="' . $data['metode_pengadaan'] . '">
										<label for="' . $data['metode_pengadaan'] . '">Metode Pengadaan (Lama)</label>
										<b>:</b>
										<span>' . $status_metode . '</span>
									</fieldset>
									<fieldset class="form-group read_only form5 " for="' . $dataFP3['metode_pengadaan'] . '">
										<label for="' . $dataFP3['metode_pengadaan'] . '">Metode Pengadaan (Baru)</label>
										<b>:</b>
										<span>' . $status_metode_fp3 . '</span>
									</fieldset>
									<fieldset class="form-group read_only form13 " for="' . $dataFP3['jwpp'] . '">
										<label for="' . $dataFP3['jwpp'] . '">Masa Penyelesaian Pekerjaan (Lama)</label>
										<b>:</b>
										<span>' . $jwpp . '</span>
									</fieldset>
									<fieldset class="form-group read_only form13 " for="' . $dataFP3['jwpp'] . '">
										<label for="' . $dataFP3['jwpp'] . '">Masa Penyelesaian Pekerjaan (Baru)</label>
										<b>:</b>
										<span>' . $jwpp_fp3 . '</span>
									</fieldset>
									<fieldset class="form-group read_only form11 " for="' . $data['desc_dokumen'] . '">
										<label for="' . $data['desc_dokumen'] . '">Keterangan (Lama)</label>
										<b>:</b>
										<span>' . $data['desc_dokumen'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form11 " for="' . $dataFP3['desc'] . '">
										<label for="' . $dataFP3['desc'] . '">Keterangan (Baru)</label>
										<b>:</b>
										<span>' . $dataFP3['desc'] . '</span>
									</fieldset>
									<fieldset class="form-group read_only form9 " for="' . $data['kak_lampiran'] . '">
										<label for="' . $data['kak_lampiran'] . '">KAK / Spesifikasi Teknis (Lama)</label>
										<b>:</b>
										<span><a href="' . base_url('assets/lampiran/kak_lampiran/' . $data['kak_lampiran']) . '" target="blank">' . $data['kak_lampiran'] . '</a></span>
									</fieldset>
									<fieldset class="form-group read_only form9 " for="' . $dataFP3['kak_lampiran'] . '">
										<label for="' . $dataFP3['kak_lampiran'] . '">KAK / Spesifikasi Teknis (Baru)</label>
										<b>:</b>
										<span><a href="' . base_url('assets/lampiran/kak_lampiran/' . $dataFP3['kak_lampiran']) . '" target="blank">' . $dataFP3['kak_lampiran'] . '</a></span>
									</fieldset>';
		
		$table_detail_data_fp3_hapus = '<fieldset class="form-group read_only form2 " for="' . $dataFP3['status'] . '">
											<label for="' . $dataFP3['status'] . '">FP3</label>
											<b>:</b>
											<span>' . ucfirst($dataFP3['status']) . '</span>
										</fieldset>
										<fieldset class="form-group read_only form2 " for="' . $data['nama_pengadaan'] . '">
											<label for="' . $data['nama_pengadaan'] . '">Nama Pengadaan</label>
											<b>:</b>
											<span>' . $data['nama_pengadaan'] . '</span>
										</fieldset>
										<fieldset class="form-group read_only form2 " for="' . $data['desc_batal'] . '">
											<label for="' . $data['desc_batal'] . '">Keterangan Batal</label>
											<b>:</b>
											<span>' . $data['desc_batal'] . '</span>
										</fieldset>';
        // <a class="button close" href="#modalWrap">Close</a>
        // $sistem_kontrak = json_decode($data['sistem_kontrak']);
        if ($data['is_status'] != 1 && ($data['tipe_pengadaan'] == 'barang' || $data['tipe_pengadaan'] == '' || $data['tipe_pengadaan'] == 0) && $data['metode_pengadaan'] != 3) {
            // echo "Masuk ke barang bukan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <button type="button" id="nextBtn2">Next</button>
						</div>
					</div>
					<div class="tab" id="tab2">
						<div class="tab-content">
							<h4>Usulan DPT</h4>
							' . $dpt . '
							</div>
						<div class="tab-footer">
						' . $button . '
					      <a class="button" href="#modalWrap" id="prevBtn1">Previous</a>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['is_status'] != 1 && ($data['tipe_pengadaan'] == 'jasa' || $data['tipe_pengadaan'] == '' || $data['tipe_pengadaan'] == 0) && $data['metode_pengadaan'] != 3) {
            // echo "Masuk ke jasa bukan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <button type="button" id="nextBtn2">Next</button>
						</div>
					</div>
					<div class="tab" id="tab2">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_analisa_resiko . '
							</div>
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="prevBtn1">Previous</a>
					      <button type="button" id="nextBtn3">Next</button>
						</div>
					</div>
					<div class="tab" id="tab3">
						<div class="tab-content">
							<h4>Usulan DPT</h4>
							' . $dpt . '
							</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="prevBtn2">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['is_status'] != 1 && ($data['tipe_pengadaan'] == 'jasa' || $data['tipe_pengadaan'] == '' || $data['tipe_pengadaan'] == 0) && $data['metode_pengadaan'] == 3) {
            // echo "Masuk ke jasa dan swakelola".$button;
            $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <button type="button" id="nextBtn2">Next</button>
						</div>
					</div>
					<div class="tab" id="tab2">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_analisa_resiko . '
							</div>
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="prevBtn1">Previous</a>
					      <button type="button" id="nextBtn3">Next</button>
						</div>
					</div>
					<div class="tab" id="tab3">
						<div class="tab-content">
							<h4>Usulan DPT</h4>
							' . $dpt . '
							</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="prevBtn2">Previous</a>
					      <button type="button" id="nextBtn4">Next</button>
						</div>
					</div>
					<div class="tab" id="tab4">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_swakelola . '
							</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="prevBtn4">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['is_status'] != 1 && ($data['tipe_pengadaan'] == 'barang' || $data['tipe_pengadaan'] == '' || $data['tipe_pengadaan'] == 0) && $data['metode_pengadaan'] == 3) {
            // echo "Masuk ke barang dan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="nextBtn2">Next</a>
						</div>
					</div>
					<div class="tab" id="tab2">
						<div class="tab-content">
							<h4>Usulan DPT</h4>
							' . $dpt . '
							</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="prevBtn1">Previous</a>
					      <a class="button" href="#modalWrap" id="nextBtn3">Next</a>
						</div>
					</div>
					<div class="tab" id="tab3">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_swakelola . '
							</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="prevBtn2">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['is_status'] == 1) {
            $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							' . (($dataFP3['status'] == 'ubah') ? $table_detail_data_fp3 : $table_detail_data_fp3_hapus) . '
						</div>
						<div class="tab-footer">
					      <button type="button" class="close">Close</button>
						</div>
					</div>
					</form>';
        }
        // else {
        // 	echo "stringasdasdasdas";
        // }
        echo $tabel;
    }

    public function get_analisa($id)
    {
        echo json_encode($this->pm->get_data_analisa($id));
    }

    public function viewStep($id)
    {
        $data['step'] = $this->pm->get_data_step($id);
        $data['id'] = $id;
        $this->load->view('pemaketan/division/view', $data, FALSE);
        $this->load->view('pemaketan/division/view_js', $data, FALSE);
    }

    public function viewStepAnalisa($id)
    {
        $data['step'] = $this->pm->get_data_analisa($id);
        $data['id'] = $id;
        $this->load->view('pemaketan/division/view_analisa', $data, FALSE);
        $this->load->view('pemaketan/division/view_analisa_js', $data, FALSE);
    }

    public function get_pic($id_fppbj, $metode)
    {
        $dataFPPBJ = $this->pm->selectDataPIC($id_fppbj);
        $dataPIC = $this->pm->get_pic($id_fppbj);
        $dropdown = '';
        if (empty($dataFPPBJ->row_array())) {
            $dropdown .= '<fieldset class="form-group form19"><label>Pilih PIC </label><select name="id_pic" class="form-control">';
            foreach ($dataPIC->result() as $key) {
                $dropdown .= '<option value="' . $key->id . '">' . $key->name . '</option>';
            }
            $dropdown .= '</select></fieldset>';
        } else {
            $d = $dataFPPBJ->row_array();
            if (!empty($dataFPPBJ->row_array())) {
                $dropdown = '<fieldset class="form-group read_only form19"><label>PIC </label> <b> : </b> <span>' . $d['name'] . '</span>';
            } else {
                $dropdown = '<fieldset class="form-group read_only form19"><label>PIC </label> <b> : </b> <span> - </span>';
            }
        }

        echo $dropdown;
    }

    public function form_download_pdf($id)
    {
        $data = $this->pm->selectData($id);
        $post = $this->input->post();
        // print_r($data);die;

        if ($data['is_status'] == 2) {
            $url =  site_url('export/fkpbj/' . $id . '/' . $post['no'] . '/' . $post['tanggal']);
        } elseif ($data['is_status'] == 1) {
            $url = site_url('export/fp3/' . $id);
        } else {
            $url = site_url('export/fppbj/' . $id . '/' . $post['no'] . '/' . $post['tanggal']);
        }

        if ($data['is_status'] == 1) {
            $this->form = array(
                'form' => array(
                    array(
                        'field' => 'to',
                        'type' => 'text',
                        'label' => 'Kepada',
                    ),
                    array(
                        'field' => 'pb',
                        'type' => 'text',
                        'label' => 'Pusat Biaya',
                    ),
                    array(
                        'field' => 'no',
                        'type' => 'text',
                        'label' => 'Nomor',
                    ),
                    array(
                        'field' => 'date',
                        'type' => 'date',
                        'label' => 'Tanggal',
                    ),
                    array(
                        'field' => 'kadep_',
                        'type' => 'text',
                        'label' => 'Kolom TTD - Dept/Div',
                    ),
                    array(
                        'field' => 'kadep',
                        'type' => 'text',
                        'label' => 'Kolom TTD - Nama (min. setingkat Ka. Dept)',
                    ),
                    array(
                        'field' => 'kadiv_',
                        'type' => 'text',
                        'label' => 'Kolom TTD - Div/Dirut',
                    ),
                    array(
                        'field' => 'kadiv',
                        'type' => 'text',
                        'label' => 'Kolom TTD - Nama (min. setingkat Ka. Divisi atau Direktur Utama
						untuk fungsi leher)',
                    )
                )
            );
        } else {
            $this->form = array(
                'form' => array(
                    array(
                        'field' => 'no',
                        'type' => 'text',
                        'label' => 'Nomor'
                    ),
                    array(
                        'field' => 'tanggal',
                        'type' => 'date',
                        'label' => 'Tanggal'
                    )
                )
            );
        }

        $this->form['url'] = $url;
        $this->form['button'] = array(
            array(
                'type' => 'submit',
                'label' => 'Download',
            ),
            array(
                'type' => 'cancel',
                'label' => 'Batal'
            )
        );
        echo json_encode($this->form);
    }

    public function setCategory($val)
    {
        if ($val >= 1 && $val <= 4) {
            return 'low';
            // return '<span id="catatan" class="catatan green">L</span>';
        } else if ($val > 4 && $val <= 9) {
            return 'medium';
            // return '<span id="catatan" class="catatan yellow">M</span>';		
        } else if ($val >= 10 && $val <= 14) {
            return 'high';
            // return '<span id="catatan" class="catatan red">H</span>';
        } else if ($val >= 15 && $val <= 25) {
            return 'extreme';
            // return '<span id="catatan" class="catatan red">E</span>';
        } else {
            return false;
        }
    }

    public function form_analisa_swakelola($id)
    {
        $tabel     = '';
        $admin    = $this->session->userdata('admin');
        $data     = $this->pm->get_data_step($id);
        $jwpp     = $data['jwpp_start'];
        $jwp      = $data['jwp_start'];
        $jwpp    = date('d M Y', strtotime($jwpp)) . " sampai " . date('d M Y', strtotime($data['jwpp_end']));
        $jwp     = date('d M Y', strtotime($jwp)) . " sampai " . date('d M Y', strtotime($data['jwp_end']));

        $table = 'ms_fppbj';
        $get_sitem_kontrak = $this->ex->get_sistem_kontrak($id, $table);
        $sistem_kontrak = '';
        foreach ($get_sitem_kontrak['sistem_kontrak_'] as $key) {
            $sistem_kontrak .= ucfirst($key) . ", ";
        }
        // echo $table_analisa;
        $button = '';
        if ($admin['id_role'] == 2 || $admin['id_role'] == 3 || $admin['id_role'] == 4 || $admin['id_role'] == 6) {
            $btn_setuju = '<button class="button is-primary" type="submit" name="approve"><span class="icon"><i class="far fa-thumbs-up"></i></span> Setujui Data</button>';
            $btn_reject = '<a href="#" class="button is-danger reject-btn-step"><span class="icon"><i class="fas fa-times"></i></span> Tolak Data</a>';
            $btn_cancel = '<button type="button" class="close">Close</button>';
            $btn_app_risiko = '<a class="button is-danger">Setujui Analisa Risiko</a>';

            if ($data['is_approved'] == 0 && $admin['id_role'] == 4) {
                $param = 1;
                $button = $btn_setuju . $btn_reject . $btn_cancel;
            } else if ($data['is_approved'] == 1 && $admin['id_role'] == 3) {
                $param = 2;
                $button = $btn_setuju . $btn_reject . $btn_cancel;
            } else if ($data['is_approved'] == 2 && $admin['id_role'] == 2) {
                $param = 3;
                $button = $btn_setuju . $btn_reject . $btn_cancel;
            } else if ($data['is_approved'] == 1 && $admin['id_role'] == 4 && $admin['id_division'] == 5 && $data['is_approved_hse'] == 0) {
                $param = 1;
                $button = $btn_setuju . $btn_reject . $btn_cancel;
            } else {
                $button = $btn_cancel;
            }
            // echo 
        }
        if ($data['hps'] != 1) {
            $status_hps = 'Tidak Ada';
        } else {
            $status_hps = 'Ada';
        }
        if ($data['metode_pengadaan'] == 1) {
            $status_metode = 'Pelelangan';
        } else if ($data['metode_pengadaan'] == 2) {
            $status_metode = 'Pemilihan Lnagsung';
        } else if ($data['metode_pengadaan'] == 3) {
            $status_metode = 'Swakelola';
        } else if ($data['metode_pengadaan'] == 4) {
            $status_metode = 'Penunjukan Lnagsung';
        } else {
            $status_metode = 'Pengadaan Lnagsung';
        }
        $jdp = $data['jenis_pengadaan'];
        if ($jdp == 'stock') {
            $vdp = 'Stock';
        } else if ($jdp == 'non_stock') {
            $vdp = 'Non Stock';
        } else if ($jdp == 'jasa_konstruksi') {
            $vdp = 'Jasa Konstruksi';
        } else if ($jdp == 'jasa_konsultasi') {
            $vdp = 'Jasa Konsultasi';
        } else {
            $vdp = 'Jasa Lainnya';
        }
        $penggolongan_penyedia = $data['penggolongan_penyedia'];
        if ($penggolongan_penyedia == 'perseorangan') {
            $golongan = 'Perseorangan';
        } else if ($penggolongan_penyedia == 'usaha_kecil') {
            $golongan = 'Usaha Kecil (K)';
        } else if ($penggolongan_penyedia == 'usaha_menengah') {
            $golongan = 'Usaha Menengah (M)';
        } else {
            $golongan = 'Usaha Besar (B)';
        }
        $swakelola = $this->pm->get_swakelola($id);

        if ($swakelola['waktu'] == 1) {
            $waktu_swakelola = 'Penyelesaian Pekerjaan ≤ 3 Bulan';
        } else if ($swakelola['waktu'] == 2) {
            $waktu_swakelola = 'Penyelesaian Pekerjaan > 3 Bulan s.d < 6 Bulan';
        } else {
            $waktu_swakelola = 'Penyelesaian pekerjaan ≥ 6 Bulan';
        }

        if ($swakelola['biaya'] == 1) {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan ≤ 50 juta';
        } else if ($swakelola['biaya'] == 2) {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan > 50 Bulan s.d < 100 juta';
        } else {
            $biaya_swakelola = 'Biaya pelaksanaan pekerjaan ≥ 6 100 juta';
        }

        if ($swakelola['tenaga'] == 1) {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi sebagai perencana dan pelaksana dan pengawas';
        } else if ($swakelola['tenaga'] == 2) {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi salah satu atau lebih sebagai perencana dan/atau pelaksana dan/atau pengawas';
        } else {
            $tenaga_swakelola = 'Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan tidak memenuhi sebagai perencana dan pelaksana dan pengawas';
        }

        if ($swakelola['bahan'] == 1) {
            $bahan_swakelola = 'Bahan mudah didapatkan langsung oleh Pekerja NR';
        } else if ($swakelola['bahan'] == 2) {
            $bahan_swakelola = 'Bahan dapat diadakan melalui pihak ketiga';
        } else {
            $bahan_swakelola = 'Bahan lebih efisien apabila diadakan oleh pihak ketiga';
        }

        if ($swakelola['peralatan'] == 1) {
            $peralatan_swakelola = 'Ketersediaan jumlah dan kemampuan peralatan kerja memenuhi kebutuhan pekerjaan';
        } else if ($swakelola['peralatan'] == 2) {
            $peralatan_swakelola = 'Ketersediaan jumlah dan/atau kemampuan peralatan kerja tidak memenuhi kebutuhan pekerjaan';
        } else {
            $peralatan_swakelola = 'Peralatan lebih efisien apabila diadakan oleh pihak ketiga';
        }
        $sistem_kontrak = json_decode($data['sistem_kontrak']);
        $tabel .= '<form id="regForm" action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
					<div class="tab" id="tab1"> 
						<div class="tab-content">
							<fieldset class="form-group read_only form0 " for="' . $data['no_pr'] . '"><label for="' . $data['no_pr'] . '">No.PR</label><b>:</b><span>' . $data['no_pr'] . '</span></fieldset>
							<fieldset class="form-group read_only form1 " for="' . $data['tipe_pr'] . '"><label for="' . $data['tipe_pr'] . '">Tipe PR</label><b>:</b><span>' . $data['tipe_pr'] . '</span></fieldset>
							<fieldset class="form-group read_only form2 " for="' . $data['nama_pengadaan'] . '"><label for="' . $data['nama_pengadaan'] . '">Nama Pengadaan</label><b>:</b><span>' . $data['nama_pengadaan'] . '</span></fieldset>
							<fieldset class="form-group read_only form3 " for="' . $data['tipe_pengadaan'] . '"><label for="' . $data['tipe_pengadaan'] . '">Tipe Pengadaan</label><b>:</b><span>' . $data['tipe_pengadaan'] . '</span></fieldset>
							<fieldset class="form-group read_only form4 " for="' . $data['jenis_pengadaan'] . '"><label for="' . $data['jenis_pengadaan'] . '">Jenis Detail Pengadaan</label><b>:</b><span>' . $vdp . '</span></fieldset>
							<fieldset class="form-group read_only form5 " for="' . $data['metode_pengadaan'] . '"><label for="' . $data['metode_pengadaan'] . '">Metode Pengadaan</label><b>:</b><span>' . $status_metode . '</span></fieldset>
							<fieldset class="form-group read_only form6 " for="' . $data['idr_anggaran'] . '"><label for="' . $data['idr_anggaran'] . '">Anggaran (IDR)</label><b>:</b><span>' . $data['idr_anggaran'] . '</span></fieldset>
							<fieldset class="form-group read_only form7 " for="' . $data['usd_anggaran'] . '"><label for="' . $data['usd_anggaran'] . '">Anggaran (USD)</label><b>:</b><span>' . $data['usd_anggaran'] . '</span></fieldset>
							<fieldset class="form-group read_only form8 " for="' . $data['year_anggaran'] . '"><label for="' . $data['year_anggaran'] . '">Tahun Anggaran</label><b>:</b><span>' . $data['year_anggaran'] . '</span></fieldset>
							<fieldset class="form-group read_only form9 " for="' . $data['kak_lampiran'] . '"><label for="' . $data['kak_lampiran'] . '">KAK / Spesifikasi Teknis</label><b>:</b><span><a href="' . base_url('assets/lampiran/kak_lampiran/' . $data['kak_lampiran']) . '" target="blank">' . $data['kak_lampiran'] . '</a></span></fieldset>
							<fieldset class="form-group read_only form10 " for="' . $data['hps'] . '"><label for="' . $data['hps'] . '">Ketersediaan HPS</label><b>:</b><span>' . $status_hps . '</span></fieldset>
							<fieldset class="form-group read_only form11 " for="' . $data['lingkup_kerja'] . '"><label for="' . $data['lingkup_kerja'] . '">Lingkup Kerja</label><b>:</b><span>' . $data['lingkup_kerja'] . '</span></fieldset>
							<fieldset class="form-group read_only form12 " for="' . $data['penggolongan_penyedia'] . '"><label for="' . $data['penggolongan_penyedia'] . '">Penggolongan Penyedia Jasa (Usulan)</label><b>:</b><span>' . $golongan . '</span></fieldset>
							<fieldset class="form-group read_only form13 " for="' . $data['jwpp'] . '"><label for="' . $data['jwpp'] . '">Masa Penyelesaian Pekerjaan</label><b>:</b><span>' . $jwpp . '</span></fieldset>
							<fieldset class="form-group read_only form14 " for="' . $data['jwp'] . '"><label for="' . $data['jwp'] . '">Masa Pemeliharaan</label><b>:</b><span>' . $jwp . '</span></fieldset>
							<fieldset class="form-group read_only form15 " for="' . $data['desc_metode_pembayaran'] . '"><label for="' . $data['desc_metode_pembayaran'] . '">Metode Pembayaran (Usulan)</label><b>:</b><span>' . $data['desc_metode_pembayaran'] . '</span></fieldset>
							<fieldset class="form-group read_only form16 " for="' . $data['jenis_kontrak'] . '"><label for="' . $data['jenis_kontrak'] . '">Jenis Kontrak (Usulan)</label><b>:</b><span>' . $data['jenis_kontrak'] . '</span></fieldset>
							<fieldset class="form-group read_only form17 " for="' . $data['sistem_kontrak'] . '"><label for="' . $data['sistem_kontrak'] . '">Sistem Kontrak (Usulan)</label><b>:</b><span>' . $sistem_kontrak . '</span>
							</fieldset>
							<fieldset class="form-group read_only form11 " for="' . $data['desc_dokumen'] . '"><label for="' . $data['desc_dokumen'] . '">Keterangan</label><b>:</b><span>' . $data['desc_dokumen'] . '</span></fieldset>
						</div>
						<div class="tab-footer">
					      <button type="button" id="nextBtn2">Next</button>
						</div>
					</div>
					<div class="tab" id="tab2">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		<fieldset class="form-group read_only form0 " for="' . $swakelola['waktu'] . '"><label for="' . $swakelola['waktu'] . '">Waktu</label><b>:</b><span>' . $waktu_swakelola . '</span></fieldset>
									<fieldset class="form-group read_only form1 " for="' . $swakelola['biaya'] . '"><label for="' . $swakelola['biaya'] . '">Biaya</label><b>:</b><span>' . $biaya_swakelola . '</span></fieldset>
									<fieldset class="form-group read_only form2 " for="' . $swakelola['tenaga'] . '"><label for="' . $swakelola['tenaga'] . '">Tenaga Kerja</label><b>:</b><span>' . $tenaga_swakelola . '</span></fieldset>
									<fieldset class="form-group read_only form3 " for="' . $swakelola['bahan'] . '"><label for="' . $swakelola['bahan'] . '">Bahan</label><b>:</b><span>' . $bahan_swakelola . '</span></fieldset>
									<fieldset class="form-group read_only form4 " for="' . $swakelola['peralatan'] . '"><label for="' . $swakelola['peralatan'] . '">Peralatan</label><b>:</b><span>' . $peralatan_swakelola . '</span></fieldset>
							</div>
						</div>
						<div class="tab-footer">
						' . $button . '
					      <button type="button" id="prevBtn1">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        echo $tabel;
    }

    public function send_mail_($to, $subject, $message, $link = "#")
    {
        $this->send_mail();
    }

    public function edit($id = null)
    {
        $this->form = $this->form_edit;
        $modelAlias = $this->modelAlias;
        $data = $this->$modelAlias->selectData($id);

        foreach ($this->form['form'] as $key => $element) {
            $this->form['form'][$key]['value'] = $data[$element['field']];

            // $this->form['form']['kak_lampiran']['value'] = ' ';
            if ($this->form['form'][$key]['type'] == 'date_range') {
                $_value = array();

                foreach ($this->form['form'][$key]['field'] as $keys => $values) {
                    $_value[] = $data[$values];
                }
                $this->form['form'][$key]['value'] = $_value;
            }

            if ($this->form['form'][$key]['type'] == 'dateperiod') {
                $dateperiod = json_decode($data[$element['field']]);
                if ($this->form['form'][$key]['value'] != '') {
                    $this->form['form'][$key]['value'] = date('d M Y', strtotime($dateperiod->start)) . " sampai " . date('d M Y', strtotime($dateperiod->end));
                } else {
                    $this->form['form'][$key]['value'] = '-';
                }
            }

            if ($data['is_status'] != 0) {
                if ($this->form['form'][$key]['field'] == 'nama_pengadaan') {
                    $this->form['form'][$key]['readonly'] = true;
                }
                if ($this->form['form'][$key]['field'] == 'metode_pengadaan') {
                    $this->form['form'][$key]['readonly'] = true;
                }
                if ($this->form['form'][$key]['field'] == 'jwpp') {
                    $this->form['form'][$key]['readonly'] = true;
                }
                if ($this->form['form'][$key]['field'] == 'jwp') {
                    $this->form['form'][$key]['readonly'] = true;
                }
            }
        }


        $this->form['url'] = site_url($this->updateUrl . '/' . $id);
        $this->form['button'] = array(
            array(
                'type' => 'submit',
                'label' => 'Ubah'
            ),
            array(
                'type' => 'cancel',
                'label' => 'Batal'
            )
        );
        $this->form_validation->set_rules($this->form['form']);
        echo json_encode($this->form);
    }

    public function update($id)
    {
        $modelAlias = $this->modelAlias;
        $fppbj = $this->fm->selectData($id);
        $admin = $this->session->userdata('admin');

        $this->form_validation->set_rules($this->form_edit['form']);
        //$this->form= $this->form_edit;
        if ($this->validation($this->form_edit)) {

            $save = $this->input->post();
            if ($admin['id_role'] == 6) {
                $save['is_approved']              = 2;
                $save['is_reject']                  = 0;
                $save['id_division']              = $fppbj['id_division'];
                $save['nama_pengadaan']            = $fppbj['nama_pengadaan'];
                $save['idr_anggaran']              = str_replace(',', '', $save['idr_anggaran']);
                $save['usd_anggaran']              = str_replace(',', '', $save['usd_anggaran']);
                $save['year_anggaran']            = $save['year_anggaran'];
                $save['hps']                        = $save['hps'];
                $save['lingkup_kerja']            = $save['lingkup_kerja'];
                $save['penggolongan_penyedia']   = $save['penggolongan_penyedia'];
                $save['desc_metode_pembayaran']  = $save['desc_metode_pembayaran'];
                $save['jenis_kontrak']            = $save['jenis_kontrak'];
                $save['sistem_kontrak']            = $save['sistem_kontrak'];
                $save['metode_pengadaan']          = $fppbj['metode_pengadaan'];
                $save['jwpp_start']                 = $fppbj['jwpp_start'];
                $save['jwpp_end']                 = $fppbj['jwpp_end'];
                $save['jwp_start']                  = $fppbj['jwp_start'];
                $save['jwp_end']                  = $fppbj['jwp_end'];
                $save['entry_stamp']               = timestamp();
            } else if ($save['nama_pengadaan'] == '') {
                $save['is_reject']                  = 0;
                $save['id_division']              = $fppbj['id_division'];
                $save['nama_pengadaan']            = $fppbj['nama_pengadaan'];
                $save['idr_anggaran']              = str_replace(',', '', $save['idr_anggaran']);
                $save['usd_anggaran']              = str_replace(',', '', $save['usd_anggaran']);
                $save['year_anggaran']            = $save['year_anggaran'];
                $save['hps']                        = $save['hps'];
                $save['lingkup_kerja']            = $save['lingkup_kerja'];
                $save['penggolongan_penyedia']   = $save['penggolongan_penyedia'];
                $save['desc_metode_pembayaran']  = $save['desc_metode_pembayaran'];
                $save['jenis_kontrak']            = $save['jenis_kontrak'];
                $save['sistem_kontrak']            = $save['sistem_kontrak'];
                $save['metode_pengadaan']          = $fppbj['metode_pengadaan'];
                $save['jwpp_start']                 = $fppbj['jwpp_start'];
                $save['jwpp_end']                 = $fppbj['jwpp_start'];
                $save['jwp_start']                  = $fppbj['jwp_start'];
                $save['jwp_end']                  = $fppbj['jwp_end'];
                $save['entry_stamp']               = timestamp();
            } else {
                $save['is_reject']                  = 0;
                $save['id_division']              = $fppbj['id_division'];
                $save['nama_pengadaan']            = $save['nama_pengadaan'];
                $save['idr_anggaran']              = str_replace(',', '', $save['idr_anggaran']);
                $save['usd_anggaran']              = str_replace(',', '', $save['usd_anggaran']);
                $save['year_anggaran']            = $save['year_anggaran'];
                $save['hps']                        = $save['hps'];
                $save['lingkup_kerja']            = $save['lingkup_kerja'];
                $save['penggolongan_penyedia']   = $save['penggolongan_penyedia'];
                $save['desc_metode_pembayaran']  = $save['desc_metode_pembayaran'];
                $save['jenis_kontrak']            = $save['jenis_kontrak'];
                $save['sistem_kontrak']            = $save['sistem_kontrak'];
                $save['metode_pengadaan']          = $save['metode_pengadaan'];
                $save['jwpp']                      = $save['jwpp'];
                $save['jwpp_start']                 = $save['jwpp_start'];
                $save['jwpp_end']                 = $save['jwpp_end'];
                $save['jwp_start']                  = $save['jwp_start'];
                $save['jwp_end']                  = $save['jwp_end'];
                $save['entry_stamp']               = timestamp();
            }

            $lastData = $this->$modelAlias->selectData($id);
            // die;
            $query = $this->$modelAlias->update($id, $save);

            if ($query) {
                $this->session->set_userdata('alert', $this->form['successAlert']);
                $this->deleteTemp($save, $lastData);
                json_encode(array('status' => 'success'));
            }
        }
    }

    public function  check_perencanaan_umum($year)
    {
        $check = $this->pm->check_perencanaan_umum($year);
        if ($check == 0) {
            // echo $check;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit_fppbj($id)
    {
        $tabel     = '';
        $admin    = $this->session->userdata('admin');
        $data     = $this->pm->get_data_step($id);

        $analisa_resiko = $this->pm->get_data_analisa($id);
        //echo count($analisa_resiko);die;
        $table_analisa = '';
        $total_category = '';
        $total = '';
        $no = 1;
        $getCat = array();
        if (count($analisa_resiko) > 0) {
            foreach ($analisa_resiko as $key => $value) {
                // Generate Question
                if ($key == 0) {
                    $question = "Jenis Pekerjaan";
                } elseif ($key == 1) {
                    $question = "Lokasi Kerja";
                } elseif ($key == 2) {
                    $question = "Materi Peralatan yang digunakan";
                } elseif ($key == 3) {
                    $question = "Potensi paparan terhadap bahaya tempat kerja";
                } elseif ($key == 4) {
                    $question = "Potensi paparan terhadap bahaya bagi personil";
                } elseif ($key == 5) {
                    $question = "Pekerjaan secara bersamaan oleh kontraktor berbeda";
                } elseif ($key == 6) {
                    $question = "Jangka Waktu Pekerjaan";
                } elseif ($key == 7) {
                    $question = "Konsekuensi pekerjaan potensian";
                } elseif ($key == 8) {
                    $question = "Pengalaman Kontraktor";
                } elseif ($key == 9) {
                    $question = "Paparan terhadap publisitas negatif";
                }

                $manusia     = $this->setCategory($value['manusia']);
                $asset         = $this->setCategory($value['asset']);
                $lingkungan = $this->setCategory($value['lingkungan']);
                $hukum         = $this->setCategory($value['hukum']);

                //SET CATEGORY PER QUESTION 
                if ($manusia == "extreme" || $asset == "extreme" || $lingkungan == "extreme" || $hukum == "extreme") {
                    $category = '<span id="catatan" class="catatan"><span id="catatan" class="catatan red">E</span></span>';
                } else if ($manusia == "high" || $asset == "high" || $lingkungan == "high" || $hukum == "high") {
                    $category = '<span id="catatan" class="catatan"><span id="catatan" class="catatan red">H</span></span>';
                } else  if ($manusia == "medium" || $asset == "medium" || $lingkungan == "medium" || $hukum == "medium") {
                    $category = '<span id="catatan" class="catatan"><span id="catatan" class="catatan yellow">M</span></span>';
                } else if ($manusia == "low" || $asset == "low" || $lingkungan == "low" || $hukum == "low") {
                    $category = '<span id="catatan" class="catatan"><span id="catatan" class="catatan green">L</span></span>';
                } else {
                    $category = '<span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span>';
                }

                array_push($getCat, $category);

                $table_analisa .= '<style>
									.tooltip {
									  position: relative;
									  display: inline-block;
									  border-bottom: 1px dotted black;
									}

									.tooltip .tooltiptext {
									  visibility: hidden;
									  width: 120px;
									  background-color: black;
									  color: #fff;
									  text-align: center;
									  border-radius: 6px;
									  padding: 5px 0;

									  /* Position the tooltip */
									  position: absolute;
									  z-index: 1;
									}

									.tooltip:hover .tooltiptext {
									  visibility: visible;
									}
									</style><tr class="q' . $no . '">
										<td>' . $no . '</td>
										<td>' . $question . '</td>
										<td>
											<div class="tooltip">
												<input type="text" placeholder="isi" class="input" value="' . $value['apa'] . '" name="apa[]">
												<span class="tooltiptext">' . $value['apa'] . '</span>
											</div>
										</td>
											<td><input name="manusia[]" type="text" placeholder="0" value="' . $value['manusia'] . '" class="input nm-tg" readonly></td>
											<td><input name="asset[]" type="text" placeholder="0" value="' . $value['asset'] . '" class="input nm-tg" readonly></td>
											<td><input name="lingkungan[]" type="text" placeholder="0" value="' . $value['lingkungan'] . '" class="input nm-tg" readonly></td>
											<td><input name="hukum[]" type="text" placeholder="0" value="' . $value['hukum'] . '" class="input nm-tg" readonly></td>
											<td>' . $category . '</td>
									</tr>';
                $no++;
            }
        } else {
            $table_analisa .= '<tr class="q1">
							<td>1</td>
							<td>Jenis Pekerjaan</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q2">
							<td>2</td>
							<td>Lokasi Kerja</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q3">
							<td>3</td>
							<td>Materi Peralatan yang digunakan</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q4">
							<td>4</td>
							<td>Potensi paparan terhadap bahaya tempat kerja</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q5">
							<td>5</td>
							<td>Potensi paparan terhadap bahaya bagi personil</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q6">
							<td>6</td>
							<td>Pekerjaan secara bersamaan oleh kontraktor berbeda</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q7">
							<td>7</td>
							<td>Jangka Waktu Pekerjaan</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q8">
							<td>8</td>
							<td>Konsekuensi pekerjaan potensian</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q9">
							<td>9</td>
							<td>Pengalaman Kontraktor</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>
					<tr class="q10">
							<td>10</td>
							<td>Paparan terhadap publisitas negatif</td>
							<td><input type="text" placeholder="isi" class="input" name="apa[]"></td>
							<td><input name="manusia[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="asset[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="lingkungan[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><input name="hukum[]" type="text" placeholder="0"  class="input nm-tg" readonly></td>
							<td><span id="catatan" class="catatan"><span id="catatan" class="catatan">?</span></span></td>
					</tr>';
        }

        if (in_array('<span id="catatan" class="catatan"><span id="catatan" class="catatan red">E</span></span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan"><span id="catatan" class="catatan red">E</span></span>';
        } else if (in_array('<span id="catatan" class="catatan"><span id="catatan" class="catatan red">H</span></span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan"><span id="catatan" class="catatan red">H</span></span>';
        } else if (in_array('<span id="catatan" class="catatan"><span id="catatan" class="catatan yellow">M</span></span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan"><span id="catatan" class="catatan yellow">M</span></span>';
        } else if (in_array('<span id="catatan" class="catatan"><span id="catatan" class="catatan green">L</span></span>', $getCat, TRUE)) {
            $total = '<span id="catatan" class="catatan"><span id="catatan" class="catatan green">L</span></span>';
        } else {
            $total = '-';
        }

        $total_category .= '<tr>
								<td colspan="7" style="text-align:right">Hasil Penilaian Keseluruhan :</td><td style="text-align:center!important" id="total">' . $total . '</td>
							</tr>';
        $get_dpt = $this->ex->get_analisa($id);
        $dpt = '<table border=1 class="dpt-view">
					<thead>
						<tr>
							<th>Daftar DPT Saat Ini</th>
						</tr>
					</thead>
					<tbody>';
        $no = 1;
        if ($get_dpt['dpt_list'] != '') {
            foreach ($get_dpt['dpt_list'] as $key) {
                $dpt .= '<tr>
							<td>' . $no++ . '. ' . $key . '</td>
						</tr>';
            }
        } else {
            $dpt .= '<tr>
							<td>-</td>
						</tr>';
        }
        $dpt .= '</tbody>
				</table>';
        $dpt .= '<table border=1 class="dpt-view">
					<thead>
						<tr>
							<th>Non DPT Saat Ini</th>
						</tr>
					</thead>
					<tbody><tr>
						<td>' . (($get_dpt['usulan'] != '') ? $get_dpt['usulan'] : '-') . '</td>
					</tr></tbody>
				</table>';

        $table = 'ms_fppbj';
        $get_sitem_kontrak = $this->ex->get_sistem_kontrak($id, $table);
        $s_k = '';
        foreach ($get_sitem_kontrak['sistem_kontrak_'] as $key) {
            $s_k .= ucfirst($key) . ", ";
        }
        $sistem_kontrak = substr($s_k, substr($s_k), -2);

        $swakelola = $this->pm->get_swakelola($id);

        if ($swakelola['waktu'] == 1) {
            $waktu_checked1 = 'selected';
        } else {
            $waktu_checked1 = '';
        }

        if ($swakelola['waktu'] == 2) {
            $waktu_checked2 = 'selected';
        } else {
            $waktu_checked2 = '';
        }

        if ($swakelola['waktu'] == 3) {
            $waktu_checked3 = 'selected';
        } else {
            $waktu_checked3 = '';
        }

        if ($swakelola['biaya'] == 1) {
            $biaya_checked1 = 'selected';
        } else {
            $biaya_checked1 = '';
        }

        if ($swakelola['biaya'] == 2) {
            $biaya_checked2 = 'selected';
        } else {
            $biaya_checked2 = '';
        }

        if ($swakelola['biaya'] == 3) {
            $biaya_checked3 = 'selected';
        } else {
            $biaya_checked3 = '';
        }

        if ($swakelola['tenaga'] == 1) {
            $tenaga_checked1 = 'selected';
        } else {
            $tenaga_checked1 = '';
        }

        if ($swakelola['tenaga'] == 2) {
            $tenaga_checked2 = 'selected';
        } else {
            $tenaga_checked2 = '';
        }

        if ($swakelola['tenaga'] == 3) {
            $tenaga_checked3 = 'selected';
        } else {
            $tenaga_checked3 = '';
        }

        if ($swakelola['bahan'] == 1) {
            $bahan_checked1 = 'selected';
        } else {
            $bahan_checked1 = '';
        }

        if ($swakelola['bahan'] == 2) {
            $bahan_checked2 = 'selected';
        } else {
            $bahan_checked2 = '';
        }

        if ($swakelola['bahan'] == 3) {
            $bahan_checked3 = 'selected';
        } else {
            $bahan_checked3 = '';
        }

        if ($swakelola['peralatan'] == 1) {
            $peralatan_checked1 = 'selected';
        } else {
            $peralatan_checked1 = '';
        }

        if ($swakelola['peralatan'] == 2) {
            $peralatan_checked2 = 'selected';
        } else {
            $peralatan_checked2 = '';
        }

        if ($swakelola['peralatan'] == 3) {
            $peralatan_checked3 = 'selected';
        } else {
            $peralatan_checked3 = '';
        }

        $table_swakelola = '<div class="ps-wrapper" style="width: 100%;">
	 		<fieldset class="form-group form0" for="">
	 			<label for="">Waktu*</label>
	 			<select name="waktu" id="" class="form-control ">
	 				<option value="0" selected="">Pilih Dibawah Ini</option>
	 				<option value="1" ' . $waktu_checked1 . '>Penyelesaian Pekerjaan ≤ 3 bulan</option>
	 				<option value="2" ' . $waktu_checked2 . '>Penyelesaian Pekerjaan &gt; 3 bulan s.d &lt; 6 bulan</option>
	 				<option value="3" ' . $waktu_checked3 . '>Penyelesaian Pekerjaan ≥ 6 bulan</option>
	 			</select>
	 		</fieldset>

			<fieldset class="form-group form1" for="">
				<label for="">Biaya*</label>
				<select name="biaya" id="" class="form-control ">
					<option value="0" selected="">Pilih Dibawah Ini</option>
					<option value="1" ' . $biaya_checked1 . '>Biaya Pelaksanaan Pekerjaan&nbsp;≤ 50 juta</option>
					<option value="2" ' . $biaya_checked2 . '>Biaya Pelaksanaan Pekerjaan&nbsp;&gt; 50 juta s.d &lt; 100 juta</option>
					<option value="3" ' . $biaya_checked3 . '>Biaya Pelaksanaan Pekerjaan&nbsp;≥ 100 juta</option>
				</select>
			</fieldset>

			<fieldset class="form-group form2" for="">
				<label for="">Tenaga Kerja*</label>
				<select name="tenaga" id="" class="form-control ">
					<option value="0" selected="">Pilih Dibawah Ini</option>
					<option value="1" ' . $tenaga_checked1 . '>Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi sebagai perencana dan pelaksana dan pengawas</option>
					<option value="2" ' . $tenaga_checked2 . '>Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan memenuhi salah satu atau lebih sebagai perencana dan/atau pelaksana dan/atau pengawas</option>
					<option value="3" ' . $tenaga_checked3 . '>Kompetensi dan/atau ketersediaan jumlah Tenaga Kerja di Perusahaan tidak memenuhi sebagai perencana dan pelaksana dan pengawas</option>
				</select>
			</fieldset>

			<fieldset class="form-group form3" for="">
				<label for="">Bahan*</label>
				<select name="bahan" id="" class="form-control ">
					<option value="0" selected="">Pilih Dibawah Ini</option>
					<option value="1" ' . $bahan_checked1 . '>Bahan mudah didapatkan langsung oleh Pekerja NR</option>
					<option value="2" ' . $bahan_checked2 . '>Bahan dapat diadakan melalui pihak ketiga</option>
					<option value="3" ' . $bahan_checked3 . '>Bahan lebih efisien apabila diadakan oleh pihak ketiga</option>
				</select>
			</fieldset>

			<fieldset class="form-group   form4" for="">
				<label for="">Peralatan*</label>
				<select name="peralatan" id="" class="form-control ">
					<option value="0" selected="">Pilih Dibawah Ini</option>
					<option value="1" ' . $peralatan_checked1 . '>Ketersediaan jumlah dan kemampuan peralatan kerja memenuhi kebutuhan pekerjaan</option>
					<option value="2" ' . $peralatan_checked2 . '>Ketersediaan jumlah dan/atau kemampuan peralatan kerja tidak memenuhi kebutuhan pekerjaan</option>
					<option value="3" ' . $peralatan_checked3 . '>Peralatan lebih efisien apabila diadakan oleh pihak ketiga</option>
				</select>
			</fieldset>

			<fieldset class="form-group   form5" for=""><div class="matrix-swakelola-wrapper"><div class="matrix-swakelola"><div class="ms-item green m1">1</div><div class="ms-item green m2">2</div><div class="ms-item green m3">3</div><div class="ms-item green m4">4</div><div class="ms-item green m5">5</div><div class="ms-item green-light m6">6</div><div class="ms-item green-light m7">7</div><div class="ms-item green-light m8">8</div><div class="ms-item green-light m9">9</div><div class="ms-item green-light m10">10</div><div class="ms-item green-light sw m11">11</div><span class="ms-line"></span><div class="ms-item yellow pk m12">12</div><div class="ms-item yellow m13">13</div><div class="ms-item red m14">14</div><div class="ms-item red m15">15</div></div></div><div class="alert" style="color: #f90606; font-size: 95%; text-align: center;"></div></fieldset>
		</div>';

        if ($data['penggolongan_penyedia'] == 'perseorangan') {
            $selected1 = 'selected';
        } else {
            $selected1 = '';
        }
        if ($data['penggolongan_penyedia'] == 'usaha_kecil') {
            $selected2 = 'selected';
        } else {
            $selected2 = '';
        }
        if ($data['penggolongan_penyedia'] == 'usaha_menengah') {
            $selected3 = 'selected';
        } else {
            $selected3 = '';
        }
        if ($data['penggolongan_penyedia'] == 'usaha_besar') {
            $selected4 = 'selected';
        } else {
            $selected4 = '';
        }

        if ($data['jenis_kontrak'] == 'po') {
            $selected_1 = 'selected';
        } else {
            $selected_1 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC01') {
            $selected_2 = 'selected';
        } else {
            $selected_2 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC02') {
            $selected_3 = 'selected';
        } else {
            $selected_3 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC03') {
            $selected_4 = 'selected';
        } else {
            $selected_4 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC04') {
            $selected_5 = 'selected';
        } else {
            $selected_5 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC05') {
            $selected_6 = 'selected';
        } else {
            $selected_6 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC06') {
            $selected_7 = 'selected';
        } else {
            $selected_7 = '';
        }
        if ($data['jenis_kontrak'] == 'GTC07') {
            $selected_8 = 'selected';
        } else {
            $selected_8 = '';
        }

        if ($data['jenis_kontrak'] == 'spk') {
            $selected_9 = 'selected';
        } else {
            $selected_9 = '';
        }

        if ($data['metode_pengadaan'] == 1) {
            $selected_metode1 = 'selected';
        } else {
            $selected_metode1 = '';
        }

        if ($data['metode_pengadaan'] == 2) {
            $selected_metode2 = 'selected';
        } else {
            $selected_metode2 = '';
        }

        if ($data['metode_pengadaan'] == 3) {
            $selected_metode3 = 'selected';
        } else {
            $selected_metode3 = '';
        }

        if ($data['metode_pengadaan'] == 4) {
            $selected_metode4 = 'selected';
        } else {
            $selected_metode4 = '';
        }

        if ($data['metode_pengadaan'] == 5) {
            $selected_metode5 = 'selected';
        } else {
            $selected_metode5 = '';
        }

        if ($data['tipe_pr'] == 'user_purchase') {
            $option_metode_pengadaan = '<option value="">Pilih Salah Satu</option>
			<option value="5">Pengadaan Langsung</option>';
        } else if ($data['tipe_pr'] == 'nda') {
            $option_metode_pengadaan = '<option value="">Pilih Salah Satu</option>
			<option value="3">Swakelola</option>';
        } else {
            $option_metode_pengadaan = '<option value="">Pilih Salah Satu</option>
			<option value="1">Pelelangan</option>
			<option value="2">Pemilihan Langsung</option>
			<option value="4">Penunjukan Langsung</option>
			<option value="5">Pengadaan Langsung</option>';
        }

        if ($data['pr_lampiran'] != '') {
            $pr_lama = '<a href="' . base_url() . '/assets/lampiran/pr_lampiran/' . $data['pr_lampiran'] . '" target="blank"><i class="fas fa-file"></i></a>';
            $field_lampiran_pr = '<input type="file" class="form-control closeInput1" id="" name="pr_lampiran" style="display: none;">
								<input class="closeHidden1" type="hidden" name="pr_lampiran" value="' . $data['pr_lampiran'] . '">
								<div class="fileUploadBlock close1">
									<i class="fa fa-upload"></i>&nbsp;
										<a href="' . base_url() . 'assets/lampiran/pr_lampiran/' . $data['pr_lampiran'] . '" target="blank">
										' . $data['pr_lampiran'] . '
										</a>
									<div class="deleteFile" data-id="1">
									<i class="fa fa-trash"></i>
									</div>
								</div>';
        } else {
            $pr_lama = '-';
            $field_lampiran_pr = '<input type="file" class="form-control" id="" name="pr_lampiran">';
        }

        if ($data['kak_lampiran'] != '') {
            $kak_lama = '<a href="' . base_url() . '/assets/lampiran/kak_lampiran/' . $data['kak_lampiran'] . '" target="blank"><i class="fas fa-file"></i></a>';
            $field_lampiran_kak = '<input type="file" class="form-control closeInput2" id="" name="kak_lampiran" style="display: none;"><input class="closeHidden2" type="hidden" name="kak_lampiran" value="' . $data['kak_lampiran'] . '">
								<div class="fileUploadBlock close2">
									<i class="fa fa-upload"></i>&nbsp;
										<a href="' . base_url() . '/assets/lampiran/kak_lampiran/' . $data['kak_lampiran'] . '" target="blank">
										' . $data['kak_lampiran'] . '
										</a>
									<div class="deleteFile" data-id="2">
									<i class="fa fa-trash"></i>
									</div>
								</div>';
        } else {
            $kak_lama = '-';
            $field_lampiran_kak = '<input type="file" class="form-control" id="" name="kak_lampiran">';
        }

        if ($data['hps'] == 1) {
            $hps_1 = 'checked';
        } else {
            $hps_1 = '';
        }

        if ($data['hps'] == '' || $data['hps'] == 0) {
            $hps_2 = 'checked';
        } else {
            $hps_2 = '';
        }

        if ($data['is_multiyear'] == 1) {
            $is_multiyear_checked = '<input style="margin-left: 30%;" type="checkbox" value="1" name="is_multiyear" checked>Multiyear Budget</fieldset>';
        } else {
            $is_multiyear_checked = '<input style="margin-left: 30%;" type="checkbox" value="1" name="is_multiyear">Multiyear Budget</fieldset>';
        }
        $is_multiyear_field = '';
        if ($data['is_multiyear'] == 1) {
            $data_multi_years = $this->pm->get_multi_years($id);
            $no = 1;
            $no_ = 1;
            $total = $this->total_year_anggaran($id);
            $is_multiyear_field .= '<fieldset class="form-group   form7" for="">
									<hr style="display: block; color:#3273dc; border-bottom: 1px #3273dc solid; margin: 20px 0;">
										<div class="multiple-budget">';
            foreach ($data_multi_years as $key => $value) {
                $is_multiyear_field .= '	<div id="budget-' . $no_++ . '">
												<p style="color: #3273dc; font-weight: bold;">Detail Anggaran #' . $no++ . '</p>
												<input class="formNomor" type="hidden" name="nomor" value=' . $total . '>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Anggaran (IDR)</label>
													<input type="text" class="form-control money" id="idrmoney" value="' . $value['idr_anggaran'] . '" name="idr_anggaran[]" placeholder="" style="text-align: right;">
												</div>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Anggaran (USD)</label>
													<input type="text" class="form-control money" id="usdmoney" value="' . $value['usd_anggaran'] . '" name="usd_anggaran[]" placeholder="" style="text-align: right;">
												</div>
												<div style="margin:0.35em 0.625em 0.75em">
													<label for="">Tahun Anggaran*</label>
													<input type="number" class="form-control" id="" value="' . $value['year_anggaran'] . '" name="year_anggaran[]" placeholder="">
												</div>
											</div>';
            }
            $is_multiyear_field .= ' </div>
									<div>
										<a id="add_budget">Tambah Tahun Anggaran</a> || 
										<a id="min_budget">Batal Tahun Anggaran</a>
									</div>
									<hr style="display: block; color:#3273dc; border-bottom: 1px #3273dc solid; margin: 20px 0;"></fieldset>';
        } else {
            $is_multiyear_field .= '<fieldset class="form-group   form7" for=""><label for="">Anggaran (IDR)</label><input type="text" class="form-control   money" id="idrmoney" value="' . $data['idr_anggaran'] . '" name="idr_anggaran[]" placeholder="" style="text-align: right;"></fieldset>

							<fieldset class="form-group   form8" for=""><label for="">Anggaran (USD)</label><input type="text" class="form-control   money" id="usdmoney" value="' . $data['usd_anggaran'] . '" name="usd_anggaran[]" placeholder="" style="text-align: right;"></fieldset>

							<fieldset class="form-group   form9" for=""><label for="">Tahun Anggaran*</label><input type="number" class="form-control  " id="" value="' . $data['year_anggaran'] . '" name="year_anggaran[]" placeholder=""></fieldset>';
        }

        $sistem_kontrak_select = json_decode($data['sistem_kontrak']);

        if (in_array('lumpsum', $sistem_kontrak_select)) {
            $lumpsum_select = 'selected';
        } else {
            $lumpsum_select = '';
        }

        if (in_array('unit_price', $sistem_kontrak_select)) {
            $unit_price_select = 'selected';
        } else {
            $unit_price_select = '';
        }

        if (in_array('modified', $sistem_kontrak_select)) {
            $modified_select = 'selected';
        } else {
            $modified_select = '';
        }

        if (in_array('outline', $sistem_kontrak_select)) {
            $outline_select = 'selected';
        } else {
            $outline_select = '';
        }

        if (in_array('turn_key', $sistem_kontrak_select)) {
            $turn_key_select = 'selected';
        } else {
            $turn_key_select = '';
        }

        if (in_array('sharing', $sistem_kontrak_select)) {
            $sharing_select = 'selected';
        } else {
            $sharing_select = '';
        }

        if (in_array('success_fee', $sistem_kontrak_select)) {
            $success_fee_select = 'selected';
        } else {
            $success_fee_select = '';
        }

        if (in_array('stockless', $sistem_kontrak_select)) {
            $stockless_select = 'selected';
        } else {
            $stockless_select = '';
        }

        if (in_array('on_call', $sistem_kontrak_select)) {
            $on_call_select = 'selected';
        } else {
            $on_call_select = '';
        }
        // <fieldset class="form-group read_only form_pr_lama " for="1234567890"><label for="1234567890">Lampiran PR (Lama)</label><b>:</b><span>'.$pr_lama.'</span></fieldset>

        //<fieldset class="form-group read_only form_kak_lama " for="1234567890"><label for="1234567890">KAK / Spesifikasi Teknis (Lama)</label><b>:</b><span>'.$kak_lama.'</span></fieldset>

        $table_detail_data = '<fieldset class="form-group   form0" for=""><label for="">No. PR</label><input type="text" class="form-control  " id="" value="' . $data['no_pr'] . '" name="no_pr" placeholder=""></fieldset>

							<fieldset class="form-group form1a " for="' . $data['tipe_pr'] . '">
								<input type="hidden" name="keterangan" value="' . $data['tipe_pr'] . '">
							</fieldset>

							<fieldset class="form-group   form1" for=""><label for="">Tipe PR</label>
							<select name="tipe_pr" id="" class="form-control">
							<option value="0">Pilih Dibawah Ini</option><option value="direct_charge">Direct Charges</option><option value="services">Services</option><option value="user_purchase">User Purchase</option><option value="nda">NDA</option></select></fieldset>

							<fieldset class="form-group   form2" for="">
								<label for="">Lampiran PR</label>
								' . $field_lampiran_pr . '
							</fieldset>

							<fieldset class="form-group   form3" for=""><label for="">Nama Pengadaan*</label><input type="text" class="form-control  " id="" value="' . $data['nama_pengadaan'] . '" name="nama_pengadaan" placeholder="">' . $is_multiyear_checked . '

							<fieldset class="form-group form4a " for="' . $data['tipe_pengadaan'] . '">
								<input type="hidden" name="keterangan" value="' . $data['tipe_pengadaan'] . '">
							</fieldset>

							<fieldset class="form-group   form4" for=""><label for="">Jenis Pengadaan*</label><select name="tipe_pengadaan" id="" class="form-control "><option value="0">Pilih Dibawah Ini</option><option value="jasa">Pengadaan Jasa</option><option value="barang">Pengadaan Barang</option></select></fieldset>

							<fieldset class="form-group form5a " for="' . $data['jenis_pengadaan'] . '">
								<input type="hidden" name="keterangan" value="' . $data['jenis_pengadaan'] . '">
							</fieldset>

							<fieldset class="form-group   form5" for=""><label for="">Jenis Detail Pengadaan*</label><select name="jenis_pengadaan" id="" class="form-control "><option value="" selected="">Pilih Jenis Pengadaan Diatas</option></select></fieldset>

							<fieldset class="form-group form6a " for="' . $data['metode_pengadaan'] . '">
								<input type="hidden" name="keterangan" value="' . $data['metode_pengadaan'] . '">
							</fieldset>

							<fieldset class="form-group   form6" for=""><label for="">Metode Pengadaan*</label><select name="metode_pengadaan" id="" class="form-control ">' . $option_metode_pengadaan . '</select></fieldset>

							' . $is_multiyear_field . '

							<fieldset class="form-group   form10" for="">
								<label for="">KAK / Spesifikasi Teknis</label>
								' . $field_lampiran_kak . '
							</fieldset>

							<fieldset class="form-group   form12" for="">
								<label for="">Ketersediaan HPS</label>
								<div class="radioWrapper">
									<input type="radio" value="0" style="float : left !important;" name="hps" class="form-control " ' . $hps_2 . '>
									<label>Tidak Ada</label> 
									<input type="radio" value="1" style="float : left !important;" name="hps" class="form-control " ' . $hps_1 . '>
									<label>Ada</label> 
								</div>
							</fieldset>

							<fieldset class="form-group   form12" for=""><label for="">Lingkup Kerja*</label><textarea class="form-control" id="" name="lingkup_kerja">' . $data['lingkup_kerja'] . '</textarea></fieldset>

							<fieldset class="form-group   form13" for="">
								<label for="">Penggolongan Penyedia Jasa (Usulan)</label>
								<select name="penggolongan_penyedia" id="" class="form-control">
									<option value="0">Pilih Dibawah Ini</option>
									<option value="perseorangan" ' . $selected1 . '>Perseorangan</option>
									<option value="usaha_kecil" ' . $selected2 . '>Usaha Kecil(K)</option>
									<option value="usaha_menengah" ' . $selected3 . '>Usaha Menengah(M)</option>
									<option value="usaha_besar" ' . $selected4 . '>Usaha Besar(B)</option>
								</select>
							</fieldset>

							<fieldset class="form-group   form14" for="">
								<label for="">Masa Penyelesaian Pekerjaan*</label>
								<div class="rangeWrapper">

									<input type="text" class="form-control datePicker dateRange " id="jwpp-start-picker" value="' . $data['jwpp_start'] . '" name="jwpp_start"> - 

									<input type="text" class="form-control datePicker dateRange " id="jwpp-end-picker" value="' . $data['jwpp_end'] . '" name="jwpp_end">
								</div>
							</fieldset>

							<fieldset class="form-group   form15" for="">
								<label for="">Masa Pemeliharaan</label>
								<div class="rangeWrapper">
									<input type="text" class="form-control datePicker dateRange " id="jwp-start-picker" value="' . $data['jwp_start'] . '" name="jwp_start"> - 
									<input type="text" class="form-control datePicker dateRange " id="jwp-end-picker" value="' . $data['jwp_end'] . '" name="jwp_end">
								</div>
							</fieldset>

							<fieldset class="form-group   form16" for=""><label for="">Metode Pembayaran (Usulan)</label><textarea class="form-control " id="" name="desc_metode_pembayaran" value="">' . $data['desc_metode_pembayaran'] . '</textarea></fieldset>

							<fieldset class="form-group   form17" for="">
							<label for="">Jenis Kontrak (Usulan)</label>
							<select name="jenis_kontrak" id="" class="form-control ">
							<option value="" selected="">Pilih Dibawah Ini</option>
							<option value="po" ' . $selected_1 . '>Purchase Order (PO)</option>
							<option value="GTC01" ' . $selected_2 . '>GTC01 - Kontrak Jasa Konstruksi non EPC</option>
							<option value="GTC02" ' . $selected_3 . '>GTC02 - Kontrak Jasa Konsultan</option>
							<option value="GTC03" ' . $selected_4 . '>GTC03 - Kontrak Jasa Umum</option>
							<option value="GTC04" ' . $selected_5 . '>GTC04 - Kontrak Jasa Pemeliharaan</option>
							<option value="GTC05" ' . $selected_6 . '>GTC05 - Kontrak Jasa Pembuatan Software</option>
							<option value="GTC06" ' . $selected_7 . '>GTC06 - Kontrak Jasa Sewa Fasilitas dan Alat</option>
							<option value="GTC07" ' . $selected_8 . '>GTC07 - Kontrak Jasa Tenaga Kerja.</option>
							<option value="spk" ' . $selected_9 . '>Perjanjian sederhana/SPK</option></select></fieldset>

							<fieldset class="form-group   form18" for="">
								<label for="">Sistem Kontrak (Usulan)</label>
								<select name="sistem_kontrak[]" id="" class="form-control  formMultiple" multiple="">
									<option value="lumpsum" ' . $lumpsum_select . '>Perikatan Harga - Lumpsum</option>
									<option value="unit_price" ' . $unit_price_select . '>Perikatan Harga - Unit Price</option>
									<option value="modified" ' . $modified_select . '>Perikatan Harga - Modified (lumpsum + unit price)</option>
									<option value="outline" ' . $outline_select . '>Perikatan Harga - Outline Agreement</option>
									<option value="turn_key" ' . $turn_key_select . '>Delivery - Turn Key</option>
									<option value="sharing" ' . $sharing_select . '>Delivery - Sharing Contract</option>
									<option value="success_fee" ' . $success_fee_select . '>Delivery - Success Fee</option>
									<option value="stockless" ' . $stockless_select . '>Delivery - Stockless Purchasing</option>
									<option value="on_call" ' . $on_call_select . '>Delivery - On Call Basic</option></select></fieldset>

							<fieldset class="form-group form20 " for="' . $data['id'] . '">
								<input type="hidden" name="keterangan" value="' . $data['id'] . '">
							</fieldset>

							<fieldset class="form-group   form19" for=""><label for="">Keterangan</label><textarea class="form-control " id="" name="desc_dokumen" value="">' . $data['desc_dokumen'] . '</textarea></fieldset>

							<div id="form-pic">
								
							</div>';

        $table_analisa_resiko = '<table class="penilaian_resiko preview">
						 			<thead class="sticky">
										<tr class="header">
							 				<th rowspan="2">No</th>
							 				<th rowspan="2">Daerah Risiko</th>
							 				<th rowspan="2">Apa</th>
							 				<th colspan="5" style="text-align: center;">Konsekuensi <br> L/M/H</th>
							 			</tr>
							 			<tr class="header bottom">
							 				<th>Manusia</th>
							 				<th>Aset</th>
							 				<th>Lingkungan</th>
							 				<th>Reputasi <br>& Hukum</th>
							 				<th>Catatan</th>
							 			</tr>
						 			</thead>
									' . $table_analisa . '
									' . $total_category . '
								</table>';
        // '.$total_category.'
        // <a class="button close" href="#modalWrap">Close</a>
        // $sistem_kontrak = json_decode($data['sistem_kontrak']);
        $button = '<button class="button is-primary" type="submit" name="approve"><span class="icon"><i class="far fa-thumbs-up"></i></span> Simpan Perubahan</button>';
        if ($data['tipe_pengadaan'] == 'barang' && $data['metode_pengadaan'] != 3) {
            // echo "Masuk ke barang bukan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('pemaketan/edit_step/' . $id) . '" method="POST" enctype="multipart/form-data">
					<div class="tab" id="detailData"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
						<button type="button" id="btnToDPT">Next</button>
						</div>
					</div>
					<div class="tab" id="DPT"> 
						<div class="tab-content">
							' . $dpt . '
						</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="toDetailData">Previous</a>
						<button type="button" id="btnToDPTList">Next</button>
						</div>
					</div>
					<div class="tab" id="DPTList">
						<div class="tab-content">
							<fieldset class="form-group   form0" for="">
								<label for="">Daftar DPT</label>
								<div class="checkboxWrapper">
								</div>
							</fieldset>
							<fieldset class="form-group   form1" for="">
								<label for="">Usulan Non DPT</label>
								<input type="text" class="form-control  " id="" value="" name="type_usulan" placeholder="">
							</fieldset>
						</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="toDPT">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['tipe_pengadaan'] == 'jasa' && $data['metode_pengadaan'] != 3) {
            // echo "Masuk ke jasa bukan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('pemaketan/edit_step/' . $id) . '" method="POST" enctype="multipart/form-data">
					<div class="tab" id="detailData"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <button type="button" id="btnToAnalisa">Next</button>
						</div>
					</div>
					<div class="tab" id="Analisa">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_analisa_resiko . '
							</div>
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="analisaToDetailData">Previous</a>
					      <button type="button" id="btnAnalisaToDPT">Next</button>
						</div>
					</div>
					<div class="tab" id="DPT"> 
						<div class="tab-content">
							' . $dpt . '
						</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="toAnalisa">Previous</a>
						<button type="button" id="btnToDPTList">Next</button>
						</div>
					</div>
					<div class="tab" id="DPTList">
						<div class="tab-content">
							<fieldset class="form-group   form0" for="">
								<label for="">Daftar DPT</label>
								<div class="checkboxWrapper">
								</div>
							</fieldset>
							<fieldset class="form-group   form1" for="">
								<label for="">Usulan Non DPT</label>
								<input type="text" class="form-control  " id="" value="" name="type_usulan" placeholder="">
							</fieldset>
						</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="toDPT">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['tipe_pengadaan'] == 'jasa' && $data['metode_pengadaan'] == 3) {
            // echo "Masuk ke jasa dan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('pemaketan/edit_step/' . $id) . '" method="POST" enctype="multipart/form-data">
					<div class="tab" id="detailData"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <button type="button" id="btnToAnalisa">Next</button>
						</div>
					</div>
					<div class="tab" id="Analisa">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_analisa_resiko . '
							</div>
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="toDetailData">Previous</a>
					      <button type="button" id="btnAnalisaToDPT">Next</button>
						</div>
					</div>
					<div class="tab" id="DPT"> 
						<div class="tab-content">
							' . $dpt . '
						</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="toAnalisa">Previous</a>
						<button type="button" id="btnToDPTList">Next</button>
						</div>
					</div>
					<div class="tab" id="DPTList">
						<div class="tab-content">
							<fieldset class="form-group   form0" for="">
								<label for="">Daftar DPT</label>
								<div class="checkboxWrapper">
								</div>
							</fieldset>
							<fieldset class="form-group   form1" for="">
								<label for="">Usulan Non DPT</label>
								<input type="text" class="form-control  " id="" value="" name="type_usulan" placeholder="">
							</fieldset>
						</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="toDPT">Previous</a>
					      <button type="button" id="btnDPTListToSwakelola">Next</button>
						</div>
					</div>
					<div class="tab" id="Swakelola">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_swakelola . '
							</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="toDPTList">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        } else if ($data['tipe_pengadaan'] == 'barang' && $data['metode_pengadaan'] == 3) {
            // echo "Masuk ke barang dan swakelola";
            $tabel .= '<form id="regForm" action="' . site_url('pemaketan/edit_step/' . $id) . '" method="POST" enctype="multipart/form-data">
					<div class="tab" id="detailData"> 
						<div class="tab-content">
							' . $table_detail_data . '
						</div>
						<div class="tab-footer">
					      <a class="button" href="#modalWrap" id="btnToDPT">Next</a>
						</div>
					</div>
					<div class="tab" id="DPT"> 
						<div class="tab-content">
							' . $dpt . '
						</div>
						<div class="tab-footer">
						<a class="button" href="#modalWrap" id="toDetailData">Previous</a>
						<button type="button" id="btnToDPTList">Next</button>
						</div>
					</div>
					<div class="tab" id="DPTList">
						<div class="tab-content">
							<fieldset class="form-group   form0" for="">
								<label for="">Daftar DPT</label>
								<div class="checkboxWrapper">
								</div>
							</fieldset>
							<fieldset class="form-group   form1" for="">
								<label for="">Usulan Non DPT</label>
								<input type="text" class="form-control  " id="" value="" name="type_usulan" placeholder="">
							</fieldset>
						</div>
						<div class="tab-footer">
					      <button type="button" id="toDPT">Previous</button>
					      <button type="button" id="btnDPTListToSwakelola">Next</button>
						</div>
					</div>
					<div class="tab" id="Swakelola">
						<div class="tab-content">
							<div class="ps-wrapper" style="width: 100%;">
						 		' . $table_swakelola . '
							</div>
						<div class="tab-footer">
						' . $button . ' <br>
					      <button type="button" id="toDPTList">Previous</button>
						</div>
					</div>
					<div class="form-keterangan-reject modal-reject-step">
						<form action="' . site_url('fppbj/btnCallback/' . $id . '/' . $param) . '" method="POST">
							<span class="fkr-btn-close">
								<i class="fas fa-times close-reject-step"></i>
							</span>
							<div class="fkr-content">
								<fieldset class="form-group" for="" style="display: block;">
									<label for="keterangan">Keterangan</label>
									<textarea type="text" class="form-control fkr-textarea" id="" value="" name="keterangan" placeholder="isi keterangan penolakan"></textarea>
								</fieldset>
							</div>
							<div class="fkr-btn-group">
								<button class="is-danger" type="submit" name="reject">Reject</button>
							</div>
						</form>
					</div>
					</form>';
        }
        echo $tabel;
    }

    public function edit_step($id)
    {
        $save = $this->input->post();
        $data     = $this->pm->get_data_step($id);
        // $id_analisa_risiko = $this->pm->get_id_analisa_risiko($id);
        // print_r($id_analisa_risiko);die;
        // print_r($save);die;
        $config['upload_path'] = './assets/lampiran/pr_lampiran/';
        $config['allowed_types'] = '*';
        // $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf|';

        $this->load->library('upload', $config, 'uploadprlampiran');
        $this->uploadprlampiran->initialize($config);
        $upload_pr = $this->uploadprlampiran->do_upload('pr_lampiran');

        $config_kak['upload_path'] = './assets/lampiran/kak_lampiran/';
        $config_kak['allowed_types'] = '*';
        // $config_kak['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

        $this->load->library('upload', $config_kak, 'uploadkaklampiran');
        $this->uploadkaklampiran->initialize($config_kak);

        $upload_kak = $this->uploadkaklampiran->do_upload('kak_lampiran');

        $file_name_pr  = $this->uploadprlampiran->data()['file_name'];
        $file_name_kak = $this->uploadkaklampiran->data()['file_name'];

        foreach ($save['idr_anggaran'] as $key => $value) {
            // $tr_price[$key]['id_fppbj']		  = $input;
            $tr_price[$key]['idr_anggaran'] = str_replace(',', '', $value);
            $tr_price[$key]['usd_anggaran'] = $save['usd_anggaran'][$key];
            $tr_price[$key]['year_anggaran'] = $save['year_anggaran'][$key];
        }

        unset($save['idr_anggaran']);
        unset($save['usd_anggaran']);
        unset($save['year_anggaran']);

        foreach ($tr_price as $key => $value) {
            $save['idr_anggaran'] += $tr_price[$key]['idr_anggaran'];
            $save['usd_anggaran'] += $tr_price[$key]['usd_anggaran'];
        }

        foreach ($tr_price as $key => $value) {
            $tr_price[$key]['id_fppbj'] = $id;
        }

        $year_anggaran_ = '';
        $idr_anggaran_ = '';
        $usd_anggaran_ = '';
        foreach ($tr_price as $key => $value) {
            $year_anggaran_ .= $value['year_anggaran'] . ',';
            $idr_anggaran_  .= $value['idr_anggaran'] . ',';
            $usd_anggaran_  .= $value['usd_anggaran'] . ',';
        }
        $year_anggaran = substr($year_anggaran_, substr($year_anggaran_), -1);
        $idr_anggaran  = substr($idr_anggaran_, substr($idr_anggaran_), -1);
        $usd_anggaran  = substr($usd_anggaran_, substr($usd_anggaran_), -1);

        $this->db->where('id_fppbj', $id)->delete('tr_price');
        $this->db->insert_batch('tr_price', $tr_price);

        // echo $data['pr_lampiran'].'<-ini pr ini kak->'.$data['kak_lampiran'];die;
        if ($save['pr_lampiran'] != '') {
            // echo "Kosong"; die;
            $lampiran_pr = $save['pr_lampiran'];
        } else {
            // echo "Tidak Kosong"; die;
            $lampiran_pr = $file_name_pr;
        }

        if ($save['kak_lampiran'] != '') {
            $lampiran_kak = $save['kak_lampiran'];
        } else {
            $lampiran_kak = $file_name_kak;
        }

        if ($save['year_anggaran'] != '') {
            $save_year = $save['year_anggaran'];
        } else {
            $save_year = $year_anggaran;
        }

        if ($data['is_reject'] == '1') {
            $approved = $data['is_approved'];
        } else {
            $approved = 0;
        }

        if ($data['is_approved_hse'] != '2') {
            $i_h = $data['is_approved_hse'];
        } else {
            $i_h = 0;
        }
        // echo $year_anggaran." - ".$idr_anggaran." - ".$usd_anggaran;die;
        // print_r($save);die;

        $data_fppbj = array(
            'is_multiyear'             =>    $save['is_multiyear'],
            'no_pr'                  => $save['no_pr'],
            'tipe_pr'                   => $save['tipe_pr'],
            'pr_lampiran'              => $lampiran_pr,
            'nama_pengadaan'          => $save['nama_pengadaan'],
            'tipe_pengadaan'          => $save['tipe_pengadaan'],
            'jenis_pengadaan'          => $save['jenis_pengadaan'],
            'metode_pengadaan'       => $save['metode_pengadaan'],
            'idr_anggaran'            => str_replace(',', '', $save['idr_anggaran']),
            'usd_anggaran'              => str_replace(',', '', $save['usd_anggaran']),
            'year_anggaran'          => $save_year,
            'kak_lampiran'              => $lampiran_kak,
            'hps'                      => $save['hps'],
            'lingkup_kerja'          => $save['lingkup_kerja'],
            'penggolongan_penyedia'  => $save['penggolongan_penyedia'],
            'jwpp_start'              => $save['jwpp_start'],
            'jwpp_end'                  => $save['jwpp_end'],
            'jwp_start'              => $save['jwp_start'],
            'jwp_end'                  => $save['jwp_end'],
            'desc_metode_pembayaran' => $save['desc_metode_pembayaran'],
            'jenis_kontrak'          => $save['jenis_kontrak'],
            'sistem_kontrak'          => json_encode($save['sistem_kontrak']),
            'desc_dokumen'               => $save['desc_dokumen'],
            'is_approved'             => $approved,
            'is_reject'                 => 0,
            'is_approved_hse'         => $i_h,
            'edit_stamp'             => date('Y-m-d H:i:s')
        );

        $this->fm->edit_tr_email_blast($id, $save['jwpp_start'], $save['metode_pengadaan']);
        $update_fppbj = $this->db->where('id', $id)->update('ms_fppbj', $data_fppbj);

        if ($update_fppbj) {
            $by_division = $this->get_division($this->session->userdata('admin')['id_division']);
            $division = $this->get_email_division($this->session->userdata('admin')['id_division']);

            $to_ = '';
            foreach ($division as $key => $value) {
                $to_ .= $value['email'] . ' ,';
            }
            $to = substr($to_, substr($to_), -2);
            $subject = 'FPPBJ telah diedit.';
            $message = 'FPPBJ telah di ubah menjadi ' . $save['nama_pengadaan'] . ' oleh ' . $by_division['name'];
            $this->send_mail($to, $subject, $message, $link);

            $activity = $this->session->userdata('admin')['division'] . " mengubah data : " . $save['nama_pengadaan'];

            $this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

            $data_note = array(
                'id_user' => $this->session->userdata('admin')['id_division'],
                'id_fppbj' => $id,
                'value' => $data['nama_pengadaan'] . ' telah di ubah menjadi ' . $save['nama_pengadaan'] . ' oleh divisi ' . $by_division['name'],
                'entry_stamp' => date('Y-m-d H:i:s'),
                'is_active' => 1
            );
            $this->db->insert('tr_note', $data_note);
        }

        $analisa_resiko['apa']             = $save['apa'];
        unset($save['apa']);
        $analisa_resiko['manusia']         = $save['manusia'];
        unset($save['manusia']);
        $analisa_resiko['asset']         = $save['asset'];
        unset($save['asset']);
        $analisa_resiko['lingkungan']     = $save['lingkungan'];
        unset($save['lingkungan']);
        $analisa_resiko['hukum']         = $save['hukum'];
        unset($save['hukum']);

        // print_r($analisa_resiko);die;

        for ($q = 0; $q < 10; $q++) {

            $analisa_resiko['detail'][$q]['apa']            = $analisa_resiko['apa'][$q];
            $analisa_resiko['detail'][$q]['manusia']        = $analisa_resiko['manusia'][$q];
            $analisa_resiko['detail'][$q]['asset']             = $analisa_resiko['asset'][$q];
            $analisa_resiko['detail'][$q]['lingkungan']     = $analisa_resiko['lingkungan'][$q];
            $analisa_resiko['detail'][$q]['hukum']             = $analisa_resiko['hukum'][$q];
        }
        // print_r($analisa_resiko['detail']); print_r($this->session->userdata());die;
        $analisa_resiko['id_fppbj'] = $id;
        $this->session->set_userdata('analisa_resiko', array('id' => $input, 'skor' => $analisa_resiko));

        $usulan                 = $save['type_usulan'];
        $analisa_risiko         = $this->session->userdata('analisa_resiko');
        $dpt_list['dpt']         = $this->input->post('type');
        $dpt_list['usulan']        = $usulan;

        // print_r($dpt_list);die;

        $id_analisa_risiko = $this->pm->get_id_analisa_risiko($id);

        $data_fppbj['is_status'] = $data['is_status'];
        $data_fppbj['dpt_list'] = json_encode($dpt_list);
        $data_fppbj['id_pic']    = $data['id_pic'];
        $this->insertHistoryPengadaan($id, 'perubahan', $data_fppbj);

        $this->db->where('id_fppbj', $id)->delete('tr_analisa_risiko');
        $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
        $input = $this->db->insert_id();

        // echo $this->db->last_query();
        foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
            //print_r( $analisa_risiko['skor']['detail'][$key]);die;
            $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
            //print_r($analisa_risiko['skor']['detail'][$key]);
            $this->db->where('id_analisa_risiko', $id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
            $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        }

        foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
            $analisa_risiko['skor']['detail'][$key]['id_pengadaan'] = $id;

            $this->db->insert('tr_history_analisa_resiko', $analisa_risiko['skor']['detail'][$key]);
        }

        // if ($dpt_list['dpt'] != '' && $dpt_list['usulan'] != '') {
        // 	$this->db->where('id_fppbj',$id)->delete('tr_analisa_risiko');
        // 	$input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
        // 	$input = $this->db->insert_id();

        // 	// echo $this->db->last_query();
        // 	foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
        // 	//print_r( $analisa_risiko['skor']['detail'][$key]);die;
        // 	$analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
        // 	//print_r($analisa_risiko['skor']['detail'][$key]);
        // 	$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
        // 	$this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        // 	}
        // }else if ($dpt_list['dpt'] != '') {
        // 	// echo "string 1";die;
        // 	$get_usulan = $this->db->where('id_fppbj',$id)->get('tr_analisa_risiko')->row_array();
        // 	$usulan_lama = json_decode($get_usulan['dpt_list']);
        // 	// print_r($usulan_lama->dpt);die;
        // 	$dpt_list['usulan'] = $usulan_lama->usulan;

        // 	$this->db->where('id_fppbj',$id)->delete('tr_analisa_risiko');
        // 	$input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
        // 	$input = $this->db->insert_id();

        // 	// echo $this->db->last_query();
        // 	foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
        // 	//print_r( $analisa_risiko['skor']['detail'][$key]);die;
        // 	$analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
        // 	//print_r($analisa_risiko['skor']['detail'][$key]);
        // 	$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
        // 	$this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        // 	}
        // // echo $this->db->last_query();	
        // } else if ($dpt_list['usulan'] != '') {
        // 	// echo "string 2";die;
        // 	$get_usulan = $this->db->where('id_fppbj',$id)->get('tr_analisa_risiko')->row_array();
        // 	$usulan_lama = json_decode($get_usulan['dpt_list']);
        // 	// print_r($usulan_lama->dpt);die;
        // 	$dpt_list['dpt'] = $usulan_lama->dpt;

        // 	$this->db->where('id_fppbj',$id)->delete('tr_analisa_risiko');
        // 	$input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
        // 	$input = $this->db->insert_id();

        // 	// echo $this->db->last_query();
        // 	foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
        // 	//print_r( $analisa_risiko['skor']['detail'][$key]);die;
        // 	$analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
        // 	//print_r($analisa_risiko['skor']['detail'][$key]);
        // 	$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
        // 	$this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        // 	}
        // // echo $this->db->last_query();	
        // } else{
        // 	// echo "string 3";die;
        // 	// $input = $id_analisa_risiko['id'];
        // 	// print_r($analisa_risiko['skor']['detail']);die;
        // 	$get_dpt_lama = $this->db->where('id',$id_analisa_risiko['id'])->get('tr_analisa_risiko')->row_array();
        // 	//print_r($get_dpt_lama);die;
        // 	if (count($get_dpt_lama) > 0) {
        // 		$this->db->where('id',$get_dpt_lama['id'])->delete('tr_analisa_risiko');
        // 		$get_dpt_lama['id'] = null;
        // 		// print_r($get_dpt_lama);die;
        // 		$input = $this->db->insert('tr_analisa_risiko', $get_dpt_lama);
        // 		$input = $this->db->insert_id();
        // 		// echo $this->db->last_query();
        // 		$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
        // 		foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
        // 		$analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
        // 			// print_r($analisa_risiko['skor']['detail'][$key]);die;
        // 			$this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        // 		}
        // 	} else {
        // 		$input = $this->db->insert('tr_analisa_risiko', array('id_fppbj'=>$id));
        // 		$input = $this->db->insert_id();
        // 		// echo $this->db->last_query();
        // 		//$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
        // 		foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
        // 		$analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
        // 			// print_r($analisa_risiko['skor']['detail'][$key]);die;
        // 			$this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
        // 		}
        // 	}
        // }

        $analisa_swakelola['waktu']     = $save['waktu'];
        unset($save['waktu']);
        $analisa_swakelola['biaya']     = $save['biaya'];
        unset($save['biaya']);
        $analisa_swakelola['tenaga']     = $save['tenaga'];
        unset($save['tenaga']);
        $analisa_swakelola['bahan']     = $save['bahan'];
        unset($save['bahan']);
        $analisa_swakelola['peralatan'] = $save['peralatan'];
        unset($save['peralatan']);
        $analisa_swakelola['id_fppbj'] = $id;
        $get_swakelola = $this->db->where('id_fppbj', $id)->get('tr_analisa_swakelola')->row_array();
        $total_swakelola = count($get_swakelola);
        // echo($total_swakelola);die;
        if ($total_swakelola > 0) {
            $this->db->where('id_fppbj', $id)->update('tr_analisa_swakelola', $analisa_swakelola);
        } else {
            $this->db->insert('tr_analisa_swakelola', $analisa_swakelola);
        }

        unset($analisa_swakelola['id_fppbj']);

        $analisa_swakelola['id_pengadaan'] = $id;

        $this->db->insert('tr_history_swakelola', $analisa_swakelola);

        redirect('pemaketan/division/' . $this->session->userdata('admin')['id_division']);
    }

    public function edit_step_($id)
    {
        $save = $this->input->post();
        $data     = $this->pm->get_data_step($id);
        // $id_analisa_risiko = $this->pm->get_id_analisa_risiko($id);
        // print_r($id_analisa_risiko);die;
        // print_r($save);die;
        $config['upload_path'] = './assets/lampiran/pr_lampiran/';
        $config['allowed_types'] = 'jpeg|jpg|png|gif|';

        $this->load->library('upload', $config, 'uploadprlampiran');
        $this->uploadprlampiran->initialize($config);
        $upload_pr = $this->uploadprlampiran->do_upload('pr_lampiran');

        $config_kak['upload_path'] = './assets/lampiran/kak_lampiran/';
        $config_kak['allowed_types'] = 'jpeg|jpg|png|gif|';

        $this->load->library('upload', $config_kak, 'uploadkaklampiran');
        $this->uploadkaklampiran->initialize($config_kak);

        $upload_kak = $this->uploadkaklampiran->do_upload('kak_lampiran');

        $file_name_pr  = $this->uploadprlampiran->data()['file_name'];
        $file_name_kak = $this->uploadkaklampiran->data()['file_name'];

        foreach ($save['idr_anggaran'] as $key => $value) {
            // $tr_price[$key]['id_fppbj']		  = $input;
            $tr_price[$key]['idr_anggaran'] = $value;
            $tr_price[$key]['usd_anggaran'] = $save['usd_anggaran'][$key];
            $tr_price[$key]['year_anggaran'] = $save['year_anggaran'][$key];
        }

        unset($save['idr_anggaran']);
        unset($save['usd_anggaran']);
        unset($save['year_anggaran']);

        foreach ($tr_price as $key => $value) {
            $save['idr_anggaran'] += $tr_price[$key]['idr_anggaran'];
            $save['usd_anggaran'] += $tr_price[$key]['usd_anggaran'];
        }

        foreach ($tr_price as $key => $value) {
            $tr_price[$key]['id_fppbj'] = $id;
        }

        $year_anggaran_ = '';
        $idr_anggaran_ = '';
        $usd_anggaran_ = '';
        foreach ($tr_price as $key => $value) {
            $year_anggaran_ .= $value['year_anggaran'] . ',';
            $idr_anggaran_  .= $value['idr_anggaran'] . ',';
            $usd_anggaran_  .= $value['usd_anggaran'] . ',';
        }
        $year_anggaran = substr($year_anggaran_, substr($year_anggaran_), -1);
        $idr_anggaran  = substr($idr_anggaran_, substr($idr_anggaran_), -1);
        $usd_anggaran  = substr($usd_anggaran_, substr($usd_anggaran_), -1);

        // echo $year_anggaran." - ".str_replace(',', '', $idr_anggaran)." - ".$usd_anggaran;die;

        $this->db->where('id_fppbj', $id)->delete('tr_price');
        $this->db->insert_batch('tr_price', $tr_price);

        // echo $data['pr_lampiran'].'<-ini pr ini kak->'.$data['kak_lampiran'];die;
        if ($save['pr_lampiran'] != '') {
            // echo "Kosong"; die;
            $lampiran_pr = $save['pr_lampiran'];
        } else {
            // echo "Tidak Kosong"; die;
            $lampiran_pr = $file_name_pr;
        }

        if ($save['kak_lampiran'] != '') {
            $lampiran_kak = $save['kak_lampiran'];
        } else {
            $lampiran_kak = $file_name_kak;
        }

        if ($save['year_anggaran'] != '') {
            $save_year = $save['year_anggaran'];
        } else {
            $save_year = $year_anggaran;
        }

        if ($data['is_reject'] == '1') {
            $approved = $data['is_approved'];
        } else {
            $approved = 0;
        }

        if ($data['is_approved_hse'] != '2') {
            $i_h = $data['is_approved_hse'];
        } else {
            $i_h = 0;
        }

        $data_fppbj = array(
            'is_multiyear'             =>    $save['is_multiyear'],
            'no_pr'                  => $save['no_pr'],
            'tipe_pr'                   => $save['tipe_pr'],
            'pr_lampiran'              => $lampiran_pr,
            'nama_pengadaan'          => $save['nama_pengadaan'],
            'tipe_pengadaan'          => $save['tipe_pengadaan'],
            'jenis_pengadaan'          => $save['jenis_pengadaan'],
            'metode_pengadaan'       => $save['metode_pengadaan'],
            'idr_anggaran'            => str_replace(',', '', $idr_anggaran),
            'usd_anggaran'              => str_replace(',', '', $usd_anggaran),
            'year_anggaran'          => $save_year,
            'kak_lampiran'              => $lampiran_kak,
            'hps'                      => $save['hps'],
            'lingkup_kerja'          => $save['lingkup_kerja'],
            'penggolongan_penyedia'  => $save['penggolongan_penyedia'],
            'jwpp_start'              => $save['jwpp_start'],
            'jwpp_end'                  => $save['jwpp_end'],
            'jwp_start'              => $save['jwp_start'],
            'jwp_end'                  => $save['jwp_end'],
            'desc_metode_pembayaran' => $save['desc_metode_pembayaran'],
            'jenis_kontrak'          => $save['jenis_kontrak'],
            'sistem_kontrak'          => json_encode($save['sistem_kontrak']),
            'desc_dokumen'               => $save['desc_dokumen'],
            'is_approved'             => $approved,
            'is_reject'                 => 0,
            'is_approved_hse'         => $i_h
        );

        // print_r($data_fppbj);die;

        $this->fm->edit_tr_email_blast($id, $save['jwpp_start'], $save['metode_pengadaan']);
        $update_fppbj = $this->db->where('id', $id)->update('ms_fppbj', $data_fppbj);

        if ($update_fppbj) {
            $by_division = $this->get_division($this->session->userdata('admin')['id_division']);
            $division = $this->get_email_division($this->session->userdata('admin')['id_division']);

            $to_ = '';
            foreach ($division as $key => $value) {
                $to_ .= $value['email'] . ' ,';
            }
            $to = substr($to_, substr($to_), -2);
            $subject = 'FPPBJ telah diedit.';
            $message = 'FPPBJ telah di ubah menjadi ' . $save['nama_pengadaan'] . ' oleh ' . $by_division['name'];
            $this->send_mail($to, $subject, $message, $link);

            $activity = $this->session->userdata('admin')['id_division'] . " mengubah data : " . $save['nama_pengadaan'];

            $this->activity_log($this->session->userdata('admin')['id_user'], $activity, $id);

            $data_note = array(
                'id_user' => $this->session->userdata('admin')['id_division'],
                'id_fppbj' => $id,
                'value' => $fppbj_lama['nama_pengadaan'] . ' telah di ubah menjadi ' . $save['nama_pengadaan'] . ' oleh divisi' . $by_division['name'],
                'entry_stamp' => date('Y-m-d H:i:s'),
                'is_active' => 1
            );
            $this->db->insert('tr_note', $data_note);
        }

        $analisa_resiko['apa']             = $save['apa'];
        unset($save['apa']);
        $analisa_resiko['manusia']         = $save['manusia'];
        unset($save['manusia']);
        $analisa_resiko['asset']         = $save['asset'];
        unset($save['asset']);
        $analisa_resiko['lingkungan']     = $save['lingkungan'];
        unset($save['lingkungan']);
        $analisa_resiko['hukum']         = $save['hukum'];
        unset($save['hukum']);

        // print_r($analisa_resiko);die;

        for ($q = 0; $q < 10; $q++) {

            $analisa_resiko['detail'][$q]['apa']            = $analisa_resiko['apa'][$q];
            $analisa_resiko['detail'][$q]['manusia']        = $analisa_resiko['manusia'][$q];
            $analisa_resiko['detail'][$q]['asset']             = $analisa_resiko['asset'][$q];
            $analisa_resiko['detail'][$q]['lingkungan']     = $analisa_resiko['lingkungan'][$q];
            $analisa_resiko['detail'][$q]['hukum']             = $analisa_resiko['hukum'][$q];
        }
        // print_r($analisa_resiko['detail']); print_r($this->session->userdata());die;
        $analisa_resiko['id_fppbj'] = $id;
        $this->session->set_userdata('analisa_resiko', array('id' => $input, 'skor' => $analisa_resiko));

        $usulan                 = $save['type_usulan'];
        $analisa_risiko         = $this->session->userdata('analisa_resiko');
        $dpt_list['dpt']         = $this->input->post('type');
        $dpt_list['usulan']        = $usulan;

        // print_r($dpt_list);die;

        $id_analisa_risiko = $this->pm->get_id_analisa_risiko($id);

        if ($dpt_list['dpt'] != '' && $dpt_list['usulan'] != '') {
            $this->db->where('id_fppbj', $id)->delete('tr_analisa_risiko');
            $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
            $input = $this->db->insert_id();

            // echo $this->db->last_query();
            foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                //print_r( $analisa_risiko['skor']['detail'][$key]);die;
                $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                //print_r($analisa_risiko['skor']['detail'][$key]);
                $this->db->where('id_analisa_risiko', $id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
                $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
            }
        } else if ($dpt_list['dpt'] != '') {
            // echo "string 1";die;
            $get_usulan = $this->db->where('id_fppbj', $id)->get('tr_analisa_risiko')->row_array();
            $usulan_lama = json_decode($get_usulan['dpt_list']);
            // print_r($usulan_lama->dpt);die;
            $dpt_list['usulan'] = $usulan_lama->usulan;

            $this->db->where('id_fppbj', $id)->delete('tr_analisa_risiko');
            $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
            $input = $this->db->insert_id();

            // echo $this->db->last_query();
            foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                //print_r( $analisa_risiko['skor']['detail'][$key]);die;
                $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                //print_r($analisa_risiko['skor']['detail'][$key]);
                $this->db->where('id_analisa_risiko', $id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
                $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
            }
            // echo $this->db->last_query();	
        } else if ($dpt_list['usulan'] != '') {
            // echo "string 2";die;
            $get_usulan = $this->db->where('id_fppbj', $id)->get('tr_analisa_risiko')->row_array();
            $usulan_lama = json_decode($get_usulan['dpt_list']);
            // print_r($usulan_lama->dpt);die;
            $dpt_list['dpt'] = $usulan_lama->dpt;

            $this->db->where('id_fppbj', $id)->delete('tr_analisa_risiko');
            $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id, 'dpt_list' => json_encode($dpt_list)));
            $input = $this->db->insert_id();

            // echo $this->db->last_query();
            foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                //print_r( $analisa_risiko['skor']['detail'][$key]);die;
                $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                //print_r($analisa_risiko['skor']['detail'][$key]);
                $this->db->where('id_analisa_risiko', $id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
                $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
            }
            // echo $this->db->last_query();	
        } else {
            // echo "string 3";die;
            // $input = $id_analisa_risiko['id'];
            // print_r($analisa_risiko['skor']['detail']);die;
            $get_dpt_lama = $this->db->where('id', $id_analisa_risiko['id'])->get('tr_analisa_risiko')->row_array();
            //print_r($get_dpt_lama);die;
            if (count($get_dpt_lama) > 0) {
                $this->db->where('id', $get_dpt_lama['id'])->delete('tr_analisa_risiko');
                $get_dpt_lama['id'] = null;
                // print_r($get_dpt_lama);die;
                $input = $this->db->insert('tr_analisa_risiko', $get_dpt_lama);
                $input = $this->db->insert_id();
                // echo $this->db->last_query();
                $this->db->where('id_analisa_risiko', $id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
                foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                    $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                    // print_r($analisa_risiko['skor']['detail'][$key]);die;
                    $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
                }
            } else {
                $input = $this->db->insert('tr_analisa_risiko', array('id_fppbj' => $id));
                $input = $this->db->insert_id();
                // echo $this->db->last_query();
                //$this->db->where('id_analisa_risiko',$id_analisa_risiko['id'])->delete('tr_analisa_risiko_detail');
                foreach ($analisa_risiko['skor']['detail'] as $key => $value) {
                    $analisa_risiko['skor']['detail'][$key]['id_analisa_risiko'] = $input;
                    // print_r($analisa_risiko['skor']['detail'][$key]);die;
                    $this->db->insert('tr_analisa_risiko_detail', $analisa_risiko['skor']['detail'][$key]);
                }
            }
        }

        $analisa_swakelola['waktu']     = $save['waktu'];
        unset($save['waktu']);
        $analisa_swakelola['biaya']     = $save['biaya'];
        unset($save['biaya']);
        $analisa_swakelola['tenaga']     = $save['tenaga'];
        unset($save['tenaga']);
        $analisa_swakelola['bahan']     = $save['bahan'];
        unset($save['bahan']);
        $analisa_swakelola['peralatan'] = $save['peralatan'];
        unset($save['peralatan']);
        $analisa_swakelola['id_fppbj'] = $id;
        $get_swakelola = $this->db->where('id_fppbj', $id)->get('tr_analisa_swakelola')->row_array();
        $total_swakelola = count($get_swakelola);
        // echo($total_swakelola);die;
        if ($total_swakelola > 0) {
            $this->db->where('id_fppbj', $id)->update('tr_analisa_swakelola', $analisa_swakelola);
        } else {
            $this->db->insert('tr_analisa_swakelola', $analisa_swakelola);
        }

        redirect('pemaketan/division/' . $this->session->userdata('admin')['id_division']);
    }

    public function get_multi_years($id)
    {
        echo json_encode($this->pm->get_multi_years($id));
    }

    public function total_year_anggaran($id_fppbj)
    {
        $query = $this->db->where('id_fppbj', $id_fppbj)->get('tr_price')->result_array();
        $total_year_anggaran = count($query);
        return $total_year_anggaran;
    }

    function formFilter()
    {
        $this->form = array(
            'filter' => array(
                array(
                    'type'    =>    'text',
                    'label'    =>    'Nama Pengadaan',
                    'field' =>  'nama_pengadaan'
                ),
                array(
                    'type'    =>    'text',
                    'label'    =>    'Tahun Anggaran',
                    'field' =>  'year_anggaran'
                ),

            )
        );
        $return['button'] = array(
            array(
                'type' => 'button',
                'label' => 'Filter',
                'class' => 'btn-filter'
            ),
            array(
                'type' => 'reset',
                'label' => 'Reset'
            )
        );
        $return['form'] = $this->form['filter'];
        echo json_encode($return);
    }
}
