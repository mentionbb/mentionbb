<?php

namespace App\Entity;

use App\Db\Layer;

class CensorWords extends Layer
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('censored_words');
    }

    public function getWords()
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->executeQuery()
            ->fetchAssociative();

        $this->close();

        return $query['word_list'];
    }

    public function editWords($words)
    {
        $query = $this->createQueryBuilder()->update($this->table)
            ->set('word_list', '?')
            ->setParameter(0, $words)
            ->executeQuery();

        $this->close();

        return $query;
    }
}
