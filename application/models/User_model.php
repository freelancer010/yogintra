<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model  extends CI_Model
{
    function __construct() {
        parent::__construct(); 
    }
     

    function get_user_by_id($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('users')->row();
    }

    function update_profile_details_information($id) 
    {
        $data = array(
            'user_name'             => $this->input->post('user_name'), 
            'user_mobile'           => $this->input->post('user_mobile'), 
            'user_email'            => $this->input->post('user_email'), 
        );

        if(!empty($_FILES['user_photo']['name']))
        {
            $user_image  = $this->get_user_by_id($id);    
            if(file_exists($user_image->user_photo))
            {
                unlink($user_image->user_photo);
            }

            $_FILES['file']['name'] = $_FILES['user_photo']['name'];
            $_FILES['file']['type'] = $_FILES['user_photo']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['user_photo']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['user_photo']['error'];
            $_FILES['file']['size'] = $_FILES['user_photo']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['user_photo']['name'];
            $this->upload->initialize($config);
            //Load upload library
            $this->load->library('upload',$config); 

              // File upload
            if($this->upload->do_upload('file'))
            {
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];

                 if (isset($filename)) 
                {
                    $data['user_photo'] = 'uploads/' . $filename;

                }
            }
        } 

        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    function check_current_password($password, $user_id) 
    {
        $this->db->where('user_id', $user_id);
        $user = $this->db->get('users')->row();
        

        if($user->user_password == hash("sha256", $password))
        {
            return TRUE;
        }
        else
        {
            return hash("sha256", $password);
        }
    }

    function update_profile_details_password($id) 
    {
        $data = array(
            'user_password' => hash("sha256", $this->input->post('new_password')), 
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }
    
}

