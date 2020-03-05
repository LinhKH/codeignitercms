<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'articles';

$route['admin'] = "admin/dashboard";
$route['admin/login'] = "admin/authenticate/login";
$route['admin/logout'] = "admin/authenticate/logout";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
