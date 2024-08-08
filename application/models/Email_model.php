<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model
{
    
    public function send_mail_event_booking($data_main)
    {
        $data = array(
            'subject' => $data_main['event_name'].' Reservation Confirmed.',
            'data' => $data_main,
            'to' => $data_main['email'],
            'template_path' => "email/event_booking",
        );
        return $this->send_email($data);
    }

    
    //send email
    public function send_email($data)
    {
        //send with codeigniter mail
        $this->load->library('email');
        $config = Array(
            'protocol' => 'mail',
            'smtp_host' => 'mail.yogintra.com ',
            'smtp_port' => '465',
            'smtp_user' => 'no-reply@yogintra.com',
            'smtp_pass' => 'dIz(ENS+l?sZ',
            'smtp_timeout' => 30,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        //initialize
        $this->email->initialize($config);
        //send email
        $message = $this->load->view($data['template_path'], $data, TRUE);
        $this->email->from('no-reply@yogintra.com', $app_setting->application_name);
        $this->email->to($data['to']);
        $list = array('support@yogintra.com');
        $this->email->cc($list);
        $this->email->subject($data['subject']);
        $this->email->message($message);

        $this->email->set_newline("\r\n");

        if ($this->email->send()) {
            return true;
        } else {
            
            $this->session->set_flashdata('error', $this->email->print_debugger(array('headers')));
            return false;
        }

    }
}