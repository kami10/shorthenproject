<?php

namespace App\Controller;

use App\DB\DbServices;
use App\Service\FactoryInterface;
use App\System\ServiceManager;

class ShortenFactory implements FactoryInterface
{

    public function __invoke(ServiceManager $serviceManager)
    {
        return new Shorten($serviceManager->get(DbServices::class));
    }
}