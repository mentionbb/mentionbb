<?php

namespace App\Entity;

use App\Db\Layer;

class LinkPreviews extends Layer
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('link_previews');
    }

    public function getPreview($uniq_id, $post_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('post_id = ?')
            ->andWhere('uniq_id = ?')
            ->setFirstResult(1)
            ->setParameter(0, $post_id)
            ->setParameter(1, $uniq_id);

        $fetch = $query->executeQuery()
            ->fetchAssociative();

        $this->close();

        return $fetch;
    }

    public function createLinkPreview(string $uniq_id, string $json, int $post_id)
    {
        $query = $this->createQueryBuilder()
            ->insert($this->table)
            ->values([
                'uniq_id' => '?',
                'json' => '?',
                'post_id' => '?',
            ])
            ->setParameter(0, $uniq_id)
            ->setParameter(1, $json)
            ->setParameter(2, $post_id)
            ->executeQuery();

        $this->close();

        return $query;
    }
}
