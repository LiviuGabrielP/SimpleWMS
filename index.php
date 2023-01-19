<?php
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
    '/suppliers' => 'controllers\suppliers.php',

];

if(array_key_exists($uri, $routes))
{
    require $routes[$uri];
}
else
{
    echo "404";
}

