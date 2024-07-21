<?php

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\ContactController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/about-us', AboutController::class, 'index');
$router->get('/contact-us', ContactController::class, 'index');

$router->dispatch();
