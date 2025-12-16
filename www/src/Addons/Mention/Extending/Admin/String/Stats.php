<?php

namespace ComponentBundle\Extending\Admin\String;

use ComponentBundle\Extending\Admin\Entity\Stats as StatsEntity;

class Stats
{
    protected $stats;

    public function __construct()
    {
        $this->stats = new StatsEntity();
    }

    public function getVisitors()
    {
        return $this->stats->get24HoursVisitor();
    }
}
