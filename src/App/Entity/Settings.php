<?php

namespace App\Entity;

use App\Entity\Mapper;

class Settings extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		/**
		 * Set current table 'settings'.
		 */
		$this->setTable('settings');
	}

	/**
	 * [getSettings Get app main settings]
	 * @return [object]
	 */
	public function getSettings()
	{
		/**
		 * @template {{ app.settings.name }}
		 */
		$result = $this->findAll();

		foreach ($result as $settings)
		{
			$item[$settings['name']] = $settings['value'];
		}

		return \App\Repository\Set::setObject($item);
	}

	/**
	 * [setSettings Set app main settings]
	 * @param [string] $name  [Settings column name]
	 * @param [string] $value [New value for column]
	 */
	public function setSettings($name, $value)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('value', '?')
			->where('name = ?')
			->setParameter(0, $value)
			->setParameter(1, $name)
			->execute();

		$this->conn->close();

		return $query;
	}

	/**
	 * [getSettings Get app main setting groups]
	 * @return [object]
	 */
	public function getSettingGroups()
	{
		$query = $this->conn->createQueryBuilder()->select("*")
			->from($this->table)
			->groupBy('group_name')
			->execute()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	/**
	 * [getSettings Get app main settings from group_nane]
	 * @return [object]
	 */
	public function getSettingsFromGroupName(string $group_name)
	{
		$query = $this->conn->createQueryBuilder()->select("*")
			->from($this->table)
			->where('group_name = ?')
			->setParameter(0, $group_name)
			->execute()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}
}
