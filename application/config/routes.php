<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//home
$route['default_controller'] = 'home';

//404
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'login';

$route['login'] = 'login';
$route['about'] = 'home/about';
$route['gallery'] = 'home/gallery';
$route['contact'] = 'home/contact';
$route['trainers'] = 'home/all_trainers';
$route['blog'] = 'home/all_blog';
$route['blog/(:any)'] = 'home/blog_details/$1';
$route['blog_category/(:any)'] = 'home/blog_category/$1';
$route['service/(:any)'] = 'home/all_service/$1';
$route['service_details/(:any)'] = 'home/service_details/$1';
$route['teacher_training_course'] = 'home/teacher_training_course';
$route['retreat'] = 'home/all_retreat';
$route['workshop'] = 'home/all_workshop';
$route['ttc/(:any)'] = 'home/event_details/$1';
$route['event/(:any)'] = 'home/event_details/$1';
$route['workshop/(:any)'] = 'home/event_details/$1';
$route['coming_soon'] = 'home/coming_soon';
$route['become-yoga-trainer'] = 'home/become_yoga_trainer';
$route['payment_for_event'] = 'home/payment_for_event';
$route['event_thank_you'] = 'home/event_thank_you';
$route['thank_you'] = 'home/event_thank_you';
$route['admin/logout'] = 'login/logout';
//$route['landing_page/(:any)'] = 'home/landing_page/$1';
$route['city/(:any)'] = 'home/landing_page/$1';

//$route['(:any)'] = 'home/landing_page/$1';
$route['yoga_center'] = 'home/all_yoga_center';

$route['yoga-center/(:any)'] = 'home/yoga_center_details/$1';

$route['terms_and_condition'] = 'home/terms_and_condition';
$route['refund_policy'] = 'home/refund_policy';
$route['privacy_policy'] = 'home/privacy_policy';
