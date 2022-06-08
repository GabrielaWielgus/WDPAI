<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('','DeafultController');
Router::get('walks','DeafultController');
Router::get('dogs','DeafultController');
Router::get('add_dog','DeafultController');
Router::get('settings','DeafultController');
Router::post('login','SecurityController');

Router::run($path);


