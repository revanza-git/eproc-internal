<?php

class Auth {
    protected $CI;
    protected $user_model;
    
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('user_model');
        $this->user_model = $this->CI->user_model;
    }
    
    /**
     * Attempt to login user
     * @param string $username
     * @param string $password
     * @return array|false
     */
    public function attempt($username, $password) {
        $user = $this->user_model->get_by_username($username);
        
        if (!$user || !password_verify($password, $user['password'])) {
            return false;
        }
        
        $role = $this->user_model->get_user_roles($user['id']);
        if (!$role) {
            return false;
        }
        
        // Update last login
        $this->user_model->update_last_login($user['id']);
        
        // Set session data
        $this->set_session($user, $role);
        
        return [
            'id_user' => $user['id'],
            'username' => $user['username'],
            'name' => $user['name'],
            'email' => $user['email'],
            'type' => $role['type'],
            'role' => $role['name'],
            'permissions' => $role['permissions']
        ];
    }
    
    /**
     * Set user session data
     * @param array $user
     * @param array $role
     */
    protected function set_session($user, $role) {
        $session_data = [
            'user_id' => $user['id'],
            'username' => $user['username'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role_type' => $role['type'],
            'role_name' => $role['name'],
            'permissions' => $role['permissions'],
            'logged_in' => true
        ];
        
        $this->CI->session->set_userdata($session_data);
    }
    
    /**
     * Check if user is logged in
     * @return bool
     */
    public function check() {
        return $this->CI->session->userdata('logged_in') === true;
    }
    
    /**
     * Get current user data
     * @return array|null
     */
    public function user() {
        if (!$this->check()) {
            return null;
        }
        
        return [
            'id' => $this->CI->session->userdata('user_id'),
            'username' => $this->CI->session->userdata('username'),
            'name' => $this->CI->session->userdata('name'),
            'email' => $this->CI->session->userdata('email'),
            'role_type' => $this->CI->session->userdata('role_type'),
            'role_name' => $this->CI->session->userdata('role_name'),
            'permissions' => $this->CI->session->userdata('permissions')
        ];
    }
    
    /**
     * Logout current user
     */
    public function logout() {
        $this->CI->session->sess_destroy();
    }
    
    /**
     * Check if user has specific permission
     * @param string $permission
     * @return bool
     */
    public function can($permission) {
        if (!$this->check()) {
            return false;
        }
        
        $permissions = $this->CI->session->userdata('permissions');
        return isset($permissions[$permission]) && $permissions[$permission] === true;
    }
} 