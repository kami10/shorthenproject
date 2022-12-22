<?php

namespace App\Service;

class TemplateRenderer
{
    public function render(string $filename)
    {
        return include __DIR__ . '/../../Templates/' . $filename;
    }
}
