<?php

namespace App\Controller;

use App\Service\FactoryInterface;
use App\System\ServiceManager;

class ShowErrorFactory implements FactoryInterface
{

    public function __invoke(ServiceManager $serviceManager)
    {
        return new ShowError();
    }
}