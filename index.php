<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('projects', 'DefaultController');
Router::get('register', 'DefaultController');
Router::post('login', 'DefaultController');
Router::post('search', 'DefaultController');
Router::post('theatre', 'DefaultController');
Router::post('aboute', 'DefaultController');
Router::run($path);