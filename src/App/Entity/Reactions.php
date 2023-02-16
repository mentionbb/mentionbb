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
			->executeQuery();

		$fetch = $query->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getReactionCountByUserId(int $user_id)
	{
		$query = $this->conn->createQueryBuilder();
		$query->select('pl.*', 'p.*')
			->from($this->table, 'pl')
			->leftJoin(
				'pl',
				\sprintf(
					'(%s)',
					$this->conn->createQueryBuilder()->select('p.*')
						->from('posts', 'p')
						->where('p.user_id = :user_id')
				),
				'p',
				'p.post_id = pl.post_id'
			)
			->where('p.is_active = :is_active')
			->setParameter('is_active', 1)
			->setParameter('user_id', $user_id);

		$query = $query->executeQuery();
		$rowCount = $query->rowCount();

		if ($query->rowCount() > 0)
		{
			$fetch = $query->fetchAllAssociative();

			$items = [
				'like' => [],
				'love' => [],
				'haha' => [],
				'wow' => [],
				'sad' => [],
				'angry' => [],
				'dislike' => []
			];
			foreach ($fetch as $item)
			{
				$items[$item['reaction']][$item['post_id']] = $item['post_id'];
			}

			$counts = [
				'like' => \count($items['like']),
				'love' => \count($items['love']),
				'haha' => \count($items['haha']),
				'wow' => \count($items['wow']),
				'sad' => \count($items['sad']),
				'angry' => \count($items['angry']),
				'dislike' => \count($items['dislike']),
			];

			$rowCount = $counts;
		}

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
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}
}
