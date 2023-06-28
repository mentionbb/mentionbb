<?php

namespace App\Entity;

use App\Entity\Mapper;

class BBMedias extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('bbmedias');
	}

	public function getBBMedias()
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('is_active = ?')
			->setParameter(0, 1);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function findMedia($bb_key)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('bb_key = ?')
			->orWhere('bb_key = ?')
			->orWhere('bb_key = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $bb_key)
			->setParameter(1, "{$bb_key}={name}")
			->setParameter(2, "{$bb_key}={number}")
			->setParameter(3, 1);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}
}
