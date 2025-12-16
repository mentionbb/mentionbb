<?php

namespace App\Entity;

use App\Db\Layer;

class PostReports extends Layer
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('post_reports');
    }

    public function createPostReport(object $data)
    {
        $query = $this->createQueryBuilder()
            ->insert($this->table)
            ->values([
                'post_id' => '?',
                'user_id' => '?',
                'content' => '?',
                'dateline' => '?'
            ])
            ->setParameter(0, $data->post_id)
            ->setParameter(1, $data->user_id)
            ->setParameter(2, $data->content)
            ->setParameter(3, \App\Entity\DateTime::getTimeStamp())
            ->executeQuery();

        $this->close();

        return $query;
    }
}
