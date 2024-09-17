<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends Admin_Core_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        
    }

    public function blog_category()
    {
        $data['title'] = "Blog Category";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/blog_category', $data);
        $this->load->view('admin/include/footer');
    }
    
    // Add New Category
    public function add_new_blog_category()
    {
        if ($this->blog_model->add_new_blog_category()) 
        {
            $this->session->set_userdata('success', "Category Successfully Added");
            redirect(base_url().'admin/blog/blog_category');
        } else {
            $this->session->set_userdata('error', " Category Added Failed");
            redirect($this->agent->referrer());
        }
    }

    function edit_blog_category($id)
    {
        $data['title'] = "Blog Category";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['category'] = $this->blog_model->get_category_by_id($id);
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/edit_blog_category', $data);
        $this->load->view('admin/include/footer');
    }

    // Update Category
    public function update_blog_category($id)
    {
        if ($this->blog_model->update_blog_category($id)) 
        {
            $this->session->set_userdata('success', "Category Successfully Updated");
            redirect(base_url().'admin/blog/blog_category');
        } else {
            $this->session->set_userdata('error', " Category Update Failed");
            redirect($this->agent->referrer());
        }
    }
    // Delete Category
     public function delete_blog_category($id)
    {
     if ($this->blog_model->delete_blog_category($id)) 
        {
            $this->session->set_userdata('success', "Category Successfully Deleted");
            redirect(base_url().'admin/blog/blog_category');
        } else {
            $this->session->set_userdata('error', " Category Delete Failed");
            redirect($this->agent->referrer());
        }
    }

    // Blog  Post Add
    public function add_new_post()
    {
        $data['title'] = "Add New Post";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/add_new_post', $data);
        $this->load->view('admin/include/footer');
    }
    // Add new Post
     public function add_new_blog_post()
    {
        if ($this->blog_model->add_new_blog_post($post_slug)) 
        {
            $this->session->set_userdata('success', "Post Successfully Added");
            redirect(base_url().'admin/blog/view_all_post');
        } else {
            $this->session->set_userdata('error', " Post Added Failed");
            redirect($this->agent->referrer());
        }
    }

    //Send Push MSG
    public function send_to_post_by_push($post_id)
    {
        $this->db->select('*');
        $re = $this->db->get('tbl_settings');
        $settings_data = $re->row_array();

        $post = $this->blog_model->get_all_blog_by_id($post_id);
        $link = base_url()."blog-details/".$post->slug."/".$post->id;


        if (!empty($post)) {
        $subject = $post->title;
        $message = "<a href='" . $link . "'><img src='" . base_url() . $post->image_big . "' alt='image' style='max-width: 100%; height: auto;'></a><br><br>" . $post->content;
        $user_id = '4444';
        $content = array(
            "en" => $subject,
            'message' => $message
        );
        $fields = array(
            'app_id' => $settings_data['onesignal_app_id'],
            'filters' => array(array(
                "field" => "tag", 
                "key" => "user_id", 
                "relation" => "=", 
                "value" => $user_id)),
            'contents' => $content,
            'url' => $link
        );
        
        $fields = json_encode($fields);
       // print("\nJSON sent:\n");
        //print($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic '.$settings_data['onesignal_rest_key'].''));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        $this->session->set_userdata('success', 'Push Message Send Successfully.');
        redirect($this->agent->referrer());
            
        }
    }

    /**
     * Send to All  Subscribers
     */
    public function send_to_all_subscribers($post_id)
    {
        $post = $this->blog_model->get_all_blog_by_id($post_id);

        $link = base_url()."blog-details/".$post->slug."/".$post->id;
        
        if (!empty($post)) {
            $subject = $post->title;
            $message = "<a href='" . $link . "'><img src='" . base_url() . $post->image_big . "' alt='image' style='max-width: 100%; height: auto;'></a><br><br>" . $post->content;
            $this->load->model("email_model");

            $data['subscribers'] = $this->newsletter_model->get_subscribers();
            foreach ($data['subscribers'] as $item) 
            {
                $this->email_model->send_email_for_blog($item, $subject, $message);
            }
        }

        $this->session->set_userdata('success', "Email Send Successfully Send");
        redirect($this->agent->referrer());
    }

    // All Blog view Post 
    public function view_all_post()
    {
        $data['title'] = "View All Post";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['get_all_blog'] = $this->blog_model->get_all_blogs();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/view_all_post', $data);
        $this->load->view('admin/include/footer');
    }
    // Edit Blog Post
    public function edit_blog_post($id)
    {
        $data['title'] = "Edit Post";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['blog'] = $this->blog_model->get_all_blog_by_id($id);
        $data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/edit_blog_post', $data);
        $this->load->view('admin/include/footer');
    }
    // Update Blog Post
    public function update_blog_post($id)
    {
        if ($this->blog_model->update_blog_post($id)) 
        {
            $this->session->set_userdata('success', "Post Successfully Updated");
            redirect(base_url().'admin/blog/view_all_post');
        } else {
            $this->session->set_userdata('error', " Post Update Failed");
            redirect($this->agent->referrer());
        }
    }
    // Delete Blog Post
     public function delete_blog_post($id)
    {
     if ($this->blog_model->delete_blog_post($id)) 
        {
            $this->session->set_userdata('success', "Post Successfully Delete");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Post Delete Failed");
            redirect($this->agent->referrer());
        }
    }
    // View All Comments
    public function view_blog_comments()
    {
        $data['title'] = "View All Comments";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['get_all_comment'] = $this->blog_model->get_all_comment();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/view_all_comments', $data);
        $this->load->view('admin/include/footer');
    }
    // Approve Comment
     public function approve_comment($id)
    {
     if ($this->blog_model->approve_comment($id)) 
        {
            $this->session->set_userdata('success', "Comment Successfully Approve");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Comment Approve Failed");
            redirect($this->agent->referrer());
        }
    }
    // Approve Comment
     public function disapprove_comment($id)
    {
     if ($this->blog_model->disapprove_comment($id)) 
        {
            $this->session->set_userdata('success', "Comment Successfully Disapprove");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Comment Disapprove Failed");
            redirect($this->agent->referrer());
        }
    }
    // Delete Comment
     public function delete_blog_comment($id)
    {
     if ($this->blog_model->delete_blog_comment($id)) 
        {
            $this->session->set_userdata('success', "Comment Successfully Delete");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Comment Delete Failed");
            redirect($this->agent->referrer());
        }
    }

    public function widget()
    {
        $data['title'] = "Widget";
        $data['app_setting'] = $this->setting_model->get_all_app_setting();
        $data['get_all_widget'] = $this->blog_model->get_all_widget();
        $this->load->view('admin/include/header',$data);
        $this->load->view('admin/blog/widget', $data);
        $this->load->view('admin/include/footer');
    }
    public function add_widget()
    {
        if ($this->blog_model->add_widget()) 
        {
            $this->session->set_userdata('success', "Widget Successfully Added");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', " Widget Added Failed");
            redirect($this->agent->referrer());
        }
    }

    public function update_widget()
    {
        if ($this->blog_model->update_widget()) 
        {
            $this->session->set_userdata('success', "Widget Successfully Updated");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', " Widget Update Failed");
            redirect($this->agent->referrer());
        }
    }

    public function delete_widget($id)
    {
     if ($this->blog_model->delete_widget($id)) 
        {
            $this->session->set_userdata('success', "Widget Successfully Delete");
            redirect($this->agent->referrer());
        } else {
            $this->session->set_userdata('error', "Widget Delete Failed");
            redirect($this->agent->referrer());
        }
    }
    

    

     private function seoURL($string, $separator = '-')
    {
        if (is_null($string)) {
            return "";
        }

        $string = str_replace(array('[\', \']'), '', $string);
        $string = preg_replace('/\[.*\]/U', '', $string);
        $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
        $string = htmlentities($string, ENT_COMPAT, 'utf-8');
        $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
        $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
        return strtolower(trim($string, '-'));
    }

    //---------------------Post End--------------------//
}
