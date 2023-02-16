<?php

namespace App\Entity;

use App\Entity\Mapper;

class Notifications extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('user_notifications');
	}

	public function createUserNotification(object $data)
	{
		if ($data->post_id == 0)
		{
			$post_id = 0;
		}
		else
		{
			$post_id = $data->post_id;
		}

		if ($data->discussion_id == 0)
		{
			$discussion_id = 0;
		}
		else
		{
			$discussion_id = $data->discussion_id;
		}

		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'tab' => '?',
				'post_id' => '?',
				'discussion_id' => '?',
				'sender_id' => '?',
				'user_id' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $data->tab)
			->setParameter(1, $post_id)
			->setParameter(2, $discussion_id)
			->setParameter(3, $data->sender_id)
			->setParameter(4, $data->user_id)
			->setParameter(5, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function removeNotification(object $data)
	{
		if ($data->post_id == 0)
		{
			$post_id = 0;
		}
		else
		{
			$post_id = $data->post_id;
		}

		if ($data->discussion_id == 0)
		{
			$discussion_id = 0;
		}
		else
		{
			$discussion_id = $data->discussion_id;
		}

		$query = $this->conn->createQueryBuilder()
			->delete($this->table)
			->where('post_id = ?')
			->andWhere('discussion_id = ?')
			->andWhere('user_id = ?')
			->andWhere('sender_id = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $discussion_id)
			->setParameter(2, $data->user_id)
			->setParameter(3, $data->sender_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function seeingNotify(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_seeing', '?')
			->where('user_id = ?')
			->setParameter(0, 1)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getNotificationCount(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->andWhere('is_seeing = ?')
			->andWhere('sender_id != ?')
			->andWhere("dateline >= UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 3 DAY))")
			->setParameter(0, $user_id)
			->setParameter(1, 0)
			->setParameter(2, $user_id)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function getNotificationByUserId(int $user_id)
	{
		$query = $this->conn->createQueryBuilder();
		$query->select('n.*', 'p.*', 'd.*', 'sender.username as sender_username', 'sender.user_id as sender_user_id', 'u.user_id', 'u.username')
			->from($this->table, 'n')
			->leftJoin('n', 'users', 'sender', 'sender.user_id = n.sender_id')
			->leftJoin('n', 'users', 'u', 'u.user_id = n.user_id')
			->leftJoin('n', 'posts', 'p', 'p.post_id = n.post_id')
			->leftJoin('n', 'discussions', 'd', 'd.discussion_id = n.discussion_id')
			->where('n.user_id = :user_id')
			->andWhere('n.sender_id != :user_id')
			->andWhere(
				$query->expr()->gte('n.dateline', 'UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 3 DAY))')
			)
			->orderBy('n.dateline', 'DESC')
			->setMaxResults(7)
			->setParameter('user_id', $user_id);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}
}
