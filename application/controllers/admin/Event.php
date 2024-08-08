<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends Admin_Core_Controller {

    public function __construct()
    {
        parent::__construct();
        //check_permission('event');
    }

    public function view_all_event()
    {
        $data['title'] = 'view All Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['visual_setting'] = $this->setting_model->get_visual_setting();
        $data['get_all_event'] = $this->event_model->get_all_event();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/event/view_all_event');
        $this->load->view('admin/include/footer');
    }

    public function add_new_event()
    {
        $data['title'] = 'Add New Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['visual_setting'] = $this->setting_model->get_visual_setting();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/event/add_new_event');
        $this->load->view('admin/include/footer');
    }

    function add_event()
    {
        if ($this->event_model->add_event()) {
            $this->session->set_userdata('success', "Event Successfully Added");
            redirect(base_url().'admin/event/view_all_event');
        } else {
            $this->session->set_userdata('error', "Event Added Faild");
            redirect($this->agent->referrer());
        }
    }

    function edit_event($id)
    {
        $data['title'] = 'Edit Event';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['event'] = $this->event_model->get_event_by_id($id);
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/event/edit_event');
        $this->load->view('admin/include/footer');
    }
    
    function event_status($id,$status)
    {
 
       
        if ($this->event_model->event_status($id,$status)) {
            $this->session->set_userdata('success', "Event Status Change");
            redirect(base_url().'admin/event/view_all_event');
        } else {
            $this->session->set_userdata('error', "Event Status Not change");
            redirect($this->agent->referrer());
        }
    }

    public function update_event($id)
    {
        if ($this->event_model->update_event($id)) {
            $this->session->set_userdata('success', "Event Successfully Updated");
            redirect(base_url().'admin/event/view_all_event');
        } else {
            $this->session->set_userdata('error', "Event Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    public function delete_event($id)
    {
        if ($this->event_model->delete_event($id)) {
            $this->session->set_userdata('success', "Event Successfully Deleted");
            redirect(base_url().'admin/event/view_all_event');
        } else {
            $this->session->set_userdata('error', "Event Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

    public function event_booking()
    {
        $data['title'] = 'All Event Booking';
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_booking'] = $this->event_model->get_all_event_booking();
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/event/all_event_booking');
        $this->load->view('admin/include/footer');
    }




}

/* End of file Events.php */
/* Location: ./application/views/front/Events.php */