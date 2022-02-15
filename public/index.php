<?php

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use \app\controllers\AuthController;
use  \app\controllers\siteController;
use \app\controllers\HomeController;

$config = [
    'userClass' => \app\models\User::class,
  'db' => [
      'dsn' => $_ENV['DB_DNS'],
      'user' => $_ENV['DB_USER'],
      'password' => $_ENV['DB_PASSWORD'],
  ]
];
$app = new \app\core\Application(dirname(__DIR__), $config);

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);
$app->run();