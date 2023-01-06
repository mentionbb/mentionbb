<?php

namespace App\Entity;

use App\Entity\Mapper;

class Version extends Mapper
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getVersion()
    {
        $query = $this->conn->prepare("SELECT version()")
            ->executeQuery()
            ->fetchOne();

        $this->conn->close();

        return $query;
    }
}
