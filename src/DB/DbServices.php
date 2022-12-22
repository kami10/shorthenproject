<?php

namespace App\DB;

class DbServices
{
    public function addUrl(string $url, string $short)
    {
        $connect = new \App\DB\DatabaseConnection();
        $connect->addUrl($url, $short);
    }

    public function getUrl($short)
    {
        $connect = new DatabaseConnection();
        return $connect->getUrl($short);
    }
}
