<?php

session_start();

// Makes files accessible from the public directory
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'vendor/autoload.php';

function base_path($value){
    return BASE_PATH . $value;
}

require base_path('functions.php');
require base_path('router.php');