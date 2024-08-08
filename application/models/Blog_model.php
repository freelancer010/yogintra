<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model 
{
	// Get All Category
    public function get_all_blog_category()
    {
        return $this->db->get('blog_category')->result();
    }


    public function get_two_rand_related_post($cat_id, $post_id)
    {
        $this->db->where('category', $cat_id);
        $this->db->where('id !=', $post_id);
        $this->db->limit(2);
        return $this->db->get('blog')->result();
    }
    // Check Category Avaliblity
    public function check_category_avalibility($data)
    {
        return $this->db->get_where('blog_category',array('category_name'=>$data['category_name']));
    }
    // Add New Blog category
    public function add_new_blog_category()
    {
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'category_slug' => slug($this->input->post('category_name')),
            'category_keyword' => $this->input->post('category_keyword'),    
            'category_description' => $this->input->post('category_description'),  
        );
        return $this->db->insert('blog_category', $data);
    }
    // Update Category
    public function update_blog_category($id)
    {
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'category_slug' => slug($this->input->post('category_name')),
            'category_keyword' => $this->input->post('category_keyword'),    
            'category_description' => $this->input->post('category_description'),  
        );
        $this->db->where('id', $id);
        return $this->db->update('blog_category', $data);
    }
    // Delete Category
    public function delete_blog_category($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog_category');
    }
    //Get Category menu By Slug  
    public function get_category_by_slug($slug)
    {
        $this->db->where('category_slug', $slug);
        $query = $this->db->get('blog_category');
        return $query->row();
    }
    //Get Category By id
    public function get_category_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('blog_category');
        return $query->row();
    }
    // Check Category By Slug
    public function check_category_by_slug($slug)
    {
        return $this->db->get_where('blog_category',array('slug'=>$slug));
    }

    // Get All Blog By Slug
    public function get_blog_by_slug($slug)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('blog a');
        $this->db->join('blog_category b', 'b.id = a.blog_category');
        $this->db->where('a.blog_slug', $slug);
        return $this->db->get()->row();
    }  
     // Total Blog Count
    public function blog_count()
    {
        $this->db->select('id');
        $bl = $this->db->get('blog');
        return $bl->num_rows();
    }
     public function category_wise_blog_count($id)
    {
        $this->db->where('category', $id);
        return $this->db->get('blog')->num_rows();
    }
     public function get_all_blog_count_for()
    {
        return $this->db->get('blog')->num_rows();
    }
    
    // Get All Blog
    public function get_all_blog($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        return $this->db->get('blog')->result();
    }

     public function get_all_blogs()
    {
        $this->db->order_by('blog_id', "desc");
        return $this->db->get('blog')->result();
    }

    public function get_all_blogs_for_home_page()
    {
        $this->db->select('blog_title, blog_slug, blog_image, blog_id, created_at, blog_short_description');
        $this->db->order_by('blog_id', "desc");
        return $this->db->get('blog')->result();
    }

     // Get All Blog by id
    public function get_all_blog_by_id($id)
    {
        $this->db->where('blog_id', $id);
        return $this->db->get('blog')->row();
    }

    public function get_all_blog_by_category_id_for_caegory($id)
    {
        $this->db->where('blog_category', $id);
        return $this->db->get('blog')->result();
    }
    // Get All Blog by Category Id
    public function get_all_blog_by_category_id($category_id)
    {
        $this->db->where('category', $category_id);
        $this->db->limit(6);
        return $this->db->get('blog')->result();
    }
     // Get All Blog
    public function get_all_blog_order_by_limit()
    {
        $this->db->order_by('blog_id', "desc");
        $this->db->limit(5);
        return $this->db->get('blog')->result();
    }

    //Count All Blog 
    public function get_all_blog_count() 
    {
        return $this->db->count_all('blog');
    }
    // Ad New Blog
    public function add_new_blog_post($post_slug)
    {
        $data['blog_title']                 = $this->input->post('blog_title');
        $data['blog_slug']                  = slug($this->input->post('blog_title'));
        $data['blog_meta_keywords']         = $this->input->post('blog_meta_keywords');
        $data['blog_meta_description']      = $this->input->post('blog_meta_description');
        $data['blog_short_description']     = $this->input->post('blog_short_description');
        $data['blog_author']                = $this->input->post('blog_author');
        $data['blog_content']               = $this->input->post('blog_content');
        $data['blog_category']              = $this->input->post('blog_category');
        // $data['push_notification']  = $this->input->post('push_notification', true)== 1 ? 1 : 0;
        // $data['send_email']         = $this->input->post('send_email', true)== 1 ? 1 : 0;
        $data['created_at']                 = date('Y-m-d');
        $data['status']                     = '1';

        if(!empty($_FILES['blog_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['blog_image']['name'];
            $_FILES['file']['type'] = $_FILES['blog_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['blog_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['blog_image']['error'];
            $_FILES['file']['size'] = $_FILES['blog_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '20000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['blog_image']['name'];
            $this->upload->initialize($config);
            //Load upload library
            $this->load->library('upload',$config); 

            // File upload
            if($this->upload->do_upload('file'))
            {
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];

                 if (isset($filename)) 
                {
                    $data['blog_image'] = 'uploads/' . $filename;

                }

            }
        } 
        
        return $this->db->insert('blog', $data);
    }
     // Update Blog Post
    public function update_blog_post($id)
    {
        $data['blog_title']                 = $this->input->post('blog_title');
        $data['blog_slug']                  = slug($this->input->post('blog_title'));
        $data['blog_meta_keywords']         = $this->input->post('blog_meta_keywords');
        $data['blog_meta_description']      = $this->input->post('blog_meta_description');
        $data['blog_short_description']     = $this->input->post('blog_short_description');
        $data['blog_content']               = $this->input->post('blog_content');
        $data['blog_category']              = $this->input->post('blog_category');
        $data['blog_author']                = $this->input->post('blog_author');
        // $data['push_notification']  = $this->input->post('push_notification', true)== 1 ? 1 : 0;
        // $data['send_email']         = $this->input->post('send_email', true)== 1 ? 1 : 0;

        if(!empty($_FILES['blog_image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['blog_image']['name'];
            $_FILES['file']['type'] = $_FILES['blog_image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['blog_image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['blog_image']['error'];
            $_FILES['file']['size'] = $_FILES['blog_image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '20000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['blog_image']['name'];
            $this->upload->initialize($config);
            //Load upload library
            $this->load->library('upload',$config); 

            // File upload
            if($this->upload->do_upload('file'))
            {
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];

                 if (isset($filename)) 
                {
                    $data['blog_image'] = 'uploads/' . $filename;

                }
            }
        } 
        
        $this->db->where('blog_id', $id);
        return $this->db->update('blog', $data);
    }

    // Delete Blog
    public function delete_blog_post($id)
    {
        $blog = $this->get_all_blog_by_id($id);
        if(file_exists($blog->blog_image))
        {
            unlink($blog->blog_image);
        }
        $this->db->where('blog_id', $id);
        return $this->db->delete('blog');
    }

    // Get All Comment
    public function get_all_comment()
        {
            return $this->db->get('comments')->result();
        }
    // Get 5 Latest All Comment
    public function get_latest_5_comments()
        {
            $this->db->order_by('id', "desc");
            $this->db->limit(5);
            return $this->db->get('comments')->result();
        }
    
    // Get All Comment By Post id For Post
    public function get_all_comments_by_post_id($id)
        {
            $this->db->where('post_id', $id);
            $this->db->where('status', '1');
            $this->db->order_by('id', "desc");
            return $this->db->get('comments')->result();
        }
    // Get All Comment By Post id Count
    public function get_all_comments_by_post_id_for_count($id)
        {
            $this->db->where('post_id', $id);
            $this->db->where('status', '1');
            $c = $this->db->get('comments');
            return $c->num_rows();
        }
    // Add Comments
    public function add_comments()
        {
           $data = array(
            'user_id' => user()->id, 
            'comment' => $this->input->post('message', true),
            'post_id' => $this->input->post('post_id', true),
            'ip' => $this->input->post('ip', true),
            'status' => '0',
            'date' => date('Y-m-d h:i:sa') 
            );
           return $this->db->insert('comments', $data);
        }
    
        // Approve Comments
    public function approve_comment($id)
        {
            $data = array('status' => '1');
            $this->db->where('id', $id);
            return $this->db->update('comments', $data);
        }
        // DisApprove Comments
    public function disapprove_comment($id)
        {
            $data = array('status' => '0');
            $this->db->where('id', $id);
            return $this->db->update('comments', $data);
        }
     // Delete Comments
    public function delete_blog_comment($id)
        {
            $this->db->where('id', $id);
            return $this->db->delete('comments');
        }
    // Blog View Count
    public function blog_view_count()
        {
            $this->db->select('id');
            $this->db->where('post_id', $id);
            $c = $this->db->get('post_view');
            return $c->num_rows();
        }
    //get sitemap Blog
    public function get_sitemap_posts()
    {
        $this->db->select('blog_page');
        $blog_page = $this->db->get('home_page_setting')->row();
        if($blog_page->blog_page == 1){
        $this->db->where('blog.status', 1);
        $this->db->order_by('blog.created_at', 'DESC');
        $query = $this->db->get('blog');
        return $query->result();
        }
    }
    public function get_all_widget()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('widgets')->result();
    }
    public function get_all_widget_post()
    {
        $this->db->order_by('widget_order', 'DESC');
        return $this->db->get('widgets')->result();
    }
    //Add Widget
    public function add_widget()
    {
        $data = array(
            'title' => $this->input->post('title', true),
            'content' => $this->input->post('content'),
            'widget_order' => $this->input->post('widget_order'),
         );

        return $this->db->insert('widgets', $data);
    }
    //Update Widget
    public function update_widget()
    {
        $id = $this->input->post('widget_id');
        $data = array(
            'title' => $this->input->post('title', true),
            'content' => $this->input->post('content'),
            'widget_order' => $this->input->post('widget_order'),
         );
        $this->db->where('id', $id);
        return $this->db->update('widgets', $data);
    }
    //Delete Widget
    public function delete_widget($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('widgets');
    }

    public function get_all_blog_category_wise_blog()
    {
        $category =  $this->db->get('blog_category')->result();
        $final = array();
        if ($category) {
            foreach ($category as $row) {

                $this->db->select("*");
                $this->db->from("blog");
                $this->db->where("category", $row->id);
                $q = $this->db->get();
                
                    $row->blog_d = $q->result();
                
                array_push($final, $row);
            }
        }
         return $final;
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


    

    


}



		  