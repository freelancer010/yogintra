<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model 
{
	// Get All Category
    public function get_all_category()
    {
        return $this->db->get('gallery_category')->result();
    }

    function add_category()
    {
        $data['g_cat_name'] = $this->input->post('g_cat_name');
        return $this->db->insert('gallery_category', $data);
    }

    function update_category($id)
    {
        $data['g_cat_name'] = $this->input->post('g_cat_name');
        $this->db->where('g_cat_id', $id);
        return $this->db->update('gallery_category', $data);
    }

    function delete_category($id)
    {
        $this->db->where('gallery_category', $id);
        $check = $this->db->get('gallery')->num_rows();
        if($check)
        {
            return false;
        }
        else{
            $this->db->where('g_cat_id', $id);
            return $this->db->delete('gallery_category');
        }
        
    }

    function get_all_gallery()
    {
        $this->db->select('a.*, b.*');
        $this->db->from('gallery a');
        $this->db->join('gallery_category b', 'b.g_cat_id = a.gallery_category');
        return $this->db->get()->result();
    }

    function add_gallery()
    {
        $data =[
            'gallery_category' => $this->input->post('gallery_category'),
            'gallery_video' => $this->input->post('gallery_video'),
            'gallery_is_video_or_image' => $this->input->post('gallery_is_video_or_image'),
        ];

        if(!empty($_FILES['gallery_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['gallery_image']['name'];
            $_FILES['file']['type'] = $_FILES['gallery_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['gallery_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['gallery_image']['error'];
            $_FILES['file']['size'] = $_FILES['gallery_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['gallery_image']['name'];
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
                    $data['gallery_image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('gallery', $data);
    }

    function get_gallery_by_id($id)
    {
        $this->db->where('gallery_id', $id);
        return $this->db->get('gallery')->row();
    }

    function update_gallery($id)
    {
        $data =[
            'gallery_category' => $this->input->post('gallery_category'),
            'gallery_video' => $this->input->post('gallery_video'),
            'gallery_is_video_or_image' => $this->input->post('gallery_is_video_or_image'),
        ];

        if(!empty($_FILES['gallery_image']['name']))
        {
            $imag = $this->get_gallery_by_id($id);
            if(file_exists($imag->gallery_image))
            {
                unlink($imag->gallery_image);
            }

            $_FILES['file']['name'] = $_FILES['gallery_image']['name'];
            $_FILES['file']['type'] = $_FILES['gallery_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['gallery_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['gallery_image']['error'];
            $_FILES['file']['size'] = $_FILES['gallery_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['gallery_image']['name'];
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
                    $data['gallery_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('gallery_id', $id);
        return $this->db->update('gallery', $data);
    }

    function delete_gallery($id)
    {
        $imag = $this->get_gallery_by_id($id);
        if(file_exists($imag->gallery_image))
        {
            unlink($imag->gallery_image);
        }
        $this->db->where('gallery_id', $id);
        return $this->db->delete('gallery');
    }

}



		  