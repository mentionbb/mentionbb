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
		$query = $this->conn->createQueryBuilder();
		$query->select('m.*', 'sender.username as sender_username', 'sender.user_id as sender_user_id', 'u.user_id', 'u.username')
			->from($this->table, 'm')
			->leftJoin('m', 'user_messages', 'b', $query->expr()->and(
				$query->expr()->eq('m.parent_id', 'b.parent_id'),
				$query->expr()->lt('m.dateline', 'b.dateline')
			))
			->leftJoin('m', 'users', 'sender', 'sender.user_id = m.sender_id')
			->leftJoin('m', 'users', 'u', 'u.user_id = m.user_id')
			->where('m.is_archived = :is_archived')
			->andWhere('m.is_active = :is_active')
			->andWhere('b.dateline IS NULL')
			->andWhere('m.user_id = :user_id')
			->orWhere('m.is_archived = :is_archived')
			->andWhere('m.is_active = :is_active')
			->andWhere('b.dateline IS NULL')
			->andWhere('m.sender_id = :user_id')
			->groupBy('m.parent_id')
			->orderBy('m.dateline', 'DESC');

		if ($limit > 0)
		{
			$query->setMaxResults($limit);
		}

		$query->setParameter('user_id', $user_id)
			->setParameter('is_active', 1)
			->setParameter('is_archived', $is_archived);

		$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAllAssociative();

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
