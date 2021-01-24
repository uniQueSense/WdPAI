<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/RegisterController.php';
require_once 'src/controllers/SearchController.php';
require_once 'src/controllers/TheatreController.php';
require_once 'src/controllers/SpectacleController.php';

class Router {

  public static $routes;

  public static function get($url, $view) {
    self::$routes[$url] = $view;
  }

  public static function post($url, $view) {
      self::$routes[$url] = $view;
  }

  public static function run ($url) {
    $action = explode("/", $url)[0];
    if (!array_key_exists($action, self::$routes)) {
      die("Wrong url!");
    }

      $action = $action ?: 'recommendedSpectacle';
      $controller = self::$routes[$action];
      $object = new $controller;

    $object->$action();
  }
}