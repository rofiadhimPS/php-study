<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('hello-logging');
$log->pushHandler(new StreamHandler('application.log', Logger::INFO));

$log->info('Hello World Composer!');
$log->info('This is a log message!');
