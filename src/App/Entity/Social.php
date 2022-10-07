<?php

namespace App\Entity;

use App\Entity\Mapper;

class Social extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('socialsites');
	}

	public function getSites($is_active = true)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table);

		if ($is_active)
		{
			$query->where('is_active = ?')
				->setParameter(0, 1);
		}

		$fetch = $query->execute()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getSiteFromName($name)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('name = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $name)
			->setParameter(1, 1)
			->execute()->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function setService(int $site_id, string $title, string $name, string $api_keys, string $callback, int $is_active = 1)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('title', '?')
			->set('name', '?')
			->set('api_keys', '?')
			->set('callback', '?')
			->set('is_active', '?')
			->where('site_id = ?')
			->setParameter(0, $title)
			->setParameter(1, $name)
			->setParameter(2, $api_keys)
			->setParameter(3, $callback)
			->setParameter(4, $is_active)
			->setParameter(5, $site_id)
			->execute();

		$this->conn->close();

		return $query;
	}

	public function createService(string $title, string $name, string $api_keys, string $callback, int $is_active = 1)
	{
		$query = $this->conn->createQueryBuilder()->insert($this->table)
			->values([
				'title' => '?',
				'name' => '?',
				'api_keys' => '?',
				'callback' => '?',
				'is_active' => '?'
			])
			->setParameter(0, $title)
			->setParameter(1, $name)
			->setParameter(2, $api_keys)
			->setParameter(3, $callback)
			->setParameter(4, $is_active)
			->execute();

		$this->conn->close();

		return $query;
	}
}
