<?php

namespace App\Entity;

use App\Entity\Mapper;

class Posts extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		$this->setTable('posts');
	}

	public function getPostByForumId($forum_id, $wherePage, $topicnumber, object $order, object $keyword, $user_id = null, $group_by = true, $firstpost = false, $onlyStickyDiscussions = false)
	{
		if (!$keyword->search)
		{
			if ($group_by)
			{
				$staticQuery = "AND b.dateline IS NULL";
			}
			else
			{
				$staticQuery = "";
			}
		}
		else
		{
			foreach ($keyword->query as $static)
			{
				$staticQuery = "{$static->where} {$static->column} {$static->statement} {$static->param}";
			}
		}

		if (!is_null($user_id))
		{
			$userIdStatic = "AND p.user_id = :user_id";
		}
		else
		{
			$userIdStatic = "";
		}

		if ($group_by)
		{
			if (!$firstpost)
			{
				$firstpost = "AND p.dateline < b.dateline";
			}
			else
			{
				$firstpost = "AND p.dateline > b.dateline";
			}

			$group_left_join = "
			LEFT JOIN posts b 
			ON p.discussion_id = b.discussion_id 
			AND b.is_active = :is_active 
			{$firstpost}
			";

			$group_by_where = "AND d.discussion_id IS NOT NULL";
			$group_by_group = "GROUP BY d.discussion_id";
		}
		else
		{
			$group_left_join = "";

			$group_by_where = "";
			$group_by_group = "";
		}

		if (is_null($onlyStickyDiscussions))
		{
			$onlyStickyDiscussions_Query = "";
		}
		else
		{
			$onlyStickyDiscussions_Query = "AND d.is_sticky = :is_sticky";
		}

		if (!is_null($forum_id))
		{
			if (\App\SubContainer\Post\Order::isWhiteList($order->statement, ['WHERE', 'ORDER BY']) && \App\SubContainer\Post\Order::isWhiteList($order->param, ['p.dateline', 'comment_count', 'lp.like_count']) && \App\SubContainer\Post\Order::isWhiteList($order->with, ['DESC', 'ASC']))
			{
				if ($forum_id != 0)
				{
					$query = $this->conn->prepare("SELECT p.*, d.*, f.title as forum_title, p.dateline as post_dateline, u.user_id, u.username, u.profile_picture, u.usertitle, u.registration_date, u.last_activity, (pa.comment_count - 1) as comment_count, pa.max_post_id, lp.like_count, vc.view_count, started_by.fp_username as started_by_username, started_by.fp_user_id as started_by_user_id, started_by.dateline as discussion_dateline
						FROM posts p

						{$group_left_join}

						LEFT JOIN discussions d
						ON d.discussion_id = p.discussion_id
						{$onlyStickyDiscussions_Query}
						AND d.is_active = :is_active

						LEFT JOIN users u
						ON u.user_id = p.user_id

						LEFT JOIN
						( select p.dateline, p.user_id, p.post_id, u.username as fp_username, u.user_id as fp_user_id from posts p 
						    LEFT JOIN 
						    ( select u.user_id, u.username from users u) u
						    ON u.user_id = p.user_id
						) started_by
						ON started_by.post_id = d.firstpost_id

						LEFT JOIN forums f
						ON f.forum_id = p.forum_id

						LEFT JOIN
						( select discussion_id, count(post_id) as comment_count, max(post_id) as max_post_id, is_active from posts where is_active = :is_active group by discussion_id ) pa
						ON pa.discussion_id = d.discussion_id

						LEFT JOIN
						( select post_id, count(post_id) as like_count from post_likes group by post_id ) lp
						ON lp.post_id = p.post_id

						LEFT JOIN
						( select discussion_id, count(view_id) as view_count from discussion_views group by discussion_id ) vc
						ON vc.discussion_id = d.discussion_id

						WHERE p.is_active = :is_active
						{$group_by_where}
						AND p.forum_id = :forum_id
						{$userIdStatic}
						{$staticQuery}

						{$group_by_group}

						{$order->statement} {$order->param} {$order->with}

						LIMIT :wherePage, :topicLimit
						");

					$query->bindValue('forum_id', $forum_id);
				}
				else
				{
					$query = $this->conn->prepare("SELECT p.*, d.*, f.title as forum_title, p.dateline as post_dateline, u.user_id, u.username, u.profile_picture, u.usertitle, u.registration_date, u.last_activity, (pa.comment_count - 1) as comment_count, pa.max_post_id, lp.like_count, vc.view_count, started_by.fp_username as started_by_username, started_by.fp_user_id as started_by_user_id, started_by.dateline as discussion_dateline
						FROM posts p
						
						{$group_left_join}

						LEFT JOIN discussions d
						ON d.discussion_id = p.discussion_id
						{$onlyStickyDiscussions_Query}
						AND d.is_active = :is_active

						LEFT JOIN users u
						ON u.user_id = p.user_id

						LEFT JOIN
						( select p.dateline, p.user_id, p.post_id, u.username as fp_username, u.user_id as fp_user_id from posts p 
						    LEFT JOIN 
						    ( select u.user_id, u.username from users u) u
						    ON u.user_id = p.user_id
						) started_by
						ON started_by.post_id = d.firstpost_id

						LEFT JOIN forums f
						ON f.forum_id = p.forum_id

						LEFT JOIN
						( select discussion_id, count(post_id) as comment_count, max(post_id) as max_post_id, is_active from posts where is_active = :is_active group by discussion_id ) pa
						ON pa.discussion_id = d.discussion_id

						LEFT JOIN
						( select post_id, count(post_id) as like_count from post_likes group by post_id ) lp
						ON lp.post_id = p.post_id

						LEFT JOIN
						( select discussion_id, count(view_id) as view_count from discussion_views group by discussion_id ) vc
						ON vc.discussion_id = d.discussion_id

						WHERE p.is_active = :is_active
						{$group_by_where}
						{$userIdStatic}
						{$staticQuery}

						{$group_by_group}

						{$order->statement} {$order->param} {$order->with}

						LIMIT :wherePage, :topicLimit
						");
				}

				if ($keyword->search)
				{
					foreach ($keyword->query as $static)
					{
						$query->bindValue($static->param, $static->value);
					}
				}

				if (!is_null($user_id))
				{
					$query->bindValue('user_id', $user_id, \PDO::PARAM_INT);
				}

				$query->bindValue('wherePage', $wherePage, \PDO::PARAM_INT);
				$query->bindValue('topicLimit', $topicnumber, \PDO::PARAM_INT);

				if ($onlyStickyDiscussions && !is_null($onlyStickyDiscussions))
				{
					$query->bindValue('is_sticky', 1, \PDO::PARAM_INT);
				}
				else
				{
					$query->bindValue('is_sticky', 0, \PDO::PARAM_INT);
				}

				$query->bindValue('is_active', 1, \PDO::PARAM_INT);

				$fetch = $query->executeQuery()->fetchAllAssociative();

				$this->conn->close();

				return $fetch;
			}
		}
		else
		{
			return $this->findAll();
		}
	}

	public function createPost(string $content, int $forum_id, int $discussion_id, int $user_id, $device)
	{
		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'content' => '?',
				'forum_id' => '?',
				'discussion_id' => '?',
				'user_id' => '?',
				'dateline' => '?',
				'shortcode' => '?',
				'device' => '?'
			])
			->setParameter(0, $content)
			->setParameter(1, $forum_id)
			->setParameter(2, $discussion_id)
			->setParameter(3, $user_id)
			->setParameter(4, \App\Entity\DateTime::getTimeStamp())
			->setParameter(5, random_int(10000000, 99999999))
			->setParameter(6, $device)
			->executeQuery();

		$lastInsertId = $this->conn->lastInsertId();

		$this->conn->close();

		return $lastInsertId;
	}

	public function getAllPosts($forum_id = null)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('is_active = ?');

		if (!is_null($forum_id))
		{
			$query->andWhere('forum_id = ?');
		}

		$query->setParameter(0, 1);

		if (!is_null($forum_id))
		{
			$query->setParameter(1, $forum_id);
		}

		$query->orderBy('post_id', 'DESC');

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getDiscussionPostCount($discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select("*")
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

	public function getAllDiscussions($forum_id = null)
	{
		$query = $this->conn->createQueryBuilder()
			->select("*")
			->from('discussions')
			->where('is_active = ?');

		if (!is_null($forum_id) && $forum_id != 0)
		{
			$query->andWhere('forum_id = ?');
		}

		$query->setParameter(0, 1);

		if (!is_null($forum_id) && $forum_id != 0)
		{
			$query->setParameter(1, $forum_id);
		}

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getUserAllPosts($user_id, $discussion = false)
	{
		if (!$discussion)
		{
			$query = $this->conn->createQueryBuilder()
				->select("*")
				->from($this->table)
				->where('is_active = ?')
				->andWhere('user_id = ?')
				->setParameter(0, 1)
				->setParameter(1, $user_id)
				->executeQuery()->fetchAllAssociative();
		}
		else
		{
			$query = $this->conn->createQueryBuilder()
				->select("*")
				->from($this->table)
				->where('is_active = ?')
				->andWhere('user_id = ?')
				->groupBy('discussion_id')
				->setParameter(0, 1)
				->setParameter(1, $user_id)
				->executeQuery()->fetchAllAssociative();
		}

		$this->conn->close();

		return $query;
	}

	public function getPostByDiscussionId(int $discussion_id, $wherePage, $topicnumber, object $order)
	{
		if (\App\SubContainer\Post\Order::isWhiteList($order->statement, ['ORDER BY']) && \App\SubContainer\Post\Order::isWhiteList($order->param, ['p.dateline', 'lp.like_count']) && \App\SubContainer\Post\Order::isWhiteList($order->with, ['DESC', 'ASC']))
		{
			$query = $this->conn->prepare("SELECT p.*, f.title as forum_title, u.user_id, u.username, lp.like_count
				FROM posts p

				LEFT JOIN forums f
				ON f.forum_id = p.forum_id

				LEFT JOIN users u 
				ON u.user_id = p.user_id

				LEFT JOIN
				( select post_id, count(post_id) as like_count from post_likes group by post_id ) lp
				ON lp.post_id = p.post_id

				WHERE p.discussion_id = :discussion_id
				AND p.is_active = :is_active

				{$order->statement} {$order->param} {$order->with}

				LIMIT :wherePage, :topicLimit
				");

			$query->bindValue('discussion_id', intval($discussion_id));

			$query->bindValue('wherePage', $wherePage, \PDO::PARAM_INT);
			$query->bindValue('topicLimit', $topicnumber, \PDO::PARAM_INT);

			$query->bindValue('is_active', 1, \PDO::PARAM_INT);

			$fetch = $query->executeQuery()->fetchAllAssociative();

			$this->conn->close();

			return $fetch;
		}
	}

	public function getDiscussionPostAll(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('discussion_id = ?')
			->andWhere('is_active = ?')
			->orderBy('post_id', 'DESC')
			->setParameter(0, $discussion_id)
			->setParameter(1, 1)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getDiscussionLastPost(int $discussion_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('MAX(post_id) as max_id')
			->from($this->table)
			->where('discussion_id = ?')
			->setParameter(0, $discussion_id)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query['max_id'];
	}

	public function postLike(int $post_id, int $user_id, string $reaction)
	{
		$query = $this->conn->createQueryBuilder()
			->insert('post_likes')
			->values([
				'post_id' => '?',
				'user_id' => '?',
				'reaction' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->setParameter(2, $reaction)
			->setParameter(3, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function postUnLike(int $post_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete('post_likes')
			->where('post_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->executeQuery();
	}

	public function getPostLikeCount(int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('post_likes')
			->where('post_id = ?')
			->setParameter(0, $post_id)
			->orderBy('like_id', 'DESC')
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function getPostLikes(int $post_id, $limit = true)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('post_likes')
			->where('post_id = ?')
			->setParameter(0, $post_id)
			->orderBy('like_id', 'DESC');

		if ($limit)
		{
			$query->setMaxResults(2);
		}

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function isUserLikePost(int $post_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('post_likes')
			->where('post_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function postBookmark(int $post_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->insert('post_bookmarks')
			->values([
				'post_id' => '?',
				'user_id' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->setParameter(2, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function postUnBookmark(int $post_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete('post_bookmarks')
			->where('post_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function isUserBookmarkPost(int $post_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('post_bookmarks')
			->where('post_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, $post_id)
			->setParameter(1, $user_id)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function getPostByPostId(int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('post_id = ?')
			->setParameter(0, $post_id);

		$fetch = $query->executeQuery()->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function postDeActivate(int $post_id)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('is_active', '?')
			->where('post_id = ?')
			->setParameter(0, 0)
			->setParameter(1, $post_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function discussionAllPostDeActivate(int $discussion_id)
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

	public function discussionAllPostDeleteWithForumId(int $forum_id)
	{
		$query = $this->conn->createQueryBuilder()
			->delete($this->table)
			->where('forum_id = ?')
			->setParameter(0, $forum_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function postChangeContent(int $post_id, $content, int $lastedit_userid)
	{
		$query = $this->conn->createQueryBuilder()
			->update($this->table)
			->set('content', '?')
			->set('lastedit_userid', '?')
			->set('lastedit_date', '?')
			->where('post_id = ?')
			->setParameter(0, $content)
			->setParameter(1, $lastedit_userid)
			->setParameter(2, \App\Entity\DateTime::getTimeStamp())
			->setParameter(3, $post_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function postsMove(int $discussion_id, int $forum_id)
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

	public function getUserPostCount(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $user_id)
			->setParameter(1, 1)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getUserDiscussionCount(int $user_id)
	{
		$query = $this->conn->prepare("SELECT p.*
			FROM posts p

			LEFT JOIN discussions d
			ON d.firstpost_id = p.post_id

			WHERE p.user_id = :user_id
			AND p.is_active = :is_active
			AND d.is_active = :is_active

			GROUP BY d.discussion_id
			");

		$query->bindValue('user_id', $user_id, \PDO::PARAM_INT);
		$query->bindValue('is_active', 1, \PDO::PARAM_INT);

		$rowCount = $query->executeQuery()->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function search(string $keyword)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('content LIKE ?')
			->setParameter(0, "%{$keyword}%")
			->setMaxResults(7)
			->executeQuery();

		$fetch = $query->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getUserLikesPosts(int $user_id, $wherePage, $topicnumber)
	{
		$query = $this->conn->prepare("SELECT p.*, d.*, pl.reaction as reaction, u.user_id, u.username
			FROM post_likes pl

			LEFT JOIN posts p
			ON p.post_id = pl.post_id

			LEFT JOIN discussions d
			ON d.discussion_id = p.discussion_id

			LEFT JOIN users u 
			ON u.user_id = p.user_id

			WHERE pl.user_id = :user_id
			AND p.is_active = :is_active

			LIMIT :wherePage, :topicLimit
			");

		$query->bindValue('user_id', intval($user_id));

		$query->bindValue('wherePage', $wherePage, \PDO::PARAM_INT);
		$query->bindValue('topicLimit', $topicnumber, \PDO::PARAM_INT);

		$query->bindValue('is_active', 1, \PDO::PARAM_INT);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getUserLikesAllPosts(int $user_id)
	{
		$query = $this->conn->prepare("SELECT p.*
			FROM post_likes pl

			LEFT JOIN posts p
			ON p.post_id = pl.post_id

			WHERE pl.user_id = :user_id
			AND p.is_active = :is_active
			");

		$query->bindValue('user_id', intval($user_id));
		$query->bindValue('is_active', 1, \PDO::PARAM_INT);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getUserBookmarksPosts(int $user_id, $wherePage, $topicnumber)
	{
		$query = $this->conn->prepare("SELECT p.*, d.*, u.user_id, u.username
			FROM post_bookmarks pb

			LEFT JOIN posts p
			ON p.post_id = pb.post_id

			LEFT JOIN discussions d
			ON d.discussion_id = p.discussion_id

			LEFT JOIN users u 
			ON u.user_id = p.user_id

			WHERE pb.user_id = :user_id
			AND p.is_active = :is_active

			LIMIT :wherePage, :topicLimit
			");

		$query->bindValue('user_id', intval($user_id));

		$query->bindValue('wherePage', $wherePage, \PDO::PARAM_INT);
		$query->bindValue('topicLimit', $topicnumber, \PDO::PARAM_INT);

		$query->bindValue('is_active', 1, \PDO::PARAM_INT);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function getUserBookmarksAllPosts(int $user_id)
	{
		$query = $this->conn->prepare("SELECT p.*
			FROM post_bookmarks pb

			LEFT JOIN posts p
			ON p.post_id = pb.post_id

			WHERE pb.user_id = :user_id
			AND p.is_active = :is_active
			");

		$query->bindValue('user_id', intval($user_id));
		$query->bindValue('is_active', 1, \PDO::PARAM_INT);

		$fetch = $query->executeQuery()->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function isExistPost($shortcode)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('shortcode = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $shortcode)
			->setParameter(1, 1)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getDiscussionId($shortcode)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('shortcode = ?')
			->andWhere('is_active = ?')
			->setParameter(0, $shortcode)
			->setParameter(1, 1)
			->setMaxResults(1)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query['discussion_id'];
	}
}
