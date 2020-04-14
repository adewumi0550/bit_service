<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['auto_search/(:any)'] = 'Page/auto_search/$1';
// $route['delete_user/(:any)'] = 'Page/delete_user/$1';
// $route['fill/(:any)'] = 'Page/fill/$1';
// $route['logout'] = 'Page/logout';
// $route['users'] = 'Page/users';
// // $route['password'] = 'Page/correct_password';
// // $route['request'] = 'Page/request_item';
// // $route['company-staff'] = 'Page/company_staff';
// $route['register'] = 'Page/register';
// // $route['req_item/(:any)'] = 'Page/req_item/$1';
// // $route['edit_material/(:any)'] = 'Page/edit_material/$1';
// $route['summary'] = 'Page/user_summary';

$route['subscripition'] = 'Page/subscripition';

$route['request'] = 'Page/request';
$route['render'] = 'Page/render';
$route['forgot-password'] = 'Page/forgot_password';

$route['signup'] = 'Page/signup';
$route['login'] = 'Page/login';
// $route['logout'] = 'Elite/logout';
$route['default_controller'] = 'Page/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
