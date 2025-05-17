<?php

class PemaketanService {
    protected $CI;
    protected $model;
    
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('pemaketan_model');
        $this->model = $this->CI->pemaketan_model;
    }
    
    /**
     * Process pemaketan data
     * @param array $data
     * @return array
     */
    public function process_pemaketan($data) {
        // Validate data
        if (!$this->validate_pemaketan($data)) {
            return [
                'success' => false,
                'message' => 'Invalid data provided'
            ];
        }
        
        // Save FPPBJ first
        $fppbj_id = $this->model->save_fppbj([
            'division_id' => $data['division_id'],
            'tanggal' => $data['tanggal'],
            'nomor' => $data['nomor_fppbj'],
            'keterangan' => $data['keterangan']
        ]);
        
        if (!$fppbj_id) {
            return [
                'success' => false,
                'message' => 'Failed to save FPPBJ'
            ];
        }
        
        // Save pemaketan data
        $pemaketan_id = $this->model->save([
            'id_fppbj' => $fppbj_id,
            'anggaran' => $data['anggaran'],
            'metode' => $data['metode'],
            'status' => 'draft'
        ]);
        
        if (!$pemaketan_id) {
            return [
                'success' => false,
                'message' => 'Failed to save pemaketan data'
            ];
        }
        
        return [
            'success' => true,
            'data' => [
                'fppbj_id' => $fppbj_id,
                'pemaketan_id' => $pemaketan_id
            ]
        ];
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