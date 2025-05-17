<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemaketan extends MY_Controller
{
    protected $service;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('pemaketan_service');
        $this->service = $this->pemaketan_service;
        
        // Check if user has permission
        if (!$this->auth->can('view_pemaketan')) {
            show_error('You do not have permission to access this page', 403);
        }
    }
    
    /**
     * Show pemaketan list by year
     * @param int $year
     */
    public function index($year = null) {
        if (!$year) {
            $year = date('Y');
        }
        
        $data = [
            'title' => 'Pemaketan List',
            'year' => $year,
            'pemaketan_list' => $this->service->model->get_by_year($year)
        ];
        
        $this->load->view('pemaketan/index', $data);
    }
    
    /**
     * Get pemaketan data for AJAX request
     * @param int $year
     */
    public function getData($year) {
        $data = $this->service->model->get_by_year($year);
        echo json_encode(['data' => $data]);
    }
    
    /**
     * Show division pemaketan list
     * @param int $id
     * @param int $id_fppbj
     * @param int $year
     */
    public function division($id = null, $id_fppbj = null, $year = null) {
        if (!$year) {
            $year = date('Y');
        }
        
        $data = [
            'title' => 'Division Pemaketan',
            'division_id' => $id,
            'fppbj_id' => $id_fppbj,
            'year' => $year,
            'pemaketan_list' => $this->service->model->get_by_division($id, $id_fppbj, $year)
        ];
        
        $this->load->view('pemaketan/division', $data);
    }
    
    /**
     * Save pemaketan data
     */
    public function simpan() {
        $this->load->library('form_validation');
        
        // Set validation rules
        $this->form_validation->set_rules('division_id', 'Division', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required');
        $this->form_validation->set_rules('nomor_fppbj', 'FPPBJ Number', 'required');
        $this->form_validation->set_rules('anggaran', 'Budget', 'required|numeric');
        $this->form_validation->set_rules('metode', 'Method', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('pemaketan');
        }
        
        $result = $this->service->process_pemaketan($this->input->post());
        
        if ($result['success']) {
            $this->session->set_flashdata('success', 'Pemaketan data saved successfully');
        } else {
            $this->session->set_flashdata('error', $result['message']);
        }
        
        redirect('pemaketan');
    }
    
    /**
     * Show analysis form
     * @param int $id
     */
    public function form_analisa_swakelola($id) {
        $data = [
            'title' => 'Analysis Form',
            'pemaketan' => $this->service->model->get_by_id($id),
            'analysis' => $this->service->model->get_analysis($id)
        ];
        
        $this->load->view('pemaketan/analysis_form', $data);
    }
    
    /**
     * Process analysis data
     * @param int $id
     */
    public function process_analysis($id) {
        $result = $this->service->process_analysis($id, $this->input->post());
        
        if ($result['success']) {
            $this->session->set_flashdata('success', $result['message']);
        } else {
            $this->session->set_flashdata('error', $result['message']);
        }
        
        redirect('pemaketan/view/' . $id);
    }
    
    /**
     * Generate PDF report
     * @param int $id
     */
    public function form_download_pdf($id) {
        $pdf = $this->service->generate_pdf($id);
        
        if ($pdf) {
            $this->load->helper('download');
            force_download('pemaketan_' . $id . '.pdf', $pdf);
        } else {
            $this->session->set_flashdata('error', 'Failed to generate PDF');
            redirect('pemaketan/view/' . $id);
        }
    }
    
    /**
     * Show filter form
     */
    public function formFilter() {
        $return = [
            'title' => 'Filter Pemaketan',
            'fields' => [
                [
                    'name' => 'year',
                    'label' => 'Year',
                    'type' => 'select',
                    'options' => $this->get_year_options()
                ],
                [
                    'name' => 'division_id',
                    'label' => 'Division',
                    'type' => 'select',
                    'options' => $this->get_division_options()
                ],
                [
                    'name' => 'status',
                    'label' => 'Status',
                    'type' => 'select',
                    'options' => [
                        '' => 'All',
                        'draft' => 'Draft',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected'
                    ]
                ]
            ],
            'buttons' => [
                [
                    'type' => 'button',
                    'label' => 'Filter',
                    'class' => 'btn-filter'
                ],
                [
                    'type' => 'reset',
                    'label' => 'Reset'
                ]
            ]
        ];
        
        echo json_encode($return);
    }
    
    /**
     * Get year options for filter
     * @return array
     */
    protected function get_year_options() {
        $current_year = date('Y');
        $years = range($current_year - 5, $current_year + 1);
        
        $options = ['' => 'All'];
        foreach ($years as $year) {
            $options[$year] = $year;
        }
        
        return $options;
    }
    
    /**
     * Get division options for filter
     * @return array
     */
    protected function get_division_options() {
        $this->load->model('division_model');
        $divisions = $this->division_model->get_all();
        
        $options = ['' => 'All'];
        foreach ($divisions as $division) {
            $options[$division['id']] = $division['name'];
        }
        
        return $options;
    }
}
