<?php

use App\Controller\Home;
use App\Controller\HomeFactory;
use App\Controller\Shorten;
use App\Controller\ShortenFactory;
use App\Controller\ShowError;
use App\Controller\ShowErrorFactory;
use App\DB\DbServices;
use App\Service\TemplateRenderer;
use App\Service\TemplateRendererFactory;
use App\System\Router;
use App\System\RouterFactory;

$route = include_once __DIR__ . '/routes.php';

return [
        'factories' => [
            TemplateRenderer::class => TemplateRendererFactory::class,
            Home::class => HomeFactory::class,
            Router::class => RouterFactory::class,
            ShowError::class => ShowErrorFactory::class,
            Shorten::class => ShortenFactory::class,
        ],
        'invokables' => [
            DbServices::class => DbServices::class,
        ]
    ] + $route;
