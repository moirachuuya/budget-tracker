<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/login' => 'controllers/session/create.php',
    '/register' => 'controllers/register/create.php'
];

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri]; 
    } else {
        throw new Exception(); // Write an abort function for this in the future haha
    }
}

routeToController($uri, $routes);
