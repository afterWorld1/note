<?php

const BASE_PATH = __DIR__ . '/../';

include_once BASE_PATH . ('Core/functions.php');

spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    include_once base_path("{$class}.php");
});

include_once base_path('bootstrap.php');

$router = new \Core\Router();

$route = include_once base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->routes($uri, $method);
