<?php

namespace App\Controller;

use App\Interfaces\ControllerInterface;

class ShowError implements ControllerInterface
{
    public function handle()
    {
        echo 'not found';
    }
}