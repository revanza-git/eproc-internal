<?php

class User_model extends CI_Model {
    protected $table = 'users';
    protected $role_table = 'roles';
    protected $user_role_table = 'user_roles';
    
    public function __construct() {
        parent::__construct();
        $this->load->database('eproc', true);
    }
    
    /**
     * Get user by username
     * @param string $username
     * @return array|false
     */
    public function get_by_username($username) {
        return $this->db->get_where($this->table, [
            'username' => $username,
            'is_active' => 1,
            'deleted' => 0
        ])->row_array();
    }
    
    /**
     * Get user roles and permissions
     * @param int $user_id
     * @return array|false
     */
    public function get_user_roles($user_id) {
        $this->db->select('r.*')
                 ->from($this->role_table . ' r')
                 ->join($this->user_role_table . ' ur', 'r.id = ur.role_id')
                 ->where('ur.user_id', $user_id)
                 ->where('r.is_active', 1);
                 
        return $this->db->get()->row_array();
    }
    
    /**
     * Update user's last login information
     * @param int $user_id
     * @return bool
     */
    public function update_last_login($user_id) {
        return $this->db->update($this->table, [
            'last_login' => date('Y-m-d H:i:s'),
            'last_ip' => $this->input->ip_address()
        ], ['id' => $user_id]);
    }
    
    /**
     * Create new user
     * @param array $data
     * @return int|false
     */
    public function create($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    /**
     * Update user
     * @param int $user_id
     * @param array $data
     * @return bool
     */
    public function update($user_id, $data) {
        return $this->db->update($this->table, $data, ['id' => $user_id]);
    }
    
    /**
     * Soft delete user
     * @param int $user_id
     * @return bool
     */
    public function delete($user_id) {
        return $this->db->update($this->table, ['deleted' => 1], ['id' => $user_id]);
    }
} 