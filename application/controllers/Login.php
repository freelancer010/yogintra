<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends Home_Core_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }


	public function index()
	{
        $this->load->helper('string');
        $error = '';
        if(isset($_POST['form1'])) 
        {

            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === false) 
            {
                $this->session->set_userdata('errors', validation_errors());
                redirect(base_url().'login');
            }
            else
            {
               $email_id = $this->input->post('user_email');
               $password = $this->input->post('password');

                $un = $this->auth_model->check_email($email_id);
                if(!$un) {
                    $error = 'Email ID is wrong!';
                    $this->session->set_userdata('error',$error);
                    redirect(base_url().'login');
                } 
                else 
                {
                    $pw = $this->auth_model->check_password('user_email', $email_id, $password);
                    if(!$pw)
                    {
                        $error = 'Password is wrong!';
                        $this->session->set_userdata('error',$error);
                        redirect(base_url().'admin');
                    }
                    else
                    {
                        $rand = rand();
                        $user = array(
                            'sess_id' => $pw['user_id'],
                            'sess_mobile' => $pw['user_mobile'],
                            'sess_email' => $pw['user_email'],
                            'sess_role' => $pw['user_role'],
                            'sess_status' => $pw['user_status'],
                            'sess_logged_in' => true,
                            'sess_token' => random_string('alnum', 8),
                            'sess_app_id' => $this->config->item('app_key'),
                        );
                        $this->auth_model->active_token($pw['user_id'], $user['sess_token']);
                        $this->session->set_userdata($user);
                        redirect(base_url().'admin/admin/dashboard');
                    }
                }
            }
        } 
        else 
        {
            if($this->session->userdata('sess_logged_in')) 
            {
                redirect(base_url().'admin/admin/dashboard');
            }
            else
            {
                $data['title'] = 'Login Now';
        		$data['app_setting'] = $this->setting_model->get_all_app_setting();		
        		$this->load->view('login', $data);
            }
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
}
