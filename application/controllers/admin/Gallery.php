<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Admin_Core_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('gallery_model');
        
    }

    public function view_all_category()
    {
        $data['title'] = 'view All Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_category'] = $this->gallery_model->get_all_category();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/gallery/all_category');
        $this->load->view('admin/include/footer');
    }

    function add_category()
    {
        if ($this->gallery_model->add_category()) {
            $this->session->set_userdata('success', "Category Successfully Added");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Category Added Faild");
            redirect($this->agent->referrer());
        }
    }

    function update_category($id)
    {
        if ($this->gallery_model->update_category($id)) {
            $this->session->set_userdata('success', "Category Successfully Updated");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Category Updated Faild");
            redirect($this->agent->referrer());
        }
    }


    function delete_category($id)
    {
        if ($this->gallery_model->delete_category($id)) {
            $this->session->set_userdata('success', "Category Successfully Deleted");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Category Deleted Faild. Please Deleted Category From Gallery");
            redirect($this->agent->referrer());
        }
    }

    function view_all_gallery()
    {
        $data['title'] = 'view All Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_data'] = $this->gallery_model->get_all_gallery();
        $data['all_category'] = $this->gallery_model->get_all_category();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/gallery/all_gallery');
        $this->load->view('admin/include/footer');
    }

    function add_gallery()
    {
        if ($this->gallery_model->add_gallery()) {
            $this->session->set_userdata('success', "Gallery Successfully Added");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Gallery Added Faild");
            redirect($this->agent->referrer());
        }
    }

    function edit_gallery($id)
    {
        $data['title'] = 'view All Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['gallery'] = $this->gallery_model->get_gallery_by_id($id);
        $data['all_category'] = $this->gallery_model->get_all_category();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/gallery/edit_gallery');
        $this->load->view('admin/include/footer');
    }

    function update_gallery($id)
    {
        if ($this->gallery_model->update_gallery($id)) {
            $this->session->set_userdata('success', "Gallery Successfully Updated");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Gallery Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    function delete_gallery($id)
    {
        if ($this->gallery_model->delete_gallery($id)) {
            $this->session->set_userdata('success', "Gallery Successfully Deleted");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Gallery Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

}

/* End of file Events.php */
/* Location: ./application/views/front/Events.php */