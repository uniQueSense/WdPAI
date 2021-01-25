<?php

include_once 'src/AutoLoader.php';
include_once 'src/Routing.php';

AutoLoader::register();

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');

Router::post('login', 'SecurityController');
Router::post('loginForm', 'SecurityController');
Router::post('logout', 'SecurityController');

Router::post('register', 'RegisterController');
Router::post('registerForm', 'RegisterController');

Router::get('search', 'SearchController');
Router::get('searchSearch', 'SearchController');

Router::get('theatre', 'TheatreController');
Router::get('searchTheatre', 'TheatreController');

Router::get('recommendedSpectacle', 'SpectacleController');

Router::get('chosenSpectacle', 'SpectacleController');

Router::get('booking', 'DefaultController');

Router::get('aboute', 'DefaultController');

Router::post('test', 'DefaultController');

Router::run($path);