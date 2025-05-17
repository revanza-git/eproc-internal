<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Pemaketan Controller
 * Handles procurement management functionality
 */
class Pemaketan extends MY_Controller
{
    protected $pemaketanService;
    protected $admin;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('PemaketanService');
        $this->pemaketanService = new PemaketanService();
        $this->admin = $this->session->userdata('admin');
    }

    /**
     * Display main index page
     * @param string $year
     */
    public function index($year)
    {
        $data = $this->pemaketanService->getData($year);
        $this->load->view('pemaketan/index', $data);
    }

    /**
     * Get pemaketan data
     * @param string $year
     */
    public function getData($year)
    {
        $data = $this->pemaketanService->getData($year);
        echo json_encode($data);
    }

    /**
     * Display division view
     * @param string $id
     * @param string $id_fppbj
     * @param string $year
     */
    public function division($id = "", $id_fppbj = "", $year = "")
    {
        $data = $this->pemaketanService->getDivisionData($id, $id_fppbj, $year);
        $this->load->view('pemaketan/division', $data);
    }

    /**
     * Save pemaketan data
     */
    public function simpan()
    {
        $result = $this->pemaketanService->process_pemaketan($this->input->post());
        echo json_encode($result);
    }

    /**
     * Get division data
     * @param string $id_division
     * @param string $id_fppbj
     * @param string $year
     */
    public function getDataDivision($id_division = null, $id_fppbj = null, $year = null)
    {
        $data = $this->pemaketanService->getDivisionData($id_division, $id_fppbj, $year);
        echo json_encode($data);
    }

    /**
     * Get single pemaketan data
     * @param string $id
     */
    public function getSingleData($id)
    {
        $data = $this->pemaketanService->getSingleData($id);
        echo json_encode($data);
    }

    /**
     * Get step data
     * @param string $id
     */
    public function get_step($id)
    {
        $data = $this->pemaketanService->getStepData($id);
        echo json_encode($data);
    }

    /**
     * Get analysis data
     * @param string $id
     */
    public function get_analisa($id)
    {
        $data = $this->pemaketanService->getAnalysisData($id);
        echo json_encode($data);
    }

    /**
     * View step
     * @param string $id
     */
    public function viewStep($id)
    {
        $data = $this->pemaketanService->getStepViewData($id);
        $this->load->view('pemaketan/view_step', $data);
    }

    /**
     * View step analysis
     * @param string $id
     */
    public function viewStepAnalisa($id)
    {
        $data = $this->pemaketanService->getStepAnalysisViewData($id);
        $this->load->view('pemaketan/view_step_analisa', $data);
    }

    /**
     * Get PIC data
     * @param string $id_fppbj
     * @param string $metode
     */
    public function get_pic($id_fppbj, $metode)
    {
        $data = $this->pemaketanService->getPicData($id_fppbj, $metode);
        echo json_encode($data);
    }

    /**
     * Form filter
     */
    public function formFilter()
    {
        $return = [
            'title' => 'Filter Data',
            'form' => $this->pemaketanService->getFormConfig('filter')
        ];
        echo json_encode($return);
    }
}
