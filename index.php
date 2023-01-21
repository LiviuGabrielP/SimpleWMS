<?php
session_start();
require('controllers\DAO.php');
$dao = new DAO();
include "utils\utils.php";

/// THIS IS THE ROUTE LIST BELOW
$unparsed_uri = $_SERVER['REQUEST_URI'];
$uri= parse_url($unparsed_uri, PHP_URL_PATH);
//dd($unparsed_uri);


$routes = [

    '/' => 'controllers\Homepage.php',
    '/employees' => 'controllers\employees.php',
    '/login' => 'controllers\login.php',
    '/register' => 'controllers\register.php',
    '/machines' => 'controllers\machines.php',
    '/clients' => 'controllers\clients.php',
    '/about' => 'controllers\about.php',
    '/contact' => 'controllers\contact.php',
    '/logout' => 'controllers\Logoutfunc.php',
    '/add_employee' => 'controllers\add_employee.php',
    '/add_machine' => 'controllers\add_machine.php',
    '/add_client' => 'controllers\add_client.php',
    '/add_user'=> 'controllers\add_user.php'

];

if(array_key_exists($uri, $routes))
{
    require $routes[$uri];
}
else
{
    echo "404";
}

