<?php

namespace App\System;

use App\Controller\Home;
use App\Controller\Shorten;
use App\Controller\ShowError;
use App\Service\FactoryInterface;
use App\Service\TemplateRenderer;
use Exception;

class ServiceManager
{
    public array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get($class)
    {
        if ($class === 'confiq') {
            return $this->config;
        }

        $invokables = $this->config['invokables'];

        if (in_array($class, $invokables)) {
            return new $class;
        }

        $factories = $this->config['factories'];
        $factory = new $factories[$class];

        if ($factory instanceof FactoryInterface) {
            return $factory($this);
        }
        throw new Exception('Factory not registered');
    }
}