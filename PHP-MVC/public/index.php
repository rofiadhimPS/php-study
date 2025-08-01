<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Rofiadhim\Study\PHP\MVC\App\Router;
use Rofiadhim\Study\PHP\MVC\Controller\HomeController;
use Rofiadhim\Study\PHP\MVC\Controller\ProductController;
use Rofiadhim\Study\PHP\MVC\Middleware\AuthMiddleware;

// Define routes
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
Router::add('GET', '/login', HomeController::class, 'login');

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)/?', ProductController::class, 'categories');



Router::run();