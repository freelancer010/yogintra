<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Core_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function dashboard() {
		$data['title'] = 'Home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/main');
		$this->load->view('admin/include/footer');
	}


	public function check_mobile_no($mobile) {
		$this->db->select('user_id');
		$this->db->where('user_mobile', $mobile);
		$data = $this->db->get('users')->row();
		if ($data) {
			$arrayName = array(
				'msg' => '<span class="badge badge-danger">Mobile No Already Exits.</span>',
				'status' => 6,
			);
			echo json_encode($arrayName);
		} else {
			$arrayName = array(
				'msg' => '<span class="badge badge-success">Mobile No Available.</span>',
				'status' => 5,
			);
			echo json_encode($arrayName);
		}
	}

	public function check_email_id() {
		$email = $this->input->post('email');
		$this->db->select('user_id');
		$this->db->where('user_email', $email);
		$data = $this->db->get('users')->row();
		if ($data) {
			$arrayName = array(
				'msg' => '<span class="badge badge-danger">Email ID Already Exits.</span>',
				'status' => 6,
			);
			echo json_encode($arrayName);
		} else {
			$arrayName = array(
				'msg' => '<span class="badge badge-success">Email ID Available.</span>',
				'status' => 5,
			);
			echo json_encode($arrayName);
		}
	}

	
}
