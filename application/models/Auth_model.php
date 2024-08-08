<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{

    function login_done($email)
    {
        $this->db->where('user_email', $email);
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function login_done_by_mobile($mobile)
    {
        $this->db->where('user_mobile', $mobile);
        $this->db->select('*');
        return $this->db->get('users')->row_array();
    }

    function check_email($email) 
    {
        $where = array(
            'user_email' => $email,
        );
        $this->db->where($where);
        $this->db->select('*');
        return $query = $this->db->get('users')->row();
    }

    function check_status($mobile) 
    {
        $where = array(
            'user_mobile' => $mobile,
        );
        $this->db->where($where);
        $this->db->select('*');
        $this->db->from('users');
        return $query = $this->db->get();
    }
    function check_phone($mobile) 
    {
        $where = array(
            'user_mobile' => $mobile
        );
        $this->db->where($where);
        $this->db->select('*');
        $this->db->from('user');
        return $query = $this->db->get();
    }


   function check_password($table, $email_or_mob,$password)
    {
        $where = array(
             $table => $email_or_mob,
            'user_password' => hash("sha256", $password)
        );
        $this->db->where($where);
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function check_login($mobile,$password)
    {
        $this->db->where('user_mobile', $mobile);
        $this->db->where('user_password', hash("sha256", $password));
        $check = $this->db->get('users')->row();
        if($check == TRUE)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


     function check_session_id($email,$password)
    {
        $where = array(
            'user_email' => $email,
            'user_session_id' => $password
        );
        $this->db->where($where);
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

    //is logged in
    public function is_logged_in()
    {
        //check if user logged in
        if ($this->session->userdata('sess_logged_in') == true &&
            $this->session->userdata('sess_app_id') == $this->config->item('app_key') &&
            !empty($this->get_user($this->session->userdata('sess_id')))) {
            return true;
        } else {
            return false;
        }
    }

    //get user by id
    public function get_user($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }
    //User Log Out
    public function logout()
    {
        //unset user data
        return $this->session->sess_destroy();
    }
    
    //get role by key
    public function get_role_by_key($key)
    {
        $this->db->where('role_name', $key);
        $query = $this->db->get('role_permission');
        return $query->row();
    }
   //check permission
    public function check_permission($role_key, $section)
    {
        //$section = 'showing_ticket';
        $role = $this->get_role_by_key($role_key);
        if (!empty($role)) {
            // if ($role_key == 'Admin') {
            //     return true;
            // }
            if ($role->$section == 1) {
                return true;
            }
        }
        return false;
    }

    //Get All Role Permission
    public function get_role_permission()
    {
        $this->db->where('added_by', 0);
        return $this->db->get('role_permission')->result();
    }

    //Get All Role Permission By User ID
    public function get_role_permission_by_user_id()
    {
        $id = user()->user_id;
        $this->db->where('added_by', $id);
        return $this->db->get('role_permission')->result();
    }

    //Get All Role Permission
    public function get_role_permission_for_add_user()
    {
        $admin = $this->user_model->get_admin();
        if(!empty($admin))
        {
            $this->db->where('role_name !=' , 'Admin');
        }
        $this->db->where('role_name !=' , 'Super Admin');
        return $this->db->get('role_permission')->result();
    }

    public function delete_role_permission($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('role_permission');
    }

    //Get All Role Permission Detaild By ID
    public function get_role_permission_detaild_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('role_permission')->row();
    }

    public function get_role_permission_detaild_by_name($role_name)
    {
        $this->db->where('role_name', $role_name);
        return $this->db->get('role_permission')->row();
    }

    //Add new Role
    public function  add_new_role_permission($user_id)
    {
        $data['role_name'] = $this->input->post('role_name');

        $tables = $this->db->list_fields('role_permission');
        foreach ($tables as $permission)
        {
            if($permission != 'id' && $permission != 'role_name')
            {
                $data[$permission] = $this->input->post($permission, true) == 1 ? 1 : 0;
            }
        }
        
        $data['added_by'] = $user_id;
        return $this->db->insert('role_permission', $data);
    }

    //Update role Permission 
    public function update_permission_role($user_id)
    {
        $role_id = $this->input->post('role_id');
        $added_by = user()->id;
        $data['role_name'] = $this->input->post('role_name');

        $tables = $this->db->list_fields('role_permission');
        foreach ($tables as $permission)
        {
          if($permission != 'id' && $permission != 'role_name')
            {
                $data[$permission] = $this->input->post($permission, true) == 1 ? 1 : 0;
            }
        }
        $data['added_by'] = $user_id;
        $this->db->where('id', $role_id);
        return $this->db->update('role_permission', $data);
    }

    function active_token($id,$token)
    {
        $token = array(
            'user_token' => $token,
            'user_is_online' => 1
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $token);
    }

    //function get user
    public function get_logged_user()
    {
        $this->db->where('user_id', $this->session->userdata('sess_id'));
        $query = $this->db->get('users');
        $data =  $query->row();

        if ($this->is_logged_in()) {
            return $data;
        }
    }

}
