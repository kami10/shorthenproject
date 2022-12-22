<?php

namespace App\Service;

use App\System\ServiceManager;

interface FactoryInterface
{
    public function __invoke(ServiceManager $serviceManager);
}