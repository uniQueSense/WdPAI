<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');

Router::post('login', 'SecurityController');
Router::post('loginForm', 'SecurityController');

Router::post('logout', 'SecurityController');

Router::post('register', 'RegisterController');
Router::post('registerForm', 'RegisterController');

Router::get('search', 'SearchController');
Router::get('theatre', 'TheatreController');

Router::get('projects', 'DefaultController');

Router::get('booking', 'DefaultController');
Router::get('spectacl', 'DefaultController');
Router::get('aboute', 'DefaultController');
Router::post('test', 'DefaultController');

Router::run($path);