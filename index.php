<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('','DeafultController');
Router::get('walks','WalksController');
Router::get('dogs','AddDogController');
Router::get('settings','DeafultController');
Router::get('settings_owner','DeafultController');
Router::get('settings_dog','DeafultController');
Router::post('login','SecurityController');
Router::post('addDog','AddDogController');
Router::post('register','SecurityController');
Router::post('search','AddDogController');
Router::post('places','WalksController');
Router::get('logout', 'SecurityController');
Router::run($path);


