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
        $query = $this->conn->createQueryBuilder();
        $query->select('*')
            ->from($this->table)
            ->where(
                $query->expr()->gte('dateline', 'UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 1 WEEK))')
            )
            ->groupBy('ip')
            ->orderBy('dateline', 'ASC');

        $fetch = $query->executeQuery()->fetchAllAssociative();

        $this->conn->close();

        return $fetch;
    }
}
