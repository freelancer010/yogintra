<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('front_css')) {
    function front_css()
    {
        return base_url()."assets/front/";
    }
}

if (!function_exists('admin_css')) {
    function admin_css()
    {
        return base_url()."assets/back/";
    }
}
//user permission
if (!function_exists('check_user_permission')) {
    function check_user_permission($section)
    {
        $ci =& get_instance();
        try {
            if (auth_check()) {
                return $ci->auth_model->check_permission(user()->user_role, $section);
            }
        } catch (Exception $e) {
            return false;
        }
        return false;
    }
}
//check permission
if (!function_exists('check_permission')) {
    function check_permission($section)
    {
        if (!check_user_permission($section)) {
            redirect(base_url());
        }
    }
}

//check auth
if (!function_exists('auth_check')) {
    function auth_check()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->is_logged_in();
    }
}

//get logged user
if (!function_exists('user')) {
    function user()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $user = $ci->auth_model->get_logged_user();
        if (empty($user)) {
            $ci->auth_model->logout();
        } else {
            return $user;
        }

    }
}


if (!function_exists('check_image')) {
    function check_image($url)
    {
        if(file_exists($url))
        {
            return base_url().$url;
        }
        else
        {
            return base_url().'uploads/avatar.png';
        }
    }
}

if (!function_exists('user_id')) {
    function user_id()
    {
        return user()->user_id;
    }
}
if (!function_exists('slug')) {
    function slug($string, $separator = '-')
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
if (!function_exists('curl_get_request')) {
    function curl_get_request($api)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        } else {
            return json_decode($response);
        }
        curl_close($ch);
    }
}