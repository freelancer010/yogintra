<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Admin_Core_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('service_model', 'service');
	}

	public function service_category() {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_category'] = $this->service->get_all_service_category();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/service/service_category');
		$this->load->view('admin/include/footer');
	}

	public function add_new_category()
    {
        
        if ($this->service->add_new_category()) {
            $this->session->set_userdata('success', "Data Successfully Added");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Data Added Faild");
            redirect($this->agent->referrer());
        }
    }

    public function edit_service_category($id) {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['category'] = $this->service->get_all_service_category_by_id($id);
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/service/edit_service_category');
		$this->load->view('admin/include/footer');
	}

    public function update_category($id)
    {
        
        if ($this->service->update_category($id)) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/service/service_category');
        } else {
            $this->session->set_userdata('error', "Data Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    public function delete_category($id)
    {
        
        if ($this->service->delete_category($id)) {
            $this->session->set_userdata('success', "Data Successfully Deleted");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Data Deleted Faild");
            redirect($this->agent->referrer());
        }
    }


    // Service Section Start

    public function all_service()
    {
    	$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_service'] = $this->service->get_all_service();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/service/all_service');
		$this->load->view('admin/include/footer');
    }

    public function add_service()
    {
    	$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_service'] = $this->service->get_all_service();
		$data['all_category'] = $this->service->get_all_service_category();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/service/add_service');
		$this->load->view('admin/include/footer');
    }


    public function add_new_service()
    {
        if ($this->service->add_new_service()) {
            $this->session->set_userdata('success', "Data Successfully Added");
            redirect(base_url().'admin/service/all_service');
        } else {
            $this->session->set_userdata('error', "Data Added Faild");
            redirect($this->agent->referrer());
        }
    }

    public function edit_service($id)
    {
    	$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['service'] = $this->service->get_service_by_id($id);
		$data['all_category'] = $this->service->get_all_service_category();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/service/edit_service');
		$this->load->view('admin/include/footer');
    }

    public function update_service($id)
    {
        if ($this->service->update_service($id)) {
            $this->session->set_userdata('success', "Data Successfully Update");
            redirect(base_url().'admin/service/all_service');
        } else {
            $this->session->set_userdata('error', "Data Update Faild");
            redirect($this->agent->referrer());
        }
    }

    public function delete_service($id)
    {
        if ($this->service->delete_service($id)) {
            $this->session->set_userdata('success', "Data Successfully Delete");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Data Delete Faild");
            redirect($this->agent->referrer());
        }
    }

	
	
}
