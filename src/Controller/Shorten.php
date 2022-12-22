<?php

namespace App\Controller;

use App\DB\DbServices;
use App\Interfaces\ControllerInterface;
use App\Service\TemplateRenderer;
use App\System\ServiceManager;
use Ramsey\Uuid\Uuid;

class Shorten implements ControllerInterface
{
    private DbServices $dbServices;

    public function __construct(DbServices $dbServices)
    {
        $this->dbServices = $dbServices;
    }


    public function addUrl($url, $short)
    {
        $this->dbServices->addUrl($url, $short);
    }

    public function handle()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $response = $this->dbServices->getUrl($_GET['s']);
            header("Location: " . $response['long_url']);
        } else {
            $url = $_POST['url'];
            $short = Uuid::uuid4();
            $this->addUrl($url, $short);
            echo '<a href="http://localhost/shorten?s=' . $short . '" > link </a>';
        }
    }
}
