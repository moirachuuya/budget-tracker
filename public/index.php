<?php

session_start();

// Makes files accessible from the public directory
const BASE_PATH = __DIR__ . '/../';

function base_path($value){
    return BASE_PATH . $value;
}

require base_path('functions.php');
require base_path('router.php');