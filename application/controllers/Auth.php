<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public $eproc_db;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'am');
        $this->eproc_db = $this->load->database('eproc', true);
    }

    public function from_external($id_user)
    {
        $user = $this->am->get_user($id_user);
        redirect(site_url('dashboard'));
    }

    public function to_vms()
    {
        $admin = $this->session->userdata('admin');
        $id_user = $admin['id_user'];
        $this->session->sess_destroy();
        header('Location: ' . URL_TO_VMS . 'auth/from_internal/' . $id_user);
    }
}
