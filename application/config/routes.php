<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 	= 'home';
$route['404_override'] 		= 'errors/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'home/login';
$route['logout'] = 'auth/logout';
$route['register'] = 'auth/register';
$route['pricing'] = 'home/packages';
$route['forgot_password'] = 'auth/forgot_password';
$route['/(:any)'] = 'home/page/$1';
$route['category/(:any)'] = 'home/category/$1';
$route['latest'] = 'home/latest';
$route['tags'] = 'home/tags';
$route['featured'] = 'home/featured';
$route['upload'] = 'stock/index';
$route['stock/(:any)'] = 'stock/view/$1';
$route['join-now'] = 'auth/contributor';
$route['collections'] = 'home/collections';
$route['packages'] = 'home/pricing';
$route['news'] = 'home/blog';
$route['news/category/(:any)'] = 'home/post_categories/$1';
$route['popular'] = 'home/popular';
$route['news/(:any)'] = 'home/post/$1';
$route['password_reset'] = 'auth/forgot_password';
$route['password_change'] = 'auth/reset_password';





//$route['api/v2/(:any)'] = "api_v2/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */