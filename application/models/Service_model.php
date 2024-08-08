<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_model  extends CI_Model
{
    function __construct() {
        parent::__construct(); 
    }
     

    function get_all_service_category()
    {
        return $this->db->get('service_category')->result();
    }

    public function get_six_category_for_home_page()
    {
        $this->db->limit(6);
        //$this->db->order_by('RAND()');
        return $this->db->get('service_category')->result();
    }

    function get_all_service_category_by_id($id)
    {
        $this->db->where('service_cat_id', $id);
        return $this->db->get('service_category')->row();
    }

    function get_all_service_category_by_slug($slug)
    {
        $this->db->where('service_cat_slug', $slug);
        return $this->db->get('service_category')->row();
    }

    public function add_new_category()
    {
   
        $data = array(
            'service_cat_name' => $this->input->post('service_cat_name'),
            'service_cat_slug' => slug($this->input->post('service_cat_name')),
            'page_title'            => $this->input->post('page_title'),
            'page_meta_title'       => $this->input->post('page_meta_title'),
            'page_Slug'             => $this->input->post('page_Slug'),
            'page_keywords'         => $this->input->post('page_keywords'),
            'page_meta_description' => $this->input->post('page_meta_description')
        );
    
        if(!empty($_FILES['service_cat_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['service_cat_image']['name'];
            $_FILES['file']['type'] = $_FILES['service_cat_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['service_cat_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['service_cat_image']['error'];
            $_FILES['file']['size'] = $_FILES['service_cat_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['service_cat_image']['name'];
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
                    $data['service_cat_image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('service_category', $data);
    }

    public function update_category($id)
    {
        $data = array(
            'service_cat_name' => $this->input->post('service_cat_name'),
            'service_cat_slug' => slug($this->input->post('service_cat_name')),
            'page_title'            => $this->input->post('page_title'),
            'page_meta_title'       => $this->input->post('page_meta_title'),
            'page_Slug'             => $this->input->post('page_Slug'),
            'page_keywords'         => $this->input->post('page_keywords'),
            'page_meta_description' => $this->input->post('page_meta_description')
        );

        if(!empty($_FILES['service_cat_image']['name']))
        {
            $image = $this->get_all_service_category_by_id($id);
            if(file_exists($image->service_cat_image))
            {
                unlink($image->service_cat_image);
            }
            $_FILES['file']['name'] = $_FILES['service_cat_image']['name'];
            $_FILES['file']['type'] = $_FILES['service_cat_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['service_cat_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['service_cat_image']['error'];
            $_FILES['file']['size'] = $_FILES['service_cat_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['service_cat_image']['name'];
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
                    $data['service_cat_image'] = 'uploads/' . $filename;

                }
            }
        }

        $this->db->where('service_cat_id', $id);
        return $this->db->update('service_category', $data);
    }

    public function delete_category($id)
    {
        $image = $this->get_all_service_category_by_id($id);
        if(file_exists($image->service_cat_image))
        {
            unlink($image->service_cat_image);
        }
        $this->db->where('service_cat_id', $id);
       return $this->db->delete('service_category');
    }

    // Service Section Start

    public function get_all_service()
    {
        $this->db->select('a.*, b.*');
        $this->db->from('service a');
        $this->db->join('service_category b', 'b.service_cat_id = a.service_category');
        return $this->db->get()->result();
    }

    public function get_all_service_by_cat_id($id)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('service a');
        $this->db->join('service_category b', 'b.service_cat_id = a.service_category');
        $this->db->where('service_category', $id);
        return $this->db->get()->result();
    }

    public function get_service_by_slug($slug)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('service a');
        $this->db->join('service_category b', 'b.service_cat_id = a.service_category');
        $this->db->where('service_slug', $slug);
        return $this->db->get()->row();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('service_id', $id);
        return $this->db->get('service')->row();
    }

    public function add_new_service()
    {
        $data = array(
            'service_name'      => $this->input->post('service_name'), 
            'service_slug'      => slug($this->input->post('service_name')),
            'service_price'     => $this->input->post('service_price'), 
            'service_capacity'  => $this->input->post('service_capacity'), 
            'service_duration'  => $this->input->post('service_duration'), 
            'service_category'  => $this->input->post('service_category'), 
            'service_description' => $this->input->post('service_description'),

        );

        if(!empty($_FILES['service_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['service_image']['name'];
            $_FILES['file']['type'] = $_FILES['service_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['service_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['service_image']['error'];
            $_FILES['file']['size'] = $_FILES['service_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['service_image']['name'];
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
                    $data['service_image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('service', $data);
    }

    public function update_service($id)
    {
        $data = array(
            'service_name'      => $this->input->post('service_name'), 
            'service_slug'      => slug($this->input->post('service_name')),
            'service_price'     => $this->input->post('service_price'), 
            'service_capacity'  => $this->input->post('service_capacity'), 
            'service_duration'  => $this->input->post('service_duration'), 
            'service_category'  => $this->input->post('service_category'), 
            'service_description' => $this->input->post('service_description'),
        );

        if(!empty($_FILES['service_image']['name']))
        {
            $image = $this->get_service_by_id($id);
            if(file_exists($image->service_image))
            {
                unlink($image->service_image);
            }
            $_FILES['file']['name'] = $_FILES['service_image']['name'];
            $_FILES['file']['type'] = $_FILES['service_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['service_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['service_image']['error'];
            $_FILES['file']['size'] = $_FILES['service_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['service_image']['name'];
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
                    $data['service_image'] = 'uploads/' . $filename;

                }
            }
        }

        $this->db->where('service_id', $id);
        return $this->db->update('service', $data);
    }

    public function delete_service($id)
    {
        $image = $this->get_service_by_id($id);
        if(file_exists($image->service_image))
        {
            unlink($image->service_image);
        }
        $this->db->where('service_id', $id);
        return $this->db->delete('service');
    }

}

