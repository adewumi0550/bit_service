<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['profile'] = 'Account/profile';
$route['contact'] = 'Page/contact';
$route['password'] = 'Account/password';
$route['logout'] = 'Page/logout';
$route['dashboard'] = 'Account/index';
$route['subscripition'] = 'Page/subscripition';
// $route['profile'] = 'Page/profile';

$route['request'] = 'Page/request';
$route['render'] = 'Page/render';
$route['forgot-password'] = 'Page/forgot_password';
$route['Signup'] = 'Page/signup';
$route['signup'] = 'Page/signup';
$route['login'] = 'Page/login';
// $route['logout'] = 'Elite/logout';
$route['default_controller'] = 'Page/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
