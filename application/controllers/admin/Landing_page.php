<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends Admin_Core_Controller {

	public function __construct()
    {
        parent::__construct();
         $this->load->model('Landing_model');
    }

	

    public function landing_page()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_page'] = $this->Landing_model->get_all_landing_page();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/landing_page/all_landing_page', $data);
        $this->load->view('admin/include/footer', $data);
    }

    public function add_landing_page()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/landing_page/add_landing_page', $data);
        $this->load->view('admin/include/footer', $data);
    }

    function add_new_landing_page()
    {
        if ($this->Landing_model->add_new_landing_page()) 
        {
            $this->session->set_userdata('success', "Page Successfully Added");
            redirect(base_url().'admin/Landing_page/landing_page');
        } 
        else 
        {
            $this->session->set_userdata('error', "Page Added Faild");
            redirect($this->agent->referrer());
        }
    }

    public function edit_landing_page($id)
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['page'] = $this->Landing_model->get_landing_page_by_id($id);
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/landing_page/edit_landing_page');
        $this->load->view('admin/include/footer');
    }

    function update_landing_page($id)
    {
        if ($this->Landing_model->update_landing_page($id)) 
        {
            $this->session->set_userdata('success', "Page Successfully Updated");
            redirect(base_url().'admin/Landing_page/landing_page');
        } 
        else 
        {
            $this->session->set_userdata('error', "Page Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    function delete_landing_page($id)
    {
        if ($this->Landing_model->delete_landing_page($id)) 
        {
            $this->session->set_userdata('success', "Page Successfully Deleted");
            redirect(base_url().'admin/Landing_page/landing_page');
        } 
        else 
        {
            $this->session->set_userdata('error', "Page Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

   
   
}