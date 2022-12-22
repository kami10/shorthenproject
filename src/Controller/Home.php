<?php

namespace App\Controller;

use App\Interfaces\ControllerInterface;
use App\DB;
use App\Service\TemplateRenderer;
use PDO;
use PDOException;

class Home implements ControllerInterface
{
    private TemplateRenderer $templateRenderer;

    public function __construct(TemplateRenderer $templateRenderer)
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function handle()
    {
        $viewVariable = [
            'msg' => 'ok',
        ];

        return $this->templateRenderer->render('form.php', $viewVariable);
    }
}