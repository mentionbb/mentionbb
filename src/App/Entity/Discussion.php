<?php

namespace App\Entity;

use App\Db\Layer;

class Discussion extends Layer
{
    public function __construct()
    {
        parent::__construct();

        $this->setTable('discussions');
    }

    public function discussionList()
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('is_active = ?')
            ->setParameter(0, 1);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $fetch;
    }

    public function createDiscussion(string $title, int $forum_id, int $is_sticky, int $is_open)
    {
        $this->createQueryBuilder()
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

        $lastInsertId = $this->lastInsertId();

        $this->close();

        return $lastInsertId;
    }

    public function discussionReWriteFirstPost(int $discussion_id, int $first_post_id)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('firstpost_id', '?')
            ->where('discussion_id = ?')
            ->setParameter(0, $first_post_id)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function getDiscussion(int $discussion_id)
    {
        $query = $this->createQueryBuilder();
        $query->select('d.*', 'p.*', 'f.title as forum_title', 'u.user_id', 'u.username')
            ->from($this->table, 'd')
            ->leftJoin('d', 'forums', 'f', 'f.forum_id = d.forum_id')
            ->leftJoin('d', 'posts', 'p', 'p.post_id = d.firstpost_id')
            ->leftJoin('d', 'users', 'u', 'u.user_id = p.user_id')
            ->where('d.discussion_id = :discussion_id')
            ->andWhere('d.is_active = :is_active')
            ->setMaxResults(1)
            ->setParameter('discussion_id', intval($discussion_id))
            ->setParameter('is_active', 1);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAssociative();

        $this->close();

        return $fetch;
    }

    public function getAllDiscussions()
    {
        $query = $this->createQueryBuilder();
        $query->select('d.*', 'p.*', 'f.title as forum_title', 'u.user_id', 'u.username')
            ->from($this->table, 'd')
            ->leftJoin('d', 'forums', 'f', 'f.forum_id = d.forum_id')
            ->leftJoin('d', 'posts', 'p', 'p.post_id = d.firstpost_id')
            ->leftJoin('d', 'users', 'u', 'u.user_id = p.user_id')
            ->where('d.is_active = :is_active')
            ->andWhere('p.discussion_id IS NOT NULL')
            ->orderBy('p.dateline')
            ->setParameter('is_active', 1);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $fetch;
    }

    public function discussionIsExist(int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('discussion_id = ?')
            ->andWhere('is_active = ?')
            ->setParameter(0, $discussion_id)
            ->setParameter(1, 1)
            ->executeQuery();

        $rowCount = $query->rowCount();

        $this->close();

        return $rowCount;
    }

    public function isAnySticky($forum_id)
    {
        $query = $this->createQueryBuilder();
        $query->select('f.*', 'd.*')
            ->from($this->table, 'd')
            ->leftJoin('d', 'forums', 'f', 'f.forum_id = d.forum_id')
            ->where('d.is_active = :is_active')
            ->andWhere('d.is_sticky = :is_sticky');

        if ($forum_id != 0)
        {
            $query->andWhere('d.forum_id = :forum_id');
        }

        $query->setMaxResults(1);

        if ($forum_id != 0)
        {
            $query->setParameter('forum_id', $forum_id);
        }

        $query->setParameter('is_active', 1)
            ->setParameter('is_sticky', 1);

        $rowCount = $query->executeQuery()->rowCount();

        $this->close();

        return $rowCount;
    }

    public function getDiscussionByFirstPostId(int $post_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('firstpost_id = ?')
            ->setParameter(0, $post_id);

        $exc = $this->setQuery($query)->executeQuery();

        if ($exc->rowCount() > 0)
        {
            $fetch = $exc->fetchAssociative();
        }
        else
        {
            $fetch = false;
        }

        $this->close();

        return $fetch;
    }

    public function discussionDeActivate(int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('is_active', '?')
            ->where('discussion_id = ?')
            ->setParameter(0, 0)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function discussionDeleteWithForumId(int $forum_id)
    {
        $query = $this->createQueryBuilder()
            ->delete($this->table)
            ->where('forum_id = ?')
            ->setParameter(0, $forum_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function discussionChangeTitle(int $firstpost_id, string $title)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('title', '?')
            ->where('firstpost_id = ?')
            ->setParameter(0, $title)
            ->setParameter(1, $firstpost_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function discussionMove(int $discussion_id, int $forum_id)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('forum_id', '?')
            ->where('discussion_id = ?')
            ->setParameter(0, $forum_id)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function discussionPinOperation(int $discussion_id, int $pin_status)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('is_sticky', '?')
            ->where('discussion_id = ?')
            ->setParameter(0, $pin_status)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function discussionLockOperation(int $discussion_id, int $lock_status)
    {
        $query = $this->createQueryBuilder()
            ->update($this->table)
            ->set('is_open', '?')
            ->where('discussion_id = ?')
            ->setParameter(0, $lock_status)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function addDiscussionView(string $ip, int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->insert('discussion_views')
            ->values([
                'ip' => '?',
                'discussion_id' => '?'
            ])
            ->setParameter(0, $ip)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function ifUserViewDiscussion(string $ip, int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from('discussion_views')
            ->where('ip = ?')
            ->andWhere('discussion_id = ?')
            ->setParameter(0, $ip)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $rowCount = $query->rowCount();

        $this->close();

        return $rowCount;
    }

    public function search(string $keyword)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from($this->table)
            ->where('title LIKE ?')
            ->andWhere('is_active = ?')
            ->setParameter(0, "%{$keyword}%")
            ->setParameter(1, 1)
            ->setMaxResults(7)
            ->executeQuery()->fetchAllAssociative();

        $this->close();

        return $query;
    }

    public function addSubscription(int $user_id, int $discussion_id)
    {
        $query = $this->createQueryBuilder()->insert('discussion_subscriptions')
            ->setValue('user_id', '?')
            ->setValue('discussion_id', '?')
            ->setValue('dateline', '?')
            ->setParameter(0, $user_id)
            ->setParameter(1, $discussion_id)
            ->setParameter(2, \App\Entity\DateTime::getTimeStamp())
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function ifUserSubscribeDiscussion(int $user_id, int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from('discussion_subscriptions')
            ->where('user_id = ?')
            ->andWhere('discussion_id = ?')
            ->setParameter(0, $user_id)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $rowCount = $query->rowCount();

        $this->close();

        return $rowCount;
    }

    public function ifSubscribeDiscussion(int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from('discussion_subscriptions')
            ->where('discussion_id = ?')
            ->setParameter(0, $discussion_id)
            ->executeQuery();

        $rowCount = $query->rowCount();

        $this->close();

        return $rowCount;
    }

    public function getSubscriptions(int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->select('*')
            ->from('discussion_subscriptions')
            ->where('discussion_id = ?')
            ->setParameter(0, $discussion_id);

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $fetch;
    }

    public function removeSubscription(int $user_id, int $discussion_id)
    {
        $query = $this->createQueryBuilder()
            ->delete('discussion_subscriptions')
            ->where('user_id = ?')
            ->andWhere('discussion_id = ?')
            ->setParameter(0, $user_id)
            ->setParameter(1, $discussion_id)
            ->executeQuery();

        $this->close();

        return $query;
    }

    public function getUserSubscriptions(int $user_id)
    {
        $query = $this->createQueryBuilder();
        $query->select('d.*', 'p.user_id as user_id')
            ->from('discussion_subscriptions', 'ds')
            ->leftJoin('ds', 'discussions', 'd', 'd.discussion_id = ds.discussion_id')
            ->leftJoin('ds', 'posts', 'p', 'p.post_id = d.firstpost_id')
            ->where('ds.user_id = :user_id')
            ->setParameter('user_id', intval($user_id));

        $fetch = $this->setQuery($query)
            ->executeQuery()
            ->fetchAllAssociative();

        $this->close();

        return $fetch;
    }
}
