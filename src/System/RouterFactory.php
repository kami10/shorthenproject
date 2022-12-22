<?php

namespace App\System;

use App\Service\FactoryInterface;

class RouterFactory implements FactoryInterface
{
    public function __invoke(ServiceManager $serviceManager)
    {
        return new Router($serviceManager);
    }
}