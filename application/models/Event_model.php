<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model 
{

    public function get_all_latest_event()
    {
    	$this->db->limit(12);
      $this->db->where('DATE(date_time) >=', date('Y-m-d'));
      $this->db->order_by('id', "DESC");
      return $this->db->get('event')->result();
    }	

    public function add_event()
    {
        $title = $_POST['title']; // Page name
        $link = strtolower(str_replace(" ", "-", $_POST['link'])); // Page link
        $keyword = $_POST['keyword'];
        $description = $_POST['description'];
        $date_time   = $_POST['date_time'];
        $event_mode = $_POST['event_mode'];
        $main_price = $_POST['main_price'];
        $discount_price = $_POST['discount_price'];
        $event_type = $_POST['event_type'];
        $event_location = $_POST['event_location'];
        $head_code = $_POST['head_code'];
        $event_host_by = $_POST['event_host_by'];
        $event_host_plat = $_POST['event_host_plat'];
        $event_build_mode = $_POST['event_build_mode'];

        $Indian_stu_checkbox = $_POST['Indian_stu_checkbox'];
        $Foreign_stu_checkbox = $_POST['Foreign_stu_checkbox']; 


        // Insert info in table PAGE 
        $data = array(
          'title' => $title,
          'link' => $link, 
          'keyword' => $keyword, 
          'description' => $description, 
          'short_content' => $_POST['short_content'], 
          'content' => $_POST['content'], 
          'date_time' => $date_time, 
          'event_mode' => $event_mode, 
          'main_price' => $main_price, 
          'discount_price' => $discount_price, 
          'event_location' => $event_location,
          'head_code' => $head_code,
          'event_host_by' => $event_host_by,
          'category' => $this->input->post('category'),
          'end_date_time' => $this->input->post('end_date_time'),
          'country' => $this->input->post('country'),
          'state' => $this->input->post('state'),
          'city' => $this->input->post('city'),
          'pin_code' => $this->input->post('pin_code'),
          'ticket_indian' => $this->input->post('ticket_indian'),
          'ticket_short_des_indian' => $this->input->post('ticket_short_des_indian'),
          'ticket_price_indian' => $this->input->post('ticket_price_indian'),
          'ticket_capacity_indian' => $this->input->post('ticket_capacity_indian'),
          'ticket_d_qnty_indian' => $this->input->post('ticket_d_qnty_indian'),
          'ticket_r_qnty_indian' => $this->input->post('ticket_r_qnty_indian'),
          'ticket_foreigner' => $this->input->post('ticket_foreigner'),
          'ticket_short_des_foreigner' => $this->input->post('ticket_short_des_foreigner'),
          'ticket_price_foreigner' => $this->input->post('ticket_price_foreigner'),
          'ticket_capacity_foreigner' => $this->input->post('ticket_capacity_foreigner'),
          'ticket_d_qnty_foreigner' => $this->input->post('ticket_d_qnty_foreigner'),
          'ticket_r_qnty_foreigner' => $this->input->post('ticket_r_qnty_foreigner'),
          'Indian_stu_checkbox' => isset($Indian_stu_checkbox),
          'Foreign_stu_checkbox' => isset($Foreign_stu_checkbox),   
          'Extra_addon_checkbox' => json_encode($this->input->post('Extra_addon_checkbox')),
          'addon_name' => json_encode($this->input->post('addon_name')),
          'addon_price' => json_encode($this->input->post('addon_price')),
        );

        if(!empty($_FILES['image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['image']['name'];
            $_FILES['file']['type'] = $_FILES['image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['image']['error'];
            $_FILES['file']['size'] = $_FILES['image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['image']['name'];
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
                    $data['image'] = 'uploads/' . $filename;

                }
            }
        }

        return $this->db->insert('event', $data);
    }

    public function event_status($id,$status)
    {
        $this->db->where('id', $id);
        $this->db->set('status',$status);
        return $this->db->update('event', $data);
    }
    public function update_event($id)
    {
        $title = $_POST['title']; // Page name
        $link = strtolower(str_replace(" ", "-", $_POST['link'])); // Page link
        $keyword = $_POST['keyword'];
        $description = $_POST['description'];
        $date_time   = $_POST['date_time'];
        $event_mode = $_POST['event_mode'];
        $main_price = $_POST['main_price'];
        $discount_price = $_POST['discount_price'];
        $event_type = $_POST['event_type'];
        $event_location = $_POST['event_location'];
        $head_code = $_POST['head_code'];
        $event_host_by = $_POST['event_host_by'];
        $event_host_plat = $_POST['event_host_plat'];
        $event_build_mode = $_POST['event_build_mode'];

        $Indian_stu_checkbox = $_POST['Indian_stu_checkbox'];
        $Foreign_stu_checkbox = $_POST['Foreign_stu_checkbox']; 

        // Insert info in table PAGE 
        $data = array(
          'title' => $title,
          'link' => $link, 
          'keyword' => $keyword, 
          'description' => $description, 
          'short_content' => $_POST['short_content'], 
          'content' => $_POST['content'], 
          'date_time' => $date_time, 
          'event_mode' => $event_mode, 
          'main_price' => $main_price, 
          'discount_price' => $discount_price, 
          'event_location' => $event_location,
          'head_code' => $head_code,
          'event_host_by' => $event_host_by,
          'category' => $this->input->post('category'),
          'end_date_time' => $this->input->post('end_date_time'),
          'country' => $this->input->post('country'),
          'state' => $this->input->post('state'),
          'city' => $this->input->post('city'),
          'pin_code' => $this->input->post('pin_code'),
          'ticket_indian' => $this->input->post('ticket_indian'),
          'ticket_short_des_indian' => $this->input->post('ticket_short_des_indian'),
          'ticket_price_indian' => $this->input->post('ticket_price_indian'),
          'ticket_capacity_indian' => $this->input->post('ticket_capacity_indian'),
          'ticket_d_qnty_indian' => $this->input->post('ticket_d_qnty_indian'),
          'ticket_r_qnty_indian' => $this->input->post('ticket_r_qnty_indian'),
          'ticket_foreigner' => $this->input->post('ticket_foreigner'),
          'ticket_short_des_foreigner' => $this->input->post('ticket_short_des_foreigner'),
          'ticket_price_foreigner' => $this->input->post('ticket_price_foreigner'),
          'ticket_capacity_foreigner' => $this->input->post('ticket_capacity_foreigner'),
          'ticket_d_qnty_foreigner' => $this->input->post('ticket_d_qnty_foreigner'),
          'ticket_r_qnty_foreigner' => $this->input->post('ticket_r_qnty_foreigner'),
          'Indian_stu_checkbox' => isset($Indian_stu_checkbox),
          'Foreign_stu_checkbox' => isset($Foreign_stu_checkbox),   
          'Extra_addon_checkbox' => json_encode($this->input->post('Extra_addon_checkbox')),
          'addon_name' => json_encode($this->input->post('addon_name')),
          'addon_price' => json_encode($this->input->post('addon_price')),
        );

        if(!empty($_FILES['image']['name']))
        {
            $image = $this->get_event_by_id($id);
            if(file_exists($image->image))
            {
              unlink($image->image);
            }
            $_FILES['file']['name'] = $_FILES['image']['name'];
            $_FILES['file']['type'] = $_FILES['image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['image']['error'];
            $_FILES['file']['size'] = $_FILES['image']['size'];

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = uniqid().$_FILES['image']['name'];
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
                    $data['image'] = 'uploads/' . $filename;

                }
            }
        }
        $this->db->where('id', $id);
        return $this->db->update('event', $data);
    }

    public function get_event_by_slug($slug)
    {
      $this->db->where('link', $slug);
      return $this->db->get('event')->row();
    } 
    public function get_all_event()
    {
      $this->db->order_by('id', "DESC");
      return $this->db->get('event')->result();
    }	

    public function get_all_event_for_home_page($category)
    {
        $this->db->where('category', $category);
        $this->db->where('status', 'On');
        $this->db->order_by('id', "DESC");
        return $this->db->get('event')->result();
    }   

    public function delete_event($id)
    {
      $image = $this->get_event_by_id($id);
      if(file_exists($image->image))
      {
        unlink($image->image);
      }
      $this->db->where('id', $id);
      return $this->db->delete('event');
    } 
    public function get_event_by_id($id)
    {
      $this->db->where('id', $id);
      return $this->db->get('event')->row();
    } 

    public function get_all_event_booking()
    {
        $this->db->select('a.*, b.title, b.category, b.addon_name');
        $this->db->from('event_booking a');
        $this->db->join('event b', 'b.id = a.booking_event_id');
        return $this->db->get()->result();
    }


}
