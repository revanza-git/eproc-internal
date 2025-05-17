<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    protected $auth;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->auth = $this->auth;

        // Redirect if already logged in
        if ($this->auth->check()) {
            $user = $this->auth->user();
            redirect($user['role_type'] === 'admin' ? 'admin/dashboard' : 'user/dashboard');
        }
    }

    /**
     * Show login form
     */
    public function index()
    {
        $this->load->view('login');
    }

    /**
     * Handle login attempt
     */
    public function check()
    {
        $this->load->library('form_validation');
        
        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('login');
        }
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Attempt login
        $user = $this->auth->attempt($username, $password);
        
        if ($user) {
            // Redirect based on role
            redirect($user['type'] === 'admin' ? 'admin/dashboard' : 'user/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('login');
        }
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        $this->auth->logout();
        redirect('login');
    }
}
