<?php

function dd($value){
    echo '<pre>'; var_dump($value); echo '</pre>';
    die();
}

function view($value, $attributes = []){
    extract($attributes);
    require 'views/' . $value;
}