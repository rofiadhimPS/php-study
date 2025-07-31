<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Rofiadhim\Study\PHP\MVC\App\Router;
use Rofiadhim\Study\PHP\MVC\Controller\HomeController;

// Define routes
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::run();