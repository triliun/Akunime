<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Triliun\Akunime\App\Router;
use Triliun\Akunime\Controller\HomeController;
use Triliun\Akunime\Controller\LoginController;
use Triliun\Akunime\Controller\AuthController;
<<<<<<< HEAD

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', LoginController::class, 'login');
Router::add('GET', '/register', AuthController::class, 'showRegisterForm');
Router::add('POST', '/register', AuthController::class, 'register');
=======
use Triliun\Akunime\Controller\DashboardController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', AuthController::class, 'showLoginForm');
Router::add('POST', '/login', AuthController::class, 'login');
Router::add('GET', '/register', AuthController::class, 'showRegisterForm');
Router::add('POST', '/register', AuthController::class, 'register');
Router::add('GET', '/logout', AuthController::class, 'logout');

Router::add('GET', '/dashboard', DashboardController::class, 'index');
>>>>>>> 986157cb9e663b03c1986e96f258827af0acb8fa

Router::run();
