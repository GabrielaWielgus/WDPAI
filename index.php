<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('','DeafultController');
Router::get('walks','DeafultController');
Router::get('dogs','DeafultController');
Router::get('settings','DeafultController');
Router::get('settings_owner','DeafultController');
Router::get('settings_dog','DeafultController');
Router::post('login','SecurityController');
Router::post('addDog','AddDogController');

Router::run($path);


