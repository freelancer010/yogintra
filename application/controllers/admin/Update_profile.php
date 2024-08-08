<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_profile extends Admin_Core_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }

	public function update_profile_details()
	{
		$data['title'] = 'Profile Setting';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();	
		$data['user'] = $this->user->get_user_by_id(user_id());	
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/profile/update_profile_details', $data);
		$this->load->view('admin/include/footer', $data);
	}

	//Application Setting update
	public function update_profile_details_information()
    {
    	$id = user_id();
        if ($this->user->update_profile_details_information($id)) {
            $this->session->set_userdata('success', "Details Successfully Updated");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Details Update Faild");
            redirect($this->agent->referrer());
        }
    }
	
	public function update_profile_password()
	{
		$data['title'] = 'Profile Password';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();	
		$data['user'] = $this->user->get_user_by_id(user()->user_id);	
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/profile/update_profile_password', $data);
		$this->load->view('admin/include/footer', $data);
	}

	public function check_current_password()
    {
    	$id = user()->user_id;
        echo $this->user->check_current_password($this->input->post('current_password'), $id);
    }
	public function update_profile_details_password()
    {
    	$id = user()->user_id;
    	$check = $this->user->check_current_password($this->input->post('current_password'), $id);
    	if($this->input->post('new_password') == $this->input->post('confirm_password'))
    	{
	    	if(!empty($check))
	    	{
	    		if ($this->user->update_profile_details_password($id)) 
	    		{
		            $this->session->set_userdata('success', "Password Successfully Updated");
		            redirect($this->agent->referrer());
		        } 
		        else 
		        {
		            $this->session->set_userdata('error', "Password Update Faild");
		            redirect($this->agent->referrer());
		        }
	    	}
	    	else
	    	{
	    		$this->session->set_userdata('error', "Old Password Not Match");
		        redirect($this->agent->referrer());
	    	}
    	}
    	else
    	{
    		$this->session->set_userdata('error', "New Password & Confirm Password Not Match");
		    redirect($this->agent->referrer());
    	}
    }

}
