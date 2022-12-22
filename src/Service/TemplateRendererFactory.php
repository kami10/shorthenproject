<?php

namespace App\Service;

use App\System\ServiceManager;

class TemplateRendererFactory implements FactoryInterface
{
    public function __invoke(ServiceManager $serviceManager): TemplateRenderer
    {
        return new TemplateRenderer();
    }
}
