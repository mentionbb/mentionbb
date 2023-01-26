<?php

namespace App\Entity;

use App\Entity\Mapper;

class Discussion extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('discussions');
	}

	public function discussionList()
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('is_active = ?')
			->setParameter(0, 1)
			->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function createDiscussion(string $title, int $forum_id, int $is_sticky, int $is_open)
	{
		$this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'title' => '?',
				'forum_id' => '?',
				'is_sticky' => '?',
				'is_open' => '?'
			])
			->setParameter(0, $title)
			->setParameter(1, $forum_id)
			->setParameter(2, $is_sticky)
			->setParameter(3, $is_open)
			->executeQuery();

		$lastInsertId = $this->conn->lastInsertId();

		$this->conn->close();

		return $lastInsertId;
	}

	public function discussionReWriteFirstPost(int $discussion_id, int $first_post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('firstpost_id', '?')
			->where('discussion_id = ?')
			->setParameter(0, $first_post_id)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getDiscussion(int $discussion_id)
	{
		$query = $this->conn->prepare("SELECT d.*, p.*, f.title as forum_title, u.user_id, u.username
			FROM discussions d

			LEFT JOIN forums f
			ON f.forum_id = d.forum_id

			LEFT JOIN posts p
			ON p.post_id = d.firstpost_id

			LEFT JOIN users u 
			ON u.user_id = p.user_id

			WHERE d.discussion_id = :discussion_id
			AND d.is_active = :is_active

			LIMIT 1
			");

		$query->bindValue('discussion_id', intval($discussion_id), $this->getType('integer'));
		$query->bindValue('is_active', 1, $this->getType('integer'));

		$fetch = $query->executeQuery()->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getAllDiscussions()
	{
		$query = $this->conn->prepare("SELECT d.*, p.*, f.title as forum_title, u.user_id, u.username
			FROM discussions d

			LEFT JOIN forums f
			ON f.forum_id = d.forum_id

			LEFT JOIN posts p
			ON p.post_id = d.firstpost_id

			LEFT JOIN users u 
			ON u.user_id = p.user_id

			WHERE d.is_active = :is_active

			ORDER BY p.dateline
			");

		$query->bindValue('is_active', 1, $this->getType('integer'));

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function discussionIsExist(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('discussion_id = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $discussion_id)
			->setParameter(1, 1)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function isAnySticky($forum_id)
	{
		if ($forum_id != 0)
		{
			$forum_id_query = "AND d.forum_id = :forum_id";
		}
		else
		{
			$forum_id_query = "";
		}

		$query = $this->conn->prepare("SELECT f.*, d.*
			FROM forums f

			LEFT JOIN discussions d
			ON d.forum_id = f.forum_id

			WHERE d.is_active = :is_active
			AND d.is_sticky = :is_sticky
			{$forum_id_query}

			ORDER BY d.discussion_id
			");

		if ($forum_id != 0)
		{
			$query->bindValue('forum_id', $forum_id, $this->getType('integer'));
		}

		$query->bindValue('is_sticky', 1, $this->getType('integer'));
		$query->bindValue('is_active', 1, $this->getType('integer'));

		$rowCount = $query->executeQuery()->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getDiscussionByFirstPostId(int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('firstpost_id = ?')
			->setParameter(0, $post_id)
			->executeQuery();

		if ($query->rowCount() > 0)
		{
			$query = $query->fetchAssociative();
		}
		else
		{
			$query = false;
		}

		$this->conn->close();

		return $query;
	}

	public function discussionDeActivate(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_active', '?')
			->where('discussion_id = ?')
			->setParameter(0, 0)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionDeleteWithForumId(int $forum_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete($this->table)
			->where('forum_id = ?')
			->setParameter(0, $forum_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionChangeTitle(int $firstpost_id, string $title)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('title', '?')
			->where('firstpost_id = ?')
			->setParameter(0, $title)
			->setParameter(1, $firstpost_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionMove(int $discussion_id, int $forum_id)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('forum_id', '?')
			->where('discussion_id = ?')
			->setParameter(0, $forum_id)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionPinOperation(int $discussion_id, int $pin_status)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_sticky', '?')
			->where('discussion_id = ?')
			->setParameter(0, $pin_status)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionLockOperation(int $discussion_id, int $lock_status)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_open', '?')
			->where('discussion_id = ?')
			->setParameter(0, $lock_status)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function addDiscussionView(string $ip, int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->insert('discussion_views')
			->values([
				'ip' => '?',
				'discussion_id' => '?'
			])
			->setParameter(0, $ip)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function ifUserViewDiscussion(string $ip, int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('discussion_views')
			->where('ip = ?')
			->andWhere('discussion_id = ?')
			->setParameter(0, $ip)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function search(string $keyword)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('title LIKE ?')
			->setParameter(0, "%{$keyword}%")
			->setMaxResults(7)
			->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function addSubscription(int $user_id, int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()->insert('discussion_subscriptions')
			->setValue('user_id', '?')
			->setValue('discussion_id', '?')
			->setValue('dateline', '?')
			->setParameter(0, $user_id)
			->setParameter(1, $discussion_id)
			->setParameter(2, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function ifUserSubscribeDiscussion(int $user_id, int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('discussion_subscriptions')
			->where('user_id = ?')
			->andWhere('discussion_id = ?')
			->setParameter(0, $user_id)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function ifSubscribeDiscussion(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('discussion_subscriptions')
			->where('discussion_id = ?')
			->setParameter(0, $discussion_id)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getSubscriptions(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('discussion_subscriptions')
			->where('discussion_id = ?')
			->setParameter(0, $discussion_id)
			->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function removeSubscription(int $user_id, int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete('discussion_subscriptions')
			->where('user_id = ?')
			->andWhere('discussion_id = ?')
			->setParameter(0, $user_id)
			->setParameter(1, $discussion_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getUserSubscriptions(int $user_id)
	{
		$query = $this->conn->prepare("SELECT d.*, p.user_id as user_id
			FROM discussion_subscriptions ds

			LEFT JOIN discussions d
			ON d.discussion_id = ds.discussion_id

			LEFT JOIN posts p
			ON p.post_id = d.firstpost_id

			WHERE ds.user_id = :user_id
			");

		$query->bindValue('user_id', intval($user_id));

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}
}
