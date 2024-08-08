<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_setting extends Admin_Core_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function all_slider()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting(); 
        $data['all_slider'] = $this->Front_model->get_all_slider(); 
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/front_setting/view_all_slider');
        $this->load->view('admin/include/footer');
    }

    public function add_new_slider()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting(); 
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/front_setting/add_new_slider');
        $this->load->view('admin/include/footer');
    }

    public function new_slider_add()
    {
        
        if ($this->Front_model->new_slider_add()) {
            $this->session->set_userdata('success', "Slider Successfully Added");
            redirect(base_url().'admin/front_setting/all_slider');
        } else {
            $this->session->set_userdata('error', "Slider Added Faild");
            redirect($this->agent->referrer());
        }
    }

    public function edit_slider($id)
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting(); 
        $data['slider'] = $this->Front_model->get_slider_by_id($id); 
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/front_setting/edit_slider');
        $this->load->view('admin/include/footer');
    }

    public function update_slider($id)
    {
        if ($this->Front_model->update_slider($id)) {
            $this->session->set_userdata('success', "Slider Successfully Updated");
            redirect(base_url().'admin/front_setting/all_slider');
        } else {
            $this->session->set_userdata('error', "Slider Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    public function delete_slider($id)
    {
        if ($this->Front_model->delete_slider($id)) {
            $this->session->set_userdata('success', "Slider Successfully Deleted");
            redirect(base_url().'admin/front_setting/all_slider');
        } else {
            $this->session->set_userdata('error', "Slider Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

    function section_1()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['feature_heading'] = $this->Front_model->get_our_features_heading();
        $data['all_service'] = $this->Front_model->get_all_our_features();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/section_1');
        $this->load->view('admin/include/footer');
    }

    function update_our_features_heading_section()
    {
        if ($this->Front_model->update_our_features_heading_section()) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/front_setting/section_1');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Update Faild");
            redirect($this->agent->referrer());
        }
    }

    function add_new_our_features()
    {
        if ($this->Front_model->add_new_our_features()) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/front_setting/section_1');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Update Faild");
            redirect($this->agent->referrer());
        }
    }

    function edit_our_features($id)
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['features'] = $this->Front_model->get_our_features_by_id($id);
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/edit_section_1');
        $this->load->view('admin/include/footer');
    }

    function update_our_features($id)
    {
        if ($this->Front_model->update_our_features($id)) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/front_setting/section_1');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    function delete_our_features($id)
    {
        if ($this->Front_model->delete_our_features($id)) {
            $this->session->set_userdata('success', "Data Successfully Deleted");
            redirect(base_url().'admin/front_setting/section_1');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

    function section_2()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['service_heading'] = $this->Front_model->get_our_service_image();
        $data['all_service'] = $this->Front_model->get_all_our_service();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/section_2');
        $this->load->view('admin/include/footer');
    }

    function update_our_service_image_section()
    {
        if ($this->Front_model->update_our_service_image_section()) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/front_setting/section_2');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Update Faild");
            redirect($this->agent->referrer());
        }
    }

    function add_new_service()
    {
        if ($this->Front_model->add_new_service()) {
            $this->session->set_userdata('success', "Data Successfully Added");
            redirect(base_url().'admin/front_setting/section_2');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Added Faild");
            redirect($this->agent->referrer());
        }
    }

    function edit_our_service($id)
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['service'] = $this->Front_model->get_our_service_by_id($id);
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/edit_section_2');
        $this->load->view('admin/include/footer');
    }

    function update_our_service_section($id)
    {
        if ($this->Front_model->update_our_service_section($id)) {
            $this->session->set_userdata('success', "Data Successfully Updated");
            redirect(base_url().'admin/front_setting/section_2');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    function delete_our_service($id)
    {
        if ($this->Front_model->delete_our_service($id)) {
            $this->session->set_userdata('success', "Data Successfully Deleted");
            redirect(base_url().'admin/front_setting/section_2');
        } 
        else 
        {
            $this->session->set_userdata('error', "Data Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

    // Testimonials Start

    function testimonial()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_testimonial'] = $this->Front_model->get_all_testimonial();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/all_testimonial', $data);
        $this->load->view('admin/include/footer', $data);
    }

    function add_testimonial()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/add_testimonial');
        $this->load->view('admin/include/footer');
    }

    function add_new_testimonials()
    {
    
      if ($this->Front_model->add_new_testimonials()) {
        $this->session->set_userdata('success', "Testimonial Successfully Added");
        redirect(base_url().'admin/front_setting/testimonial');
      } 
      else 
      {
          $this->session->set_userdata('error', "Testimonial Added Faild");
          redirect($this->agent->referrer());
      }
    }

    function delete_testmonials($id)
    {
          if ($this->Front_model->delete_testmonials()) {
            $this->session->set_userdata('success', "Testimonial Successfully Deleted");
            redirect(base_url().'admin/front_setting/testimonial');
          } 
          else 
          {
              $this->session->set_userdata('error', "Testimonial Deleted Faild");
              redirect($this->agent->referrer());
          }
    }

    function edit_testmonials($id)
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['testimonial'] = $this->Front_model->get_testimonials_details_by_id($id);
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/edit_testmonials', $data);
        $this->load->view('admin/include/footer', $data);
    }

    function update_testimonials($id)
    {
        if ($this->Front_model->update_testimonials($id)) {
            $this->session->set_userdata('success', "Testimonial Successfully Updated");
            redirect(base_url().'admin/front_setting/testimonial');
        } 
        else 
        {
            $this->session->set_userdata('error', "Testimonial Update Faild");
            redirect($this->agent->referrer());
        }
    }

    public function landing_page()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['all_page'] = $this->Front_model->get_all_landing_page();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/all_landing_page', $data);
        $this->load->view('admin/include/footer', $data);
    }

    public function add_landing_page()
    {
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/add_landing_page', $data);
        $this->load->view('admin/include/footer', $data);
    }

    function add_new_landing_page()
    {
        if ($this->Front_model->add_new_landing_page()) 
        {
            $this->session->set_userdata('success', "Page Successfully Added");
            redirect(base_url().'admin/front_setting/landing_page');
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
        $data['page'] = $this->Front_model->get_landing_page_by_id($id);
        $this->load->view('admin/include/header',$data); 
        $this->load->view('admin/front_setting/edit_landing_page');
        $this->load->view('admin/include/footer');
    }

    function update_landing_page($id)
    {
        if ($this->Front_model->update_landing_page($id)) 
        {
            $this->session->set_userdata('success', "Page Successfully Updated");
            redirect(base_url().'admin/front_setting/landing_page');
        } 
        else 
        {
            $this->session->set_userdata('error', "Page Updated Faild");
            redirect($this->agent->referrer());
        }
    }

    function delete_landing_page($id)
    {
        if ($this->Front_model->delete_landing_page($id)) 
        {
            $this->session->set_userdata('success', "Page Successfully Deleted");
            redirect(base_url().'admin/front_setting/landing_page');
        } 
        else 
        {
            $this->session->set_userdata('error', "Page Deleted Faild");
            redirect($this->agent->referrer());
        }
    }

   
   
}