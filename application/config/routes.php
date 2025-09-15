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
//Defaul Welcome page  route //
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Pages Defalut route //
$route['aboutus'] = 'PagesControllers/aboutus';
$route['allcourse'] = 'PagesControllers/allcourse';
$route['blog'] = 'PagesControllers/blog';
$route['contactus'] = 'PagesControllers/contactus';
$route['developer'] = 'PagesControllers/developer';
$route['event'] = 'PagesControllers/event';
$route['gallery'] = 'PagesControllers/gallery';
$route['instructor'] = 'PagesControllers/instructor';
$route['joinNow'] = 'PagesControllers/joinNow';
$route['organizer'] = 'PagesControllers/organizer';
$route['page_Not_Found'] = 'PagesControllers/page_not_found';
$route['result'] = 'PagesControllers/result';

// Pages file & Courses Tab files route //
$route['category1'] = 'PagesControllers/course_one';
$route['category2'] = 'PagesControllers/course_two';
$route['category3'] = 'PagesControllers/course_three';
$route['category4'] = 'PagesControllers/course_four';
$route['category5'] = 'PagesControllers/course_five';
$route['category6'] = 'PagesControllers/course_six';
$route['category7'] = 'PagesControllers/course_seven';
$route['category8'] = 'PagesControllers/course_eight';
$route['category9'] = 'PagesControllers/course_nine';


// Developer Controller Starts here
$route['webmaster'] = 'Developer_Controller/loadDeveloper';
$route['webmaster_dashboard'] = 'Developer_Controller/developerDashboard';
$route['enroll_newAdmin'] = 'Developer_Controller/enrollAdmin';
$route['developerAuth'] = 'Developer_Controller/verifyDeveloper';
$route['developerLogout'] = 'Developer_Controller/adminLogout';