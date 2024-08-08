<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoga_center extends Admin_Core_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('yoga_model', 'yoga');
	}

	public function view_all_yoga_center() {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_center'] = $this->yoga->get_all_yoga_center();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/yoga/all_yoga_center');
		$this->load->view('admin/include/footer');
	}

    public function add_center() {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/yoga/add_center');
		$this->load->view('admin/include/footer');
	}

	public function add_new_center()
    {
        if ($this->yoga->add_new_center()) {
            $this->session->set_userdata('success', "Center Successfully Added");
            redirect(base_url().'admin/yoga_center/view_all_yoga_center');
        } else {
            $this->session->set_userdata('error', "Center Added Faild");
            redirect($this->agent->referrer());
        }
    }

	public function edit_center($id) {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['center'] = $this->yoga->get_yoga_center_by_id($id);
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/yoga/edit_center');
		$this->load->view('admin/include/footer');
	}

	function update_new_center($id)
	{
		if ($this->yoga->update_new_center($id)) {
            $this->session->set_userdata('success', "Center Successfully Updated");
            redirect(base_url().'admin/yoga_center/view_all_yoga_center');
        } else {
            $this->session->set_userdata('error', "Center Updated Faild");
            redirect($this->agent->referrer());
        }
	}
		function delete_center($id)
	{
		if ($this->yoga->delete_center($id)) {
            $this->session->set_userdata('success', "Center Successfully Deleted");
            redirect(base_url().'admin/yoga_center/view_all_yoga_center');
        } else {
            $this->session->set_userdata('error', "Center Delete Faild");
            redirect($this->agent->referrer());
        }
	}

	
}
