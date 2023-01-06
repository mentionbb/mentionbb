<?php

namespace ComponentBundle\Extending\Admin\Entity;

use App\Entity\Mapper;

class Stats extends Mapper
{
    public function __construct()
    {
        parent::__construct();

        /**
         * Set current table 'sessions'
         */
        $this->setTable('sessions');
    }

    public function get24HoursVisitor()
    {
        $query = $this->conn->prepare("SELECT *
			FROM {$this->table}

            WHERE dateline >= UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 1 WEEK))

            GROUP BY ip
            ORDER BY dateline ASC
			");

        $fetch = $query->executeQuery()->fetchAllAssociative();

        $this->conn->close();

        return $fetch;
    }
}
