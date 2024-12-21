<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['sign-in'] = 'User/sign_in';
$route['sign-up'] = 'User/sign_up';
$route['logout'] = 'User/logoutUser';
//dashboard
$route['dashboard'] = 'App/dashboard';
//billing
$route['billing'] = 'App/billing';
//course
$route['course'] = 'App/m_course';
$route['course/add'] = 'App/add_course';
$route['course/edit/(:any)'] = 'App/edit_course/$1';
//questions
$route['questions'] = 'App/m_questions';
$route['questions/add'] = 'App/add_questions';
$route['questions/edit/(:any)'] = 'App/edit_questions/$1';
//Transaction
$route['tryout'] = 'App/t_tryout';
$route['tryout/do/(:any)'] = 'App/do_tryout/$1';
$route['tryout/list/result/(:any)'] = 'App/list_result_tryout/$1';
$route['tryout/result/(:any)'] = 'App/result_tryout/$1';
//bimbel
$route['bimbel'] = 'App/t_bimbel';
$route['bimbel/do/(:any)'] = 'App/do_bimbel/$1';
//package
$route['package'] = 'App/m_packages';
$route['package/add'] = 'App/add_packages';
$route['package/edit/(:any)'] = 'App/edit_packages/$1';