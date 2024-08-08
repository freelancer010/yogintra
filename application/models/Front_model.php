<?php


class Front_model extends CI_Model
{

    
    function get_all_slider()
    {
        return $this->db->get('slider')->result();
    }

    function new_slider_add()
    {
        $data = array(
            'slider_heading' => $this->input->post('slider_heading'),
            'slider_sub_heading' => $this->input->post('slider_sub_heading'),
            'slider_btn_name' => $this->input->post('slider_btn_name'),
            'slider_btn_link' => $this->input->post('slider_btn_link'),
            'slider_text_direction' => $this->input->post('slider_text_direction'),
            'slider_status' => 1, 
        );

        if(!empty($_FILES['slider_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['slider_image']['name'];
            $_FILES['file']['type'] = $_FILES['slider_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['slider_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['slider_image']['error'];
            $_FILES['file']['size'] = $_FILES['slider_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['slider_image']['name'];
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
                    $data['slider_image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('slider', $data);
    }

    function get_slider_by_id($id)
    {
        $this->db->where('slider_id', $id);
        return $this->db->get('slider')->row();
    }

    function update_slider($id)
    {
        $data = array(
            'slider_heading' => $this->input->post('slider_heading'),
            'slider_sub_heading' => $this->input->post('slider_sub_heading'),
            'slider_btn_name' => $this->input->post('slider_btn_name'),
            'slider_btn_link' => $this->input->post('slider_btn_link'),
            'slider_text_direction' => $this->input->post('slider_text_direction'),
        );

        if(!empty($_FILES['slider_image']['name']))
        {
            $image = $this->get_slider_by_id($id);
            if(file_exists($image->slider_image))
            {
                unlink($image->slider_image);
            }
            $_FILES['file']['name'] = $_FILES['slider_image']['name'];
            $_FILES['file']['type'] = $_FILES['slider_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['slider_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['slider_image']['error'];
            $_FILES['file']['size'] = $_FILES['slider_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['slider_image']['name'];
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
                    $data['slider_image'] = 'uploads/' . $filename;

                }
            }
        }

        $this->db->where('slider_id', $id);
        return $this->db->update('slider', $data);
    }

    function delete_slider($id)
    {
        $image = $this->get_slider_by_id($id);
        if(file_exists($image->slider_image))
        {
            unlink($image->slider_image);
        }
        $this->db->where('slider_id', $id);
        return $this->db->delete('slider');
    }

    function change_status($data, $id)
    {
        return $this->db->table($this->home_slider)
        ->where('slider_id', $id)
        ->update($data);
    }

    function get_all_slider_frontend()
    {
        $this->db->where('slider_status', 1);
        return $this->db->get('slider')->result();
    }

    function get_our_features_heading()
    {
        $this->db->where('of_id', 1);
        return $this->db->get('our_feature_heading')->row();
    }

    function get_all_our_features()
    {
        return $this->db->get('our_feature')->result();
    }

    function update_our_features_heading_section()
    {
        $data = [
            'of_heading' => $this->input->post('of_heading'),
            'of_sub_heading' => $this->input->post('of_sub_heading'),
        ];
        if(!empty($_FILES['of_image']['name']))
        {
            $image = $this->get_our_features_heading();
            if(file_exists($image->of_image))
            {
                unlink($image->of_image);
            }
            $_FILES['file']['name'] = $_FILES['of_image']['name'];
            $_FILES['file']['type'] = $_FILES['of_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['of_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['of_image']['error'];
            $_FILES['file']['size'] = $_FILES['of_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['of_image']['name'];
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
                    $data['of_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('of_id', 1);
        return $this->db->update('our_feature_heading', $data);
    }

    function add_new_our_features()
    {
        $data = [
            'of_heading' => $this->input->post('of_heading'),
            'of_description' => $this->input->post('of_description'),
        ];
        if(!empty($_FILES['of_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['of_image']['name'];
            $_FILES['file']['type'] = $_FILES['of_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['of_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['of_image']['error'];
            $_FILES['file']['size'] = $_FILES['of_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['of_image']['name'];
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
                    $data['of_image'] = 'uploads/' . $filename;

                }
            }
        }
        return $this->db->insert('our_feature', $data);
    }

    function get_our_features_by_id($id)
    {
        $this->db->where('of_id', $id);
        return $this->db->get('our_feature')->row();
    }

    function update_our_features($id)
    {
        $data = [
            'of_heading' => $this->input->post('of_heading'),
            'of_description' => $this->input->post('of_description'),
        ];
        if(!empty($_FILES['of_image']['name']))
        {
            $image = $this->get_our_features_by_id($id);
            if(file_exists($image->of_image))
            {
                unlink($image->of_image);
            }
            $_FILES['file']['name'] = $_FILES['of_image']['name'];
            $_FILES['file']['type'] = $_FILES['of_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['of_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['of_image']['error'];
            $_FILES['file']['size'] = $_FILES['of_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['of_image']['name'];
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
                    $data['of_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('of_id', $id);
        return $this->db->update('our_feature', $data);
    }

    function delete_our_features($id)
    {
        $image = $this->get_our_features_by_id($id);
        if(file_exists($image->of_image))
        {
            unlink($image->of_image);
        }
        $this->db->where('of_id', $id);
        return $this->db->delete('our_feature');
    }

    /// Section 2 Start

    function get_our_service_image()
    {
        $this->db->where('os_image_id', 1);
        return $this->db->get('our_service_image')->row();        
    }

    function get_all_our_service()
    {
        return $this->db->get('our_service')->result(); 
    }

    function update_our_service_image_section()
    {
        $data = [
            'os_image_heading' => $this->input->post('os_image_heading'),
            'os_image_sub_heading' => $this->input->post('os_image_sub_heading'), 
            'os_image_description' => $this->input->post('os_image_description'), 
        ];
        if(!empty($_FILES['os_image_image']['name']))
        {
            $image = $this->get_our_service_image();
            if(file_exists($image->os_image_image))
            {
                unlink($image->os_image_image);
            }
            $_FILES['file']['name'] = $_FILES['os_image_image']['name'];
            $_FILES['file']['type'] = $_FILES['os_image_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['os_image_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['os_image_image']['error'];
            $_FILES['file']['size'] = $_FILES['os_image_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['os_image_image']['name'];
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
                    $data['os_image_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('os_image_id', 1);
        return $this->db->update('our_service_image', $data);
    }

    function add_new_service()
    {
        $data = [
            'os_heading' => $this->input->post('os_heading'),
        ];
        if(!empty($_FILES['os_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['os_image']['name'];
            $_FILES['file']['type'] = $_FILES['os_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['os_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['os_image']['error'];
            $_FILES['file']['size'] = $_FILES['os_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['os_image']['name'];
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
                    $data['os_image'] = 'uploads/' . $filename;

                }
            }
        }
        return $this->db->insert('our_service', $data);
    }

    function get_our_service_by_id($id)
    {
        $this->db->where('os_id', $id);
        return $this->db->get('our_service')->row();
    }

    function update_our_service_section($id)
    {
        $data = [
            'os_heading' => $this->input->post('os_heading'),
        ];
        if(!empty($_FILES['os_image']['name']))
        {
            $image = $this->get_our_service_by_id($id);
            if(file_exists($image->os_image))
            {
                unlink($image->os_image);
            }
            $_FILES['file']['name'] = $_FILES['os_image']['name'];
            $_FILES['file']['type'] = $_FILES['os_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['os_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['os_image']['error'];
            $_FILES['file']['size'] = $_FILES['os_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['os_image']['name'];
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
                    $data['os_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('os_id', $id);
        return $this->db->update('our_service', $data);
    }

    function delete_our_service($id)
    {
        $image = $this->get_our_service_by_id($id);
        if(file_exists($image->os_image))
        {
            unlink($image->os_image);
        }
        $this->db->where('os_id', $id);
        return $this->db->delete('our_service');
    }
   
    // Testimonials Start

    function get_all_testimonial()
    {
        return $this->db->get('testimonials')->result();
    }

    function add_new_testimonials()
    {
        $data = [
            'test_name' => $this->input->post('test_name'),
            'test_position' => $this->input->post('test_position'), 
            'test_review' => $this->input->post('test_review'), 
            'test_description' => $this->input->post('test_description'), 
        ];
        if(!empty($_FILES['test_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['test_image']['name'];
            $_FILES['file']['type'] = $_FILES['test_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['test_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['test_image']['error'];
            $_FILES['file']['size'] = $_FILES['test_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['test_image']['name'];
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
                    $data['test_image'] = 'uploads/' . $filename;

                }
            }
            
        }
        return $this->db->insert('testimonials', $data);
    }

    function get_testimonials_details_by_id($id)
    {
        $this->db->where('test_id', $id);
        return $this->db->get('testimonials')->row();
    }

    function delete_testmonials($id)
    {
        $image = $this->get_testimonials_details_by_id($id);
        if(file_exists($image->test_image))
        {
            unlink($image->test_image);
        }
        $this->db->where('test_id', $id);
        return $this->db->delete('testimonials');
    }

    function update_testimonials($id)
    {
        $data = [
            'test_name' => $this->input->post('test_name'),
            'test_position' => $this->input->post('test_position'), 
            'test_review' => $this->input->post('test_review'), 
            'test_description' => $this->input->post('test_description'), 
        ];
        if(!empty($_FILES['test_image']['name']))
        {
            $image = $this->get_testimonials_details_by_id($id);
            if(file_exists($image->test_image))
            {
                unlink($image->test_image);
            }
            $_FILES['file']['name'] = $_FILES['test_image']['name'];
            $_FILES['file']['type'] = $_FILES['test_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['test_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['test_image']['error'];
            $_FILES['file']['size'] = $_FILES['test_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['test_image']['name'];
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
                    $data['test_image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('test_id', $id);
        return $this->db->update('testimonials', $data);
    }

    public function get_all_landing_page()
    {
        return $this->db->get('landing_page')->result();
    }

    public function get_landing_page_by_id($id)
    {
        $this->db->where('page_id', $id);
        return $this->db->get('landing_page')->row();
    }

    public function get_landing_page_by_slug($slug)
    {
        $this->db->where('page_slug', $slug);
        return $this->db->get('landing_page')->row();
    }
    public function get_landing_page_by_slug_new($slug)
    {
        $this->db->where('page_slug', $slug);
        return $this->db->get('new_landing_page')->row();
    }

    public function add_new_landing_page()
    {
        $data = array(
            'page_name'                 => $this->input->post('page_name'), 
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

        return $this->db->insert('landing_page', $data);
    }

    public function update_landing_page($id)
    {
        $data = array(
            'page_name'                 => $this->input->post('page_name'), 
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
        return $this->db->update('landing_page', $data);
    }

    public function delete_landing_page($id)
    {
        $image = $this->get_landing_page_by_id($id);
        if(file_exists($image->page_image))
        {
            unlink($image->page_image);
        }
        $this->db->where('page_id', $id);
        return $this->db->delete('landing_page');
    }

}   
