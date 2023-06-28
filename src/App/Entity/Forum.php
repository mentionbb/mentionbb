<?php

namespace App\Entity;

use App\Entity\Mapper;

class Forum extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('forums');
	}

	public function getForums($parent_id = 0)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('parent_id = ?')
			->orderBy('forum_order', 'ASC')
			->setParameter(0, $parent_id);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getForum($forum_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('forum_id = ?')
			->setParameter(0, $forum_id);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function editForum(int $forum_id, int $parent_id, string $title, int $order, string $description)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('parent_id', '?')
			->set('title', '?')
			->set('forum_order', '?')
			->set('forum_description', '?')
			->where('forum_id = ?')
			->setParameter(0, $parent_id)
			->setParameter(1, $title)
			->setParameter(2, $order)
			->setParameter(3, $description)
			->setParameter(4, $forum_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function createForum(int $parent_id, string $title, string $description, int $order)
	{
		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'parent_id' => '?',
				'title' => '?',
				'forum_description' => '?',
				'forum_order' => '?',
				'icon_id' => '?'
			])
			->setParameter(0, $parent_id)
			->setParameter(1, $title)
			->setParameter(2, $description)
			->setParameter(3, $order)
			->setParameter(4, 1)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function removeForum(int $forum_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete($this->table)
			->where('forum_id = ?')
			->setParameter(0, $forum_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}
}
