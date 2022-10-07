<?php

namespace App\Entity;

use App\Entity\Mapper;

class Reactions extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('post_likes');
	}

	public function getReactionsByUserId(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->setParameter(0, $user_id)
			->execute();

		$fetch = $query->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getReactionCountByUserId(string $reaction, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->andWhere('reaction = ?')
			->setParameter(0, $user_id)
			->setParameter(1, $reaction)
			->execute();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getReactionCountByPostId(string $reaction, int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('post_id = ?')
			->andWhere('reaction = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $reaction)
			->execute();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}
}
