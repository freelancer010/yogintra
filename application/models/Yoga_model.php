<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yoga_model  extends CI_Model
{
    function __construct() {
        parent::__construct(); 
    }
     

    function get_all_yoga_center()
    {
        return $this->db->get('yoga_center')->result();
    }

    function get_yoga_center_by_id($id)
    {
        $this->db->where('center_id', $id);
        return $this->db->get('yoga_center')->row();
    }

    function get_yoga_center_by_slug($slug)
    {
        $this->db->where('center_slug', $slug);
        return $this->db->get('yoga_center')->row();
    }

    function add_new_center()
    {
       $originalString= $this->input->post('map_link');
        $modifiedString = str_replace('width="600" height="450"', 'width="440" height="200"', $originalString);


        $data = [
            'center_name'           => $this->input->post('center_name'),
            'center_slug'           => slug($this->input->post('center_name')),
            'center_description'    => $this->input->post('center_description'),
            'center_country'        => $this->input->post('center_country'),
            'center_state'          => $this->input->post('center_state'),
            'center_city'           => $this->input->post('center_city'),
            'center_address'        => $this->input->post('center_address'),
            'map_link'              => $modifiedString,
            'page_title'            => $this->input->post('page_title'),
            'page_meta_title'       => $this->input->post('page_meta_title'),
            'page_Slug'             => $this->input->post('page_Slug'),
            'page_keywords'         => $this->input->post('page_keywords'),
            'page_meta_description' => $this->input->post('page_meta_description'),
            'mobile_number'         => $this->input->post('mobile_number'),
            'email_address'         => $this->input->post('email_address'),
        ];

        if(!empty($_FILES['center_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['center_image']['name'];
            $_FILES['file']['type'] = $_FILES['center_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['center_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['center_image']['error'];
            $_FILES['file']['size'] = $_FILES['center_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['center_image']['name'];
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
                    $data['center_image'] = 'uploads/' . $filename;

                }
            }
        }

        // if(!empty($_FILES['center_sec_pdf']['name']))
        // {
        //     $_FILES['file']['name'] = $_FILES['center_sec_pdf']['name'];
        //     $_FILES['file']['type'] = $_FILES['center_sec_pdf']['type'];
        //     $_FILES['file']['tmp_name'] = $_FILES['center_sec_pdf']['tmp_name'];
        //     $_FILES['file']['error'] = $_FILES['center_sec_pdf']['error'];
        //     $_FILES['file']['size'] = $_FILES['center_sec_pdf']['size'];

        //     // Set preference
        //     $config['upload_path'] = 'uploads/'; 
        //     $config['allowed_types'] = 'pdf';
        //     $config['max_size'] = '5000'; // max_size in kb
        //     $config['file_name'] = uniqid().$_FILES['center_sec_pdf']['name'];
        //     $this->upload->initialize($config);
        //     //Load upload library
        //     $this->load->library('upload',$config); 

        //     // File upload
        //     if($this->upload->do_upload('file'))
        //     {
        //         // Get data about the file
        //         $uploadData = $this->upload->data();
        //         $filename = $uploadData['file_name'];

        //          if (isset($filename)) 
        //         {
        //             $data['center_sec_pdf'] = 'uploads/' . $filename;

        //         }
        //     }
        // }
        return $this->db->insert('yoga_center', $data);
    }

    function update_new_center($id)
    {
        $originalString= $this->input->post('map_link');
        $modifiedString = str_replace('width="600" height="450"', 'width="440" height="200"', $originalString);
            
        $data = [
            'center_name'           => $this->input->post('center_name'),
            'center_slug'           => slug($this->input->post('center_name')),
            'center_description'    => $this->input->post('center_description'),
            'center_country'        => $this->input->post('center_country'),
            'center_state'          => $this->input->post('center_state'),
            'center_city'           => $this->input->post('center_city'),
            'center_address'        => $this->input->post('center_address'),
            'map_link'              => $modifiedString,
            'page_title'            => $this->input->post('page_title'),
            'page_meta_title'       => $this->input->post('page_meta_title'),
            'page_Slug'             => $this->input->post('page_Slug'),
            'page_keywords'         => $this->input->post('page_keywords'),
            'page_meta_description' => $this->input->post('page_meta_description'),
            'mobile_number'         => $this->input->post('mobile_number'),
            'email_address'         => $this->input->post('email_address'),
        ];

        if(!empty($_FILES['center_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['center_image']['name'];
            $_FILES['file']['type'] = $_FILES['center_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['center_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['center_image']['error'];
            $_FILES['file']['size'] = $_FILES['center_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['center_image']['name'];
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
                    $data['center_image'] = 'uploads/' . $filename;

                }
            }
        }

        // if(!empty($_FILES['center_sec_pdf']['name']))
        // {
        //     $_FILES['file']['name'] = $_FILES['center_sec_pdf']['name'];
        //     $_FILES['file']['type'] = $_FILES['center_sec_pdf']['type'];
        //     $_FILES['file']['tmp_name'] = $_FILES['center_sec_pdf']['tmp_name'];
        //     $_FILES['file']['error'] = $_FILES['center_sec_pdf']['error'];
        //     $_FILES['file']['size'] = $_FILES['center_sec_pdf']['size'];

        //     // Set preference
        //     $config['upload_path'] = 'uploads/'; 
        //     $config['allowed_types'] = 'pdf';
        //     $config['max_size'] = '5000'; // max_size in kb
        //     $config['file_name'] = uniqid().$_FILES['center_sec_pdf']['name'];
        //     $this->upload->initialize($config);
        //     //Load upload library
        //     $this->load->library('upload',$config); 

        //     // File upload
        //     if($this->upload->do_upload('file'))
        //     {
        //         // Get data about the file
        //         $uploadData = $this->upload->data();
        //         $filename = $uploadData['file_name'];

        //          if (isset($filename)) 
        //         {
        //             $data['center_sec_pdf'] = 'uploads/' . $filename;

        //         }
        //     }
        // }
        $this->db->where('center_id', $id);
        return $this->db->update('yoga_center', $data);
    }
    function delete_center($id)
    {
        $this->db->where('center_id', $id);
        return $this->db->delete('yoga_center');
    }

   
}

