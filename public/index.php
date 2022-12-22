<?php
require '../vendor/autoload.php';


use App\Interfaces\ControllerInterface;
use App\System\ServiceManager;
use App\System\Router;

$address = $_GET['path'] ?? 'home';

$config = include __DIR__ . '/../config/global.php';
$ServiceManager = new ServiceManager($config);

$router = $ServiceManager->get(Router::class);
/** @var ControllerInterface $controller */
$controller = $router->run($address);
echo $controller->handle();


