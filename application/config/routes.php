<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["dashboard"] = "Dashboard";

$route["save"] = "userController/guardar"; 

$route["delete"] = "userController/delete";

$route["edit"] = "Dashboard/edit";

$route["update"] = "userController/update";

$route["load_view"] = "Dashboard/load_view";