<?php

class Login_model extends CI_model
{
    public $eproc_db;
    
    function __construct()
    {
        parent::__construct();
        $this->eproc_db = $this->load->database('eproc', true);
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Get user from database
        $sql = "SELECT * FROM users WHERE username = ? AND is_active = 1 AND deleted = 0";
        $query = $this->eproc_db->query($sql, array($username));
        
        if ($query->num_rows() > 0) {
            $user = $query->row_array();
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Get user role and permissions
                $role_sql = "SELECT r.* FROM roles r 
                            JOIN user_roles ur ON r.id = ur.role_id 
                            WHERE ur.user_id = ? AND r.is_active = 1";
                $role_query = $this->eproc_db->query($role_sql, array($user['id']));
                $role = $role_query->row_array();

                return array(
                    'id_user' => $user['id'],
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'type' => $role['type'],
                    'role' => $role['name'],
                    'permissions' => $role['permissions']
                );
            }
        }
        
        return false;
    }

    public function update_last_login($user_id)
    {
        $data = array(
            'last_login' => date('Y-m-d H:i:s'),
            'last_ip' => $this->input->ip_address()
        );
        
        $this->eproc_db->where('id', $user_id);
        return $this->eproc_db->update('users', $data);
    }
}
