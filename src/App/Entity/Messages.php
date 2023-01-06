<?php

namespace App\Entity;

use App\Entity\Mapper;

class Messages extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('user_messages');
	}

	public function seeingMessages(int $user_id, $parent_id = null)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_seeing', '?')
			->where('user_id = ?')
			->andWhere('is_active = ?')
			->andWhere('is_archived = ?');

		if (!is_null($parent_id))
		{
			$query->andWhere('parent_id = ?');
		}

		$query->setParameter(0, 1)
			->setParameter(1, $user_id)
			->setParameter(2, 1)
			->setParameter(3, 0);

		if (!is_null($parent_id))
		{
			$query->setParameter(4, $parent_id);
		}

		$query = $query->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getMessageCount(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->andWhere('is_seeing = ?')
			->andWhere('is_active = ?')
			->andWhere('is_archived = ?')
			->groupBy('parent_id')
			->setParameter(0, $user_id)
			->setParameter(1, 0)
			->setParameter(2, 1)
			->setParameter(3, 0)
			->setMaxResults(7)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function getMessagesByUserId(int $user_id, int $is_archived, int $limit)
	{
		if ($limit > 0)
		{
			$limit = "LIMIT {$limit}";
		}
		else
		{
			$limit = "";
		}

		$query = $this->conn->prepare("SELECT m.*, sender.username as sender_username, sender.user_id as sender_user_id, u.user_id, u.username
			FROM user_messages m

			LEFT JOIN user_messages b 
			ON m.parent_id = b.parent_id 
			AND m.dateline < b.dateline

			LEFT JOIN users sender 
			ON sender.user_id = m.sender_id

			LEFT JOIN users u 
			ON u.user_id = m.user_id

			WHERE m.is_archived = :is_archived
			AND m.is_active = :is_active
			AND b.dateline IS NULL
			AND m.user_id = :user_id
			OR m.is_archived = :is_archived
			AND m.is_active = :is_active
			AND b.dateline IS NULL
			AND m.sender_id = :user_id

			GROUP BY m.parent_id
			ORDER BY m.dateline DESC

			{$limit}
			");

		$query->bindValue('user_id', $user_id, \PDO::PARAM_INT);
		$query->bindValue('is_active', 1, \PDO::PARAM_INT);
		$query->bindValue('is_archived', $is_archived, \PDO::PARAM_INT);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getLastMessage(int $parent_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('parent_id = ?')
			->andWhere('is_active = ?')
			->orderBy('dateline', 'DESC')
			->setParameter(0, $parent_id)
			->setParameter(1, 1)
			->setMaxResults(1)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function getFirstMessage(int $message_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('message_id = ?')
			->andWhere('is_active = ?')
			->orderBy('dateline', 'ASC')
			->setParameter(0, $message_id)
			->setParameter(1, 1)
			->setMaxResults(1)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function getMessages(int $message_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('parent_id = ?')
			->andWhere('is_active = ?')
			->orderBy('dateline', 'ASC')
			->setParameter(0, $message_id)
			->setParameter(1, 1)
			->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function isExistConversation(int $conversation_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('message_id = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $conversation_id)
			->setParameter(1, 1)
			->setMaxResults(1)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function createMessage(string $title, string $text, int $sender_id, int $user_id, int $parent_id)
	{
		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'title' => '?',
				'text' => '?',
				'sender_id' => '?',
				'user_id' => '?',
				'parent_id' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $title)
			->setParameter(1, $text)
			->setParameter(2, $sender_id)
			->setParameter(3, $user_id)
			->setParameter(4, $parent_id)
			->setParameter(5, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function createConversation(string $title, string $text, int $sender_id, int $user_id)
	{
		$this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'title' => '?',
				'text' => '?',
				'sender_id' => '?',
				'user_id' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $title)
			->setParameter(1, $text)
			->setParameter(2, $sender_id)
			->setParameter(3, $user_id)
			->setParameter(4, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$message_id = $this->conn->lastInsertId();

		$this->conn->close();

		$this->conn->createQueryBuilder()
			->update($this->table)
			->set('parent_id', '?')
			->where('message_id = ?')
			->setParameter(0, $message_id)
			->setParameter(1, $message_id)
			->executeQuery();

		$this->conn->close();

		return $message_id;
	}

	public function archiveMessage(int $message_id, $operation)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_archived', '?')
			->where('parent_id = ?')
			->setParameter(0, $operation)
			->setParameter(1, $message_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}
}
