<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RekapService {
    protected $CI;
    protected $mm;
    protected $fk;
    protected $fp;
    protected $dm;

    public function __construct() {
        $this->CI =& get_instance();
        $this->mm = $this->CI->load->model('Main_model', 'mm');
        $this->fk = $this->CI->load->model('fkpbj_model', 'fk');
        $this->fp = $this->CI->load->model('fp3_model', 'fp');
        $this->dm = $this->CI->load->model('Dashboard_model', 'dm');
    }

    public function getFPPBJData($year, $type = 1) {
        $total_perencanaan = count($this->dm->rekap_department($year, $type)) + 
                           count($this->dm->rekap_department_fkpbj($year, $type)) + 
                           count($this->dm->rekap_department_fp3($year, $type));
        
        return [
            'total_perencanaan' => $total_perencanaan,
            'total_fppbj_semua' => $this->mm->get_total_fppbj_semua($year, $type),
            'fppbj_selesai' => $this->mm->get_fppbj_selesai($year, $type),
            'fppbj_pending' => $this->mm->get_fppbj_pending($year, $type),
            'pending_admin_hsse' => $this->mm->get_pending_admin_hsse($year, $type),
            'pending_admin_pengendalian' => $this->mm->get_pending_admin_pengendalian($year, $type),
            'pending_kadept_proc' => $this->mm->get_pending_kadept_proc($year, $type),
            'total_pending_dir' => $this->mm->total_pending_dir($year, $type),
            'fppbj_reject' => $this->mm->get_fppbj_reject($year, $type),
            'pending_dirut' => $this->mm->get_pending_dirut($year, $type),
            'pending_dirke' => $this->mm->get_pending_dirke($year, $type),
            'pending_dirsdm' => $this->mm->get_pending_dirsdm($year, $type),
            'done_dirut' => $this->mm->get_done_dirut($year, $type),
            'done_dirke' => $this->mm->get_done_dirke($year, $type),
            'done_dirsdm' => $this->mm->get_done_dirsdm($year, $type),
            'reject_dirut' => $this->mm->get_reject_dirut($year, $type),
            'reject_dirke' => $this->mm->get_reject_dirke($year, $type),
            'reject_dirsdm' => $this->mm->get_reject_dirsdm($year, $type),
            'total_fppbj_direktur' => $this->mm->get_total_fppbj_directure($year, $type),
            'total_fppbj_dirke' => $this->mm->get_total_fppbj_dirke($year, $type),
            'total_fppbj_dirut' => $this->mm->get_total_fppbj_dirut($year, $type),
            'total_fppbj_dirsdm' => $this->mm->get_total_fppbj_dirsdm($year, $type)
        ];
    }

    public function getFKPBJData($year, $type = 1) {
        return [
            'total_pending_dir_fkpbj' => $this->mm->total_pending_dir_fkpbj($year, $type),
            'pending_dirsdm' => $this->fk->get_pending_dirsdm($year, $type),
            'fkpbj_pending_dirke' => $this->fk->get_pending_dirke($year, $type),
            'fkpbj_pending_dirut' => $this->fk->get_pending_dirut($year, $type),
            'total_fkpbj' => $this->fk->get_total_fkpbj_semua($year, $type),
            'fkpbj_pending' => $this->fk->get_fkpbj_pending($year, $type),
            'fkpbj_pending_ap' => $this->fk->statusApprove(1, $year, $type),
            'fkpbj_pending_kp' => $this->fk->statusApprove(2, $year, $type),
            'fkpbj_success' => $this->fk->get_fkpbj_selesai($year, $type),
            'fkpbj_reject' => $this->fk->get_fkpbj_reject($year, $type)
        ];
    }

    public function getFP3Data($year) {
        return [
            'total_fp3' => $this->fp->getTotalFP3(5, $year),
            'fp3_pending' => $this->fp->statusApprove(0, $year),
            'fp3_pending_ap' => $this->fp->statusApprove(1, $year),
            'fp3_pending_kp' => $this->fp->statusApprove(2, $year),
            'fp3_success' => $this->fp->statusApprove(3, $year),
            'fp3_reject' => $this->fp->statusApprove(4, $year),
            'fp3_pending_sdm' => $this->fp->statusApprove(7, $year),
            'fp3_pending_dirke' => $this->fp->statusApprove(8, $year),
            'fp3_pending_dirut' => $this->fp->statusApprove(9, $year),
            'fp3_pending_aldir' => $this->fp->statusApprove(10, $year)
        ];
    }
} 