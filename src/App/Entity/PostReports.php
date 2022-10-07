<?php

namespace App\Entity;

use App\Entity\Mapper;

class PostReports extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('post_reports');
	}

	public function createPostReport(object $data)
	{
		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'post_id' => '?',
				'user_id' => '?',
				'content' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $data->post_id)
			->setParameter(1, $data->user_id)
			->setParameter(2, $data->content)
			->setParameter(3, \App\Entity\DateTime::getTimeStamp())
			->execute();

		$this->conn->close();

		return $query;
	}
}
