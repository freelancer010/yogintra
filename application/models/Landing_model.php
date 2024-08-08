<?php


class Landing_model extends CI_Model
{

    public function get_all_landing_page()
    {
        return $this->db->get('new_landing_page')->result();
    }

    public function get_landing_page_by_id($id)
    {
        $this->db->where('page_id', $id);
        return $this->db->get('new_landing_page')->row();
    }

    public function get_landing_page_by_slug($slug)
    {
        $this->db->where('page_slug', $slug);
        return $this->db->get('new_landing_page')->row();
    }



    public function add_new_landing_page()
    {
        $data = array(
            'page_name'                 => $this->input->post('page_name'), 
            'page_title'                 => $this->input->post('page_title'), 
            'page_slug'                 => slug($this->input->post('page_name')),
            'page_meta_description'     => $this->input->post('page_meta_description'), 
            'page_meta_title'           => $this->input->post('page_meta_title'), 
            'page_keywords'             => $this->input->post('page_keywords'), 
            'page_head_code'            => $this->input->post('page_head_code'), 
            'page_image_title'          => $this->input->post('page_image_title'), 
            'page_image_description'    => $this->input->post('page_image_description'), 
            'page_content'              => $this->input->post('page_content'), 
        );

        if(!empty($_FILES['page_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['page_image']['name'];
            $_FILES['file']['type'] = $_FILES['page_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['page_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['page_image']['error'];
            $_FILES['file']['size'] = $_FILES['page_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['page_image']['name'];
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
                    $data['page_image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('new_landing_page', $data);
    }

    public function update_landing_page($id)
    {
        $data = array(
            'page_name'                 => $this->input->post('page_name'), 
            'page_title'                 => $this->input->post('page_title'), 
            'page_slug'                 => slug($this->input->post('page_name')),
            'page_meta_description'     => $this->input->post('page_meta_description'), 
            'page_meta_title'           => $this->input->post('page_meta_title'), 
            'page_keywords'             => $this->input->post('page_keywords'), 
            'page_head_code'            => $this->input->post('page_head_code'), 
            'page_image_title'          => $this->input->post('page_image_title'), 
            'page_image_description'    => $this->input->post('page_image_description'), 
            'page_content'              => $this->input->post('page_content'), 
        );

        if(!empty($_FILES['page_image']['name']))
        {
            $image = $this->get_landing_page_by_id($id);
            if(file_exists($image->page_image))
            {
                unlink($image->page_image);
            }
            $_FILES['file']['name'] = $_FILES['page_image']['name'];
            $_FILES['file']['type'] = $_FILES['page_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['page_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['page_image']['error'];
            $_FILES['file']['size'] = $_FILES['page_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['page_image']['name'];
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
                    $data['page_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('page_id', $id);
        return $this->db->update('new_landing_page', $data);
    }

    public function delete_landing_page($id)
    {
        $image = $this->get_landing_page_by_id($id);
        if(file_exists($image->page_image))
        {
            unlink($image->page_image);
        }
        $this->db->where('page_id', $id);
        return $this->db->delete('new_landing_page');
    }

}   
