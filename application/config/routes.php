<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'main';
$route['404_override'] = '';//'main/show404';
$route['translate_uri_dashes'] = FALSE;
$route['l/(:num)'] = 'main/l/$1';
$route['l/(:num)/(:num)'] = 'main/l/$1/$2';
$route['d/(:num)'] = "main/d/$1";
$route['places/(:num)'] = 'main/places/$1';
$route['place/(:num)'] = 'main/place/$1';
$route['weather'] = 'main/weather';
$route['clock'] = 'main/clock';
$route['offset'] = 'main/offset';
$route['currency'] = 'main/currency';
$route['news'] = 'main/news';
$route['news/(:num)'] = 'main/news/$1';
$route['view/(:num)'] = 'main/view/$1';
$route['events'] = 'main/events';
$route['events/(:num)'] = 'main/events/$1';
$route['event/(:num)'] = 'main/event/$1';
$route['tours'] = 'main/tours';
$route['tours/(:num)'] = 'main/tours/$1';
$route['tour/(:num)'] = 'main/tour/$1';