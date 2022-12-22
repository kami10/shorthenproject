<?php

namespace App\Controller;

use App\Service\FactoryInterface;
use App\Service\TemplateRenderer;
use App\System\ServiceManager;

class HomeFactory implements FactoryInterface
{
    public function __invoke(ServiceManager $serviceManager)
    {
        return new Home($serviceManager->get(TemplateRenderer::class));
    }
}