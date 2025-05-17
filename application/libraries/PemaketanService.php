<?php

class PemaketanService {
    protected $CI;
    protected $model;
    protected $formConfig;
    
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('pemaketan_model');
        $this->CI->load->model('fppbj_model');
        $this->CI->load->model('main_model');
        $this->model = $this->CI->pemaketan_model;
        $this->formConfig = new PemaketanFormConfig();
    }

    /**
     * Get form configuration
     * @param string $type
     * @return array
     */
    public function getFormConfig($type) {
        return $this->formConfig->getFormConfig($type);
    }
    
    /**
     * Get pemaketan data by year
     * @param string $year
     * @return array
     */
    public function getData($year) {
        return $this->model->getDataByYear($year);
    }

    /**
     * Get division data
     * @param string $id_division
     * @param string $id_fppbj
     * @param string $year
     * @return array
     */
    public function getDivisionData($id_division, $id_fppbj, $year) {
        $form = $this->getFormConfig('filter');
        return $this->model->getDataDivision($form, $id_division, $id_fppbj, $year);
    }

    /**
     * Get single pemaketan data
     * @param string $id
     * @return array
     */
    public function getSingleData($id) {
        return $this->model->getSingleData($id);
    }

    /**
     * Get step data
     * @param string $id
     * @return array
     */
    public function getStepData($id) {
        return $this->model->get_step($id);
    }

    /**
     * Get analysis data
     * @param string $id
     * @return array
     */
    public function getAnalysisData($id) {
        return $this->model->get_analysis($id);
    }

    /**
     * Get step view data
     * @param string $id
     * @return array
     */
    public function getStepViewData($id) {
        $data = $this->getStepData($id);
        return [
            'data' => $data,
            'title' => 'View Step'
        ];
    }

    /**
     * Get step analysis view data
     * @param string $id
     * @return array
     */
    public function getStepAnalysisViewData($id) {
        $data = $this->getAnalysisData($id);
        return [
            'data' => $data,
            'title' => 'View Step Analysis'
        ];
    }

    /**
     * Get PIC data
     * @param string $id_fppbj
     * @param string $metode
     * @return array
     */
    public function getPicData($id_fppbj, $metode) {
        return $this->model->get_pic($id_fppbj, $metode);
    }

    /**
     * Process pemaketan data
     * @param array $data
     * @return array
     */
    public function process_pemaketan($data) {
        if (!$this->validate_pemaketan($data)) {
            return [
                'success' => false,
                'message' => 'Invalid data provided'
            ];
        }
        
        try {
            $this->CI->db->trans_start();
            
            // Save FPPBJ
            $fppbj_id = $this->model->save_fppbj([
                'division_id' => $data['division_id'],
                'tanggal' => $data['tanggal'],
                'nomor' => $data['nomor_fppbj'],
                'keterangan' => $data['keterangan']
            ]);
            
            if (!$fppbj_id) {
                throw new Exception('Failed to save FPPBJ');
            }
            
            // Save pemaketan data
            $pemaketan_id = $this->model->save([
                'id_fppbj' => $fppbj_id,
                'anggaran' => $data['anggaran'],
                'metode' => $data['metode'],
                'status' => 'draft'
            ]);
            
            if (!$pemaketan_id) {
                throw new Exception('Failed to save pemaketan data');
            }
            
            $this->CI->db->trans_complete();
            
            if ($this->CI->db->trans_status() === FALSE) {
                throw new Exception('Transaction failed');
            }
            
            return [
                'success' => true,
                'data' => [
                    'fppbj_id' => $fppbj_id,
                    'pemaketan_id' => $pemaketan_id
                ]
            ];
            
        } catch (Exception $e) {
            $this->CI->db->trans_rollback();
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Validate pemaketan data
     * @param array $data
     * @return bool
     */
    protected function validate_pemaketan($data) {
        $required_fields = ['division_id', 'tanggal', 'nomor_fppbj', 'anggaran', 'metode'];
        
        foreach ($required_fields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return false;
            }
        }
        
        return true;
    }
    
    /**
     * Process analysis data
     * @param int $pemaketan_id
     * @param array $data
     * @return array
     */
    public function process_analysis($pemaketan_id, $data) {
        if (!$this->validate_analysis($data)) {
            return [
                'success' => false,
                'message' => 'Invalid analysis data'
            ];
        }
        
        // Save analysis data
        $this->CI->db->insert('pemaketan_analysis', [
            'pemaketan_id' => $pemaketan_id,
            'analisis' => $data['analisis'],
            'rekomendasi' => $data['rekomendasi'],
            'created_by' => $this->CI->auth->user()['id']
        ]);
        
        return [
            'success' => true,
            'message' => 'Analysis data saved successfully'
        ];
    }
    
    /**
     * Validate analysis data
     * @param array $data
     * @return bool
     */
    protected function validate_analysis($data) {
        return isset($data['analisis']) && !empty($data['analisis']);
    }
    
    /**
     * Generate PDF report
     * @param int $pemaketan_id
     * @return string
     */
    public function generate_pdf($pemaketan_id) {
        $data = $this->model->get_by_id($pemaketan_id);
        if (!$data) {
            return false;
        }
        
        $fppbj = $this->model->get_fppbj($data['id_fppbj']);
        $analysis = $this->model->get_analysis($pemaketan_id);
        
        $html = $this->CI->load->view('pemaketan/pdf_template', [
            'data' => $data,
            'fppbj' => $fppbj,
            'analysis' => $analysis
        ], true);
        
        $this->CI->load->library('pdf');
        return $this->CI->pdf->generate($html);
    }
} 