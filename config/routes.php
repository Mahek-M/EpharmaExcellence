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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['news-list'] = 'Home/new_list';
$route['blogs-list'] = 'Home/blogs_list';
$route['current-affairs'] = 'Home/affairs_list';
$route['case-studies'] = 'Home/casestudy_list';
$route['guest-blog'] = 'Home/guest_blog';
$route['career'] = 'Home/career';
$route['youtube'] = 'Home/youtube';
$route['signup'] = 'Home/signup';
$route['inspector/(:any)'] = 'Home/inspector';
$route['logout'] = 'Home/logout';
$route['login'] = 'Home/login';
$route['guest-blog-details/(:any)'] = 'Home/guest_blog_details';
$route['company-details/(:any)'] = 'Home/company_details';
$route['cat-subcat/(:any)'] = 'Home/category_details';
$route['category/(:any)/(:any)'] = 'Home/category_page';
$route['fei/(:any)'] = 'Home/fei_details';
$route['news/(:any)'] = 'Home/news';
$route['blogs/(:any)'] = 'Home/blogs';
$route['current_affairs/(:any)'] = 'Home/current_affairs';
$route['case_study/(:any)'] = 'Home/case_study';
$route['form483'] = 'Home/form483';
$route['search-483'] = 'Home/searchform483';
$route['form483-details/(:any)'] = 'Home/form483_details';
$route['admin'] = 'Admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
