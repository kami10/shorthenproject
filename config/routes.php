<?php

use App\Controller\Home;
use App\Controller\Shorten;
use App\Controller\ShowError;

return [
    'routes' => [
        'home' => Home::class,
        'shorten' => Shorten::class,
        'showError' => ShowError::class,
    ]
];

