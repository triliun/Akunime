<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Triliun\Akunime\App\Router;
use Triliun\Akunime\Controller\HomeController;
use Triliun\Akunime\Controller\LoginController;
use Triliun\Akunime\Controller\AuthController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', LoginController::class, 'login');
Router::add('GET', '/register', AuthController::class, 'showRegisterForm');
Router::add('POST', '/register', AuthController::class, 'register');

Router::run();
