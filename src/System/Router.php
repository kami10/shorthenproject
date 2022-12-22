<?php

namespace App\System;

use App\Interfaces\ControllerInterface;
use Exception;

class Router
{
    public ServiceManager $serviceManager;

    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }

    public function run(string $address): ControllerInterface
    {
        $routes = $this->serviceManager->get('confiq')['routes'] ?? [];
        $output = $routes[$address] ?? $routes['showError'];
        $controller = $this->serviceManager->get($output);

        if ($controller instanceof \App\Interfaces\ControllerInterface) {
            return $controller;
        }
        throw new Exception('route not found');
    }
}