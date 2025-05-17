<?php

class PemaketanFormConfig {
    protected $formConfig;

    public function __construct() {
        $this->initializeFormConfig();
    }

    /**
     * Initialize form configuration
     */
    protected function initializeFormConfig() {
        $this->formConfig = [
            'filter' => [
                'fields' => [
                    [
                        'field' => 'search',
                        'type' => 'text',
                        'label' => 'Search'
                    ],
                    [
                        'field' => 'status',
                        'type' => 'dropdown',
                        'label' => 'Status',
                        'source' => [
                            '' => 'All',
                            '1' => 'Active',
                            '0' => 'Inactive'
                        ]
                    ]
                ]
            ],
            'wizard' => [
                'step' => [
                    'intro' => $this->getIntroStepConfig(),
                    'fppbj' => $this->getFppbjStepConfig(),
                    'resiko' => $this->getResikoStepConfig()
                ]
            ]
        ];
    }

    /**
     * Get form configuration
     * @param string $type
     * @return array
     */
    public function getFormConfig($type) {
        return $this->formConfig[$type] ?? [];
    }

    /**
     * Get intro step configuration
     * @return array
     */
    protected function getIntroStepConfig() {
        return [
            'label' => 'Intro',
            'form' => [
                [
                    'field' => 'intro',
                    'type' => 'intro',
                    'label' => 'Intro FPPBJ'
                ]
            ],
            'button' => [
                [
                    'type' => 'next',
                    'label' => 'Mulai',
                    'class' => 'btn-next'
                ]
            ]
        ];
    }

    /**
     * Get FPPBJ step configuration
     * @return array
     */
    protected function getFppbjStepConfig() {
        return [
            'label' => 'Form FPPBJ',
            'form' => $this->getFppbjFormFields(),
            'button' => [
                [
                    'type' => 'prev',
                    'label' => 'Sebelumnya',
                    'class' => 'btn-prev'
                ],
                [
                    'type' => 'next',
                    'label' => 'Lanjut',
                    'class' => 'btn-to'
                ]
            ]
        ];
    }

    /**
     * Get resiko step configuration
     * @return array
     */
    protected function getResikoStepConfig() {
        return [
            'label' => 'Analisa Resiko',
            'form' => [
                [
                    'type' => 'penilaianResiko',
                    'label' => 'Penilaian Resiko'
                ],
                [
                    'field' => 'resiko',
                    'type' => 'matrix_resiko',
                    'label' => 'Matrix Resiko',
                    'full' => true
                ]
            ],
            'button' => [
                [
                    'type' => 'prev',
                    'label' => 'Sebelumnya',
                    'class' => 'btn-prev'
                ],
                [
                    'type' => 'submit',
                    'label' => 'Simpan',
                    'class' => 'btn-submit'
                ]
            ]
        ];
    }

    /**
     * Get FPPBJ form fields configuration
     * @return array
     */
    protected function getFppbjFormFields() {
        return [
            [
                'field' => 'is_perencanaan',
                'type' => 'radio',
                'label' => 'Masuk Perencanaan ?',
                'source' => [
                    '1' => 'Masuk Perencanaan',
                    '2' => 'Tidak Masuk Perencanaan'
                ],
                'rules' => 'required'
            ],
            [
                'field' => 'no_pr',
                'type' => 'text',
                'label' => 'No. PR'
            ],
            [
                'field' => 'tipe_pr',
                'type' => 'dropdown',
                'label' => 'Tipe PR',
                'source' => [
                    '' => 'Pilih Dibawah Ini',
                    'direct_charge' => 'Direct Charges',
                    'services' => 'Services',
                    'user_purchase' => 'User Purchase',
                    'nda' => 'NDA'
                ],
                'rules' => 'required'
            ],
            [
                'field' => 'pr_lampiran',
                'type' => 'file',
                'label' => 'Lampiran PR',
                'upload_url' => site_url('pemaketan/upload_lampiran'),
                'allowed_types' => '*',
                'rules' => '',
                'value' => ''
            ],
            [
                'field' => 'nama_pengadaan',
                'type' => 'text',
                'label' => 'Nama Pengadaan',
                'rules' => 'required'
            ],
            [
                'field' => 'pengadaan',
                'type' => 'dropdown',
                'label' => 'Jenis Pengadaan',
                'source' => [
                    '' => 'Pilih Dibawah Ini',
                    'jasa' => 'Pengadaan Jasa',
                    'barang' => 'Pengadaan Barang'
                ],
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_pengadaan',
                'type' => 'dropdown',
                'label' => 'Jenis Detail Pengadaan',
                'source' => [
                    '' => 'Pilih Jenis Pengadaan Diatas'
                ],
                'rules' => 'required'
            ],
            [
                'field' => 'metode_pengadaan',
                'type' => 'dropdown',
                'label' => 'Metode Pengadaan',
                'source' => $this->getProcMethod(),
                'rules' => 'required'
            ],
            [
                'field' => 'idr_anggaran[]',
                'type' => 'currency',
                'label' => 'Anggaran (IDR)'
            ],
            [
                'field' => 'usd_anggaran[]',
                'type' => 'currency',
                'label' => 'Anggaran (USD)'
            ],
            [
                'field' => 'year_anggaran[]',
                'type' => 'number',
                'label' => 'Tahun Anggaran',
                'rules' => 'required'
            ],
            [
                'field' => 'kak_lampiran',
                'type' => 'file',
                'label' => 'KAK / Spesifikasi Teknis',
                'upload_path' => base_url('assets/lampiran/kak_lampiran/'),
                'upload_url' => site_url('fkpbj/upload_lampiran'),
                'allowed_types' => '*',
                'rules' => '',
                'value' => ''
            ],
            [
                'field' => 'hps',
                'type' => 'radio',
                'label' => 'Ketersediaan HPS',
                'source' => [
                    '1' => 'Ada',
                    '0' => 'Tidak Ada'
                ]
            ]
        ];
    }

    /**
     * Get procurement methods
     * @return array
     */
    protected function getProcMethod() {
        $CI =& get_instance();
        $CI->load->model('Main_model', 'mm');
        return $CI->mm->getProcMethod();
    }
} 