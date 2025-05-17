<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {
    protected $table = 'ms_login';
    protected $db_group = 'eproc';

    public function __construct() {
        parent::__construct();
    }

    public function validate_credentials($username, $password) {
        $sql = "SELECT * FROM {$this->table} 
                WHERE username = ? 
                AND password = ? 
                AND del = 0";

        $result = $this->db->query($sql, [$username, $password])->row_array();
        
        if (!$result) {
            return false;
        }

        if ($result['type'] === 'user') {
            return $this->validate_vendor($result['id_user']);
        } else if ($result['type'] === 'admin') {
            return $this->validate_admin($result['id_user'], $result['type_app']);
        }

        return false;
    }

    private function validate_vendor($vendor_id) {
        $sql = "SELECT * FROM ms_vendor 
                WHERE id = ? 
                AND is_active = 1";

        $vendor = $this->db->query($sql, [$vendor_id])->row_array();
        
        if (!$vendor) {
            return false;
        }

        $this->session->set_userdata('user', [
            'id_user' => $vendor['id'],
            'name' => $vendor['name'],
            'id_sbu' => $vendor['id_sbu'],
            'vendor_status' => $vendor['vendor_status'],
            'is_active' => $vendor['is_active'],
            'app' => 'vms',
            'type' => 'user'
        ]);

        return true;
    }

    private function validate_admin($admin_id, $app_type) {
        if ($app_type == 1) {
            return $this->validate_admin_app1($admin_id);
        } else if ($app_type == 2) {
            return $this->validate_admin_app2($admin_id);
        }
        return false;
    }

    private function validate_admin_app1($admin_id) {
        $sql = "SELECT *, ms_admin.id id, ms_admin.name name, tb_role.name role_name 
                FROM ms_admin 
                JOIN tb_role ON ms_admin.id_role = tb_role.id 
                WHERE ms_admin.id = ? 
                AND ms_admin.del = 0";

        $admin = $this->db->query($sql, [$admin_id])->row_array();
        
        if (!$admin) {
            return false;
        }

        $this->session->set_userdata('admin', [
            'id_user' => $admin['id'],
            'name' => $admin['name'],
            'id_sbu' => $admin['id_sbu'],
            'id_role' => $admin['id_role'],
            'role_name' => $admin['role_name'],
            'sbu_name' => $admin['sbu_name'],
            'app' => 'vms',
            'app_type' => 1,
            'type' => 'admin'
        ]);

        return true;
    }

    private function validate_admin_app2($admin_id) {
        $sql = "SELECT a.name, a.email, a.id_role, a.id_division, 
                       a.photo_profile, a.id, b.name division 
                FROM ms_admin a 
                INNER JOIN tb_division b ON b.id = a.id_division 
                WHERE a.del = 0 
                AND a.id = ?";

        $admin = $this->db->query($sql, [$admin_id])->row_array();
        
        if (!$admin) {
            return false;
        }

        $this->session->set_userdata('admin', [
            'name' => $admin['name'],
            'division' => $admin['division'],
            'id_user' => $admin['id'],
            'id_role' => $admin['id_role'],
            'id_division' => $admin['id_division'],
            'email' => $admin['email'],
            'photo_profile' => $admin['photo_profile'],
            'app_type' => 2
        ]);

        $this->log_activity($admin['id'], $admin['name'] . " Telah Login");
        return true;
    }

    private function log_activity($user_id, $activity) {
        $data = [
            'id_user' => $user_id,
            'activity' => $activity,
            'activity_date' => date('Y-m-d H:i:s')
        ];
        
        return $this->db->insert('tr_log_activity', $data);
    }
}
