<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Rofiadhim\Study\PHP\MVC\App\Router;

// Define routes
Router::add('GET', '/', 'Home Controller', 'index');
Router::add('GET', '/login', 'Login Controller', 'login');
Router::add('GET', '/register', 'Register Controller', 'register');

Router::run();