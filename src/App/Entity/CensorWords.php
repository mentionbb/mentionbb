<?php

namespace App\Entity;

use App\Entity\Mapper;

class CensorWords extends Mapper
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('censored_words');
    }

    public function getWords()
    {
        $query = $this->conn->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->execute()
            ->fetchAssociative();

        $this->conn->close();

        return $query['word_list'];
    }

    public function editWords($words)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('word_list', '?')
			->setParameter(0, $words)
			->execute();

		$this->conn->close();

		return $query;
	}
}
