<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once "vendor/autoload.php";
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Home extends CI_Controller
{

	public function __construct()
	{
		$this->api = 'https://crm.yogintra.com/home';
		$this->api_main = 'https://crm.yogintra.com';
		parent::__construct();

	}

	public function index()
	{
		$data['page'] = 'home';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_slider'] = $this->Front_model->get_all_slider();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['section_1'] = $this->Front_model->get_our_features_heading();
        $data['section_1_content'] = $this->Front_model->get_all_our_features();
        $data['section_2'] = $this->Front_model->get_our_service_image();
        $data['section_2_content'] = $this->Front_model->get_all_our_service();
        $data['rand_service'] = $this->service_model->get_six_category_for_home_page();
        $data['all_trainer'] = curl_get_request($this->api.'/get_all_trainer_limit');
        $data['api'] = $this->api_main;
		$this->load->view('front/index', $data);
	}

	public function about()
	{
		$data['page'] = 'about';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}

	public function all_trainers()
	{
		$data['page'] = 'all_trainers';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['all_trainer'] = curl_get_request($this->api.'/get_all_trainer');
		$data['api'] = $this->api_main;
		$this->load->view('front/index', $data);
	}

	public function all_blog()
	{
		$data['page'] = 'all_blog';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['get_all_blog'] = $this->blog_model->get_all_blogs_for_home_page();
		$data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
		$this->load->view('front/index', $data);
	}

	public function blog_details($slug)
	{
		$data['page'] = 'blog_details';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['blog'] = $this->blog_model->get_blog_by_slug($slug);
		$data['title'] = $data['blog']->blog_title;
		$data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
		$this->load->view('front/index', $data);
	}

	public function blog_category($slug)
	{
		$data['page'] = 'blog_category';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['category'] = $this->blog_model->get_category_by_slug($slug);
		$data['get_all_blog'] = $this->blog_model->get_all_blog_by_category_id_for_caegory($data['category']->id);
		$data['get_all_blog_category'] = $this->blog_model->get_all_blog_category();
		$data['title'] = $data['category']->category_name;
		$this->load->view('front/index', $data);
	}

	public function all_service($slug)
	{
		$data['page'] = 'all_service';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['service'] = $this->service_model->get_all_service_category_by_slug($slug);
		$data['all_service_data'] = $this->service_model->get_all_service_by_cat_id($data['service']->service_cat_id);
		$data['title'] = $data['service']->service_cat_name;
		$this->load->view('front/index', $data);
	}

	public function service_details($slug)
	{
		$data['page'] = 'service_details';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['service'] = $this->service_model->get_service_by_slug($slug);
		$data['title'] = $data['service']->service_name;
		$this->load->view('front/index', $data);
	}

	public function gallery()
	{
		$this->load->model('gallery_model');
		$data['page'] = 'gallery';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_gallery'] = $this->gallery_model->get_all_gallery();
        $data['all_category'] = $this->gallery_model->get_all_category();
		$this->load->view('front/index', $data);
	}

	public function contact()
	{
		$data['page'] = 'contact';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}

	public function teacher_training_course()
	{
		$data['page'] = 'all_events';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['all_event'] = $this->event_model->get_all_event_for_home_page('TTC');
		$this->load->view('front/index', $data);
	}

	public function all_retreat()
	{
		$data['page'] = 'all_retreat';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['all_event'] = $this->event_model->get_all_event_for_home_page('Retreat');
		$this->load->view('front/index', $data);
	}

	public function all_workshop()
	{
		$data['page'] = 'all_workshop';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['all_event'] = $this->event_model->get_all_event_for_home_page('Workshop');
		$this->load->view('front/index', $data);
	}

	public function event_details($slug)
	{
		$data['page'] = 'event_details';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$data['event'] = $this->event_model->get_event_by_slug($slug);
		$this->load->view('front/index', $data);
	}

	public function submit_contact_form()
	{
// 		$data['name'] = $this->input->post('name');
// 		$data['number'] = $this->input->post('number');
// 		$data['email'] = $this->input->post('email');
// 		$data['country'] = $this->input->post('country');
// 		$data['state'] = $this->input->post('state');
// 		$data['city'] = $this->input->post('city');
// 		$data['lead-source'] = 'Website';
// 		$data['class'] = $this->input->post('class');
// 		$data['call-from'] = $this->input->post('call-from');
// 		$data['call-to'] = $this->input->post('call-to');
// 		$data['client-message'] = $this->input->post('message');
// 		$data['created_date'] = date('Y-m-d H:i:s');
// 		$curl = curl_init();
// 		curl_setopt($curl, CURLOPT_URL, $this->api.'/addLeads');
// 		curl_setopt($curl, CURLOPT_POST, true);
// 		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
// 		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
// 		$response = curl_exec($curl);
// 		if (curl_errno($curl)) {
// 		    echo 'cURL error: ' . curl_error($curl);
// 		}
// 		curl_close($curl);
// 		echo $response;
        $second_db = $this->load->database('second_db', TRUE);
        $data['name'] = $this->input->post('name');
		$data['number'] = $this->input->post('number');
		$data['email'] = $this->input->post('email');
		$data['country'] = $this->input->post('country');
		$data['state'] = $this->input->post('state');
		$data['city'] = $this->input->post('city');
		$data['source'] = 'Website';
		$data['class_type'] = $this->input->post('class');
		$data['call_from'] = $this->input->post('call-from');
		$data['call_to'] = $this->input->post('call-to');
		$data['message'] = $this->input->post('message');
		$data['created_date'] = date('Y-m-d H:i:s');
		
	
		if ($second_db->insert('leads', $data)) {
            echo 1;
        } else {
            print_r($this->db->error());
        }
	}

	public function coming_soon()
	{
		$data['page'] = 'coming_soon';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}

	public function become_yoga_trainer()
	{
		$data['page'] = 'become_yoga_trainer';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}

	public function submit_trainer_form()
	{
		$data['name'] = $this->input->post('name');
		$data['number'] = $this->input->post('number');
		$data['email'] = $this->input->post('email');
		$data['dob'] = $this->input->post('dob');
		
		$data['country'] = $this->input->post('country');
		$data['state'] = $this->input->post('state');
		$data['city'] = $this->input->post('city');
        $data['address'] = $this->input->post('address');

        $data['education'] = $this->input->post('education');
        $data['certification'] = $this->input->post('certification');
        $data['experience'] = $this->input->post('experience');
        $data['Other_Certificate'] = $this->input->post('Other_Certificate');
        
        
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $this->api.'/addRecruitments');
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		$response = curl_exec($curl);
		if (curl_errno($curl)) {
		    echo 'cURL error: ' . curl_error($curl);
		}
		curl_close($curl);
		echo $response;
	}

	public function submit_event_form()
	{
		$this->session->set_userdata('register_name', $this->input->post('register_name'));
		$this->session->set_userdata('register_email', $this->input->post('register_email'));
		$this->session->set_userdata('register_phone', $this->input->post('register_phone'));
		$this->session->set_userdata('register_ticket', $this->input->post('register_ticket'));
		$this->session->set_userdata('register_ttl_amt', $this->input->post('ttl_amt'));
		$this->session->set_userdata('register_event_id', $this->input->post('event_id'));
		$this->session->set_userdata('register_country', $this->input->post('register_country'));
		$this->session->set_userdata('register_state', $this->input->post('register_state'));
		$this->session->set_userdata('register_city', $this->input->post('register_city'));
		$this->session->set_userdata('event_name', $this->input->post('event_name'));
		$this->session->set_userdata('register_event_category', $this->input->post('event_category'));
		$this->session->set_userdata('register_addon', json_encode($this->input->post('register_addon')));
		echo 1;
	}

	public function payment_for_event()
    {
        $app_setting        = $this->setting_model->get_all_app_setting();
        $api = new Api($app_setting->rozar_key_id, $app_setting->rozar_key_secret);
        $order_id = date("Ymd").rand(1000, 9999);
        $mainAmount = $this->session->userdata('register_ttl_amt');
        $razorpayOrder = $api->order->create(array(
            'receipt'         => $order_id,
            'amount'          => $mainAmount * 100,
            'currency'        => 'INR',
            'payment_capture' => 1 
        ));
        $amount = $razorpayOrder['amount'];
        $razorpayOrderId = $razorpayOrder['id'];
        $_SESSION['razorpay_order_id'] = $razorpayOrder['id'];  
        $raz_pay_data = $this->rozr_pay_prepareData_prd_pay_for_event($amount,$razorpayOrderId, $order_id);
        $this->load->view('rezorpay_payment_for_event', array('data' => $raz_pay_data));
    }

    public function rozr_pay_prepareData_prd_pay_for_event($amount,$razorpayOrderId, $order_id)
    {
        $app_setting = $this->setting_model->get_all_app_setting(); 
        $data = array(
            "key" => $app_setting->rozar_key_id,
            "amount" => $amount,
            "name" => $order_id,
            "description" => $app_setting->app_name,
            "image" => base_url().$app_setting->app_sticky_logo,
            "prefill" => array(
                "name"  	=> $this->session->userdata('register_name'),
                "email"  	=> $this->session->userdata('register_email'),
                "contact" 	=> $this->session->userdata('register_phone')
            ),
            "notes"  => array(
                "address"  => "Hello World",
                "merchant_order_id" => rand(),
            ),
            "theme"  => array(
                "color"  => "#F37254"
            ),
            "order_id" => $razorpayOrderId,
        );
        return $data;
    }

    public function rezorpay_payment_for_event($payment_request_mobile = "")
    {
        $app_setting = $this->setting_model->get_all_app_setting(); 
        $success = true;
        $error = "payment_failed";
        if (empty($_POST['razorpay_payment_id']) === false) 
        {
            $api = new Api($app_setting->rozar_key_id, $app_setting->rozar_key_secret);
        try {
                $attributes = array(
                    'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                    'razorpay_signature' => $_POST['razorpay_signature']
                );
                $api->utility->verifyPaymentSignature($attributes);
            } catch(SignatureVerificationError $e) {
                $success = false;
                $error = 'Razorpay_Error : ' . $e->getMessage();
            }
        }
        if ($success === true) 
        {
			$data_api['client_name'] 	= $this->session->userdata('register_name');
			$data_api['event_name'] 	= $this->session->userdata('event_name');
			$data_api['client_number'] 	= $this->session->userdata('register_phone');
			$data_api['created_date'] 	= date('Y-m-d h:i:s');
			$data_api['country'] 		= $this->session->userdata('register_country');
			$data_api['state'] 			= $this->session->userdata('register_state');
			$data_api['city'] 			= $this->session->userdata('register_city');
			$data_api['package'] 		= $this->session->userdata('register_ttl_amt');
			$data_api['email'] 			= $this->session->userdata('register_email');
			$data_api['class_type'] 	= $this->session->userdata('register_event_category');
			$data_api['payment_type'] 	= "Full Payment";
			$data_api['totalPayAmount'] = $this->session->userdata('register_ttl_amt');
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $this->api.'/addEventData');
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data_api));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$response = curl_exec($curl);
			if (curl_errno($curl)) {
				echo 'cURL error: ' . curl_error($curl);
			}
			curl_close($curl);
			
			$this->load->model('email_model');
			$this->email_model->send_mail_event_booking($data_api);
			
        	$data = array(
        		'booking_name' 		=> $this->session->userdata('register_name'), 
        		'booking_email_id' 	=> $this->session->userdata('register_email'), 
        		'booking_phone_no' 	=> $this->session->userdata('register_phone'), 
        		'booking_addon' 	=> $this->session->userdata('register_addon'), 
        		'booking_ticket' 	=> $this->session->userdata('register_ticket'), 
        		'booking_price' 	=> $this->session->userdata('register_ttl_amt'), 
        		'booking_event_id' 	=> $this->session->userdata('register_event_id'), 
        		'booking_pay_id'	=> $_POST['razorpay_payment_id'],
        		'booking_date' 		=> date('Y-m-d H:i:s')
        	);
        	$this->db->insert('event_booking', $data);
        	redirect(base_url().'event_thank_you');
        }
        else
        {
            echo 0;
        }
    }

    public function event_thank_you()
    {
    	$data['page'] = 'event_thank_you';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
    }

   public function landing_page($slug)
    {
       
		
		$data['all_slider'] = $this->Front_model->get_all_slider();		
		$data['section_1'] = $this->Front_model->get_our_features_heading();
        $data['section_1_content'] = $this->Front_model->get_all_our_features();
        $data['section_2'] = $this->Front_model->get_our_service_image();
        $data['section_2_content'] = $this->Front_model->get_all_our_service();
        $data['rand_service'] = $this->service_model->get_six_category_for_home_page();
        $data['all_trainer'] = curl_get_request($this->api.'/get_all_trainer_limit');
        $data['api'] = $this->api_main;
    	$data['page'] = 'lanidng_page';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		//$data['page_data'] = $this->Front_model->get_landing_page_by_slug($slug);
		$data['page_data'] = $this->Front_model->get_landing_page_by_slug_new($slug);
		$data['title'] = $data['app_setting']->app_meta_title;
        //print_r($data['page_data']);
		$this->load->view('front/index', $data);
		
    }
	function all_yoga_center()
	{
		$this->load->model('yoga_model', 'yoga');
		$data['page'] = 'all_yoga_center';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['all_center'] = $this->yoga->get_all_yoga_center();
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}

	function yoga_center_details($slug)
	{
		$this->load->model('yoga_model', 'yoga');
		$data['page'] = 'yoga_center_details';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['center'] = $this->yoga->get_yoga_center_by_slug($slug);
		$data['title'] = $data['app_setting']->app_meta_title;
		$this->load->view('front/index', $data);
	}
		function get_data_for_trainer()
	{
		$data_api['data'] = $this->input->post('data');
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $this->api . '/getTrainerSearchData');
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data_api));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec($curl);
		
		if (curl_errno($curl)) {
			echo 'cURL error: ' . curl_error($curl);
		}
		
		curl_close($curl);

		// Initialize variables
		$option = '';
		$i = 1;
		
		// Decode the JSON response
		$trainers = json_decode($response);

		// Check if there are trainers in the response
		if ($trainers) {
			foreach ($trainers as $trainer) {
				// Extracted variables for better readability
				$name = $trainer->name;
				$profileImage = $this->api_main.'/'.$trainer->profile_image;
				$birthYear = date("Y", strtotime($trainer->dob));
				$currentYear = date("Y");

				// Build the HTML for each trainer
				$option .= '<div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
					<div class="team-members text-center maxwidth400" onclick="open_modal(' . $i . ')">
						<div class="team-thumb">
							<img class="img-fullwidth" id="imageresource_' . $i . '" style="height: 200px;width: auto" alt="" src="' . $profileImage . '">
						</div>
						<div class="team-details">
							<div class="p-10 " style="background-color: #01AEB7 ;">
								<h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">' . $name . '</a></h4>
								<p class="team-subtitle mt-0 mb-0">Age - ' . ($currentYear - $birthYear) . '</p>
							</div>
							<div class="p-20 bg-white d-none">
								<div class="opening-hours text-left mb-30">
									<ul class="list-unstyled">
										<input type="hidden" value="' . $trainer->Education . '" id="Education_' . $i . '">
										<input type="hidden" value="' . $trainer->experience . '" id="experience_' . $i . '">
										<input type="hidden" value="' . $trainer->city . ', ' . $trainer->state . '" id="address_' . $i . '">
										<input type="hidden" value="' . $name . '" id="name_' . $i . '">
										<input type="hidden" value="' . ($currentYear - $birthYear) . '" id="age_' . $i . '">
										<input type="hidden" value="' . $trainer->package . '" id="package_' . $i . '">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>';

				$i++;
			}
		}

		// Output the generated HTML
		echo $option;
	}
	
	public function terms_and_condition()
    {
    	$data['page'] = 'terms_and_condition';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = 'Terms & Condition';
		$this->load->view('front/index', $data);
    }
    
    public function refund_policy()
    {
    	$data['page'] = 'refund_policy';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = 'Refund Policy';
		$this->load->view('front/index', $data);
    }
    
    public function privacy_policy()
    {
    	$data['page'] = 'privacy_policy';
		$data['app_setting'] = $this->setting_model->get_all_app_setting();
		$data['title'] = 'Privacy Policy';
		$this->load->view('front/index', $data);
    }


	
}