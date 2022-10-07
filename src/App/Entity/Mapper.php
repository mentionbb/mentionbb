<?php

/**
 * This Abstract class use a App run on Object-Relational-Mapping.
 *
 * Utilized for ORM: Doctrine DBAL | https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/index.html
 */

namespace App\Entity;

use App\Repository\Config\Schema;

use Doctrine\DBAL\Configuration as DoctrineConfiguration;
use Doctrine\DBAL\DriverManager as DoctrineDriverManager;

abstract class Mapper
{
	/**
	 * [$table Current selected table]
	 * @var [string]
	 */
	protected $table;

	/**
	 * logger
	 * Doctrine logger
	 * @var mixed
	 */
	protected $logger;

	public function __construct()
	{
		$schema = new Schema();

		$connectionParams = [
			'url' => $schema->db
		];

		$this->stack = new \Doctrine\DBAL\Logging\DebugStack();

		/**
		 * [$this->conn Connect to MySQL with parameters.]
		 * @var [object]
		 */
		$this->conn = DoctrineDriverManager::getConnection($connectionParams, new DoctrineConfiguration());

		$this->conn->getConfiguration()->setSQLLogger($this->stack);
	}

	/**
	 * [setTable Set current table]
	 * @param [string] $table
	 */
	public function setTable($table)
	{
		$this->table = $table;
	}

	/**
	 * [findAll Find all data in table without params]
	 * @return [array]
	 */
	public function findAll()
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->execute()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	/**
	 * [findByName Get name column]
	 * @param  [string] $name
	 * @return [string]
	 */
	public function findByName($name)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('name = ?')
			->setParameter(0, $name)
			->execute()->fetchAssociative();

		$this->conn->close();

		return $query;
	}
}
