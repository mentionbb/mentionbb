<?php

namespace App\Entity;

use App\Entity\Mapper;

class User extends Mapper
{
	public function __construct()
	{
		parent::__construct();

		/**
		 * Set table 'users'.
		 */
		$this->setTable('users');
	}

	/**
	 * [findByUserName Find userdata from Username]
	 * @param  [string] $username
	 * @return [array]
	 */
	public function findByUserName($username)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('username = ?')
			->setParameter(0, $username)
			->setMaxResults(1);

			$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}

	/**
	 * [findByUserName Find userdata from UserID]
	 * @param  [string] $user_id
	 * @return [array]
	 */
	public function findByUserId($user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from($this->table)
			->where('user_id = ?')
			->setParameter(0, $user_id)
			->setMaxResults(1);

			$fetch = $this->setQuery($query)
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $fetch;
	}

	/**
	 * [getUserDataFromUsername Get userdata from Username and array to object]
	 * @param  [string] $username
	 * @return [object]
	 */
	public function getUserDataFromUsername($username)
	{
		$result = $this->findByUserName($username);

		if (is_array($result))
		{
			return \App\Repository\Set::setObject($result);
		}

		return false;
	}

	/**
	 * [getUserDataFromUserId Get userdata from UserID and array to object]
	 * @param  [int] $user_id
	 * @return [object]
	 */
	public function getUserDataFromUserId($user_id)
	{
		$result = $this->findByUserId($user_id);

		if (is_array($result))
		{
			return \App\Repository\Set::setObject($result);
		}

		return false;
	}

	/**
	 * [validateUsername Is there a username or not]
	 * @param  [string] $username
	 * @return [boolean]
	 */
	public function validateUsername($username)
	{
		$result = (object) $this->findByUserName($username);
		if ($result->rowCount() > 0)
		{
			return true;
		}
		return false;
	}

	/**
	 * [validateUser Validate user with Username & Password]
	 * @param  [string] $username
	 * @param  [string] $password
	 * @return [boolean]
	 */
	public function validateUser($username, $password)
	{
		$query = $this->conn->createQueryBuilder()->select("*")
			->from("users")
			->where('username = ?')
			->andWhere('password = ?')
			->setMaxResults(1)
			->setParameter(0, $username)
			->setParameter(1, $password)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	/**
	 * This function is deprecated.
	 */
	public function setActivity($data)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('last_activity', '?')
			->where('user_id = ?')
			->setParameter(0, $data['dateline'])
			->setParameter(1, $data['user_id'])
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	/**
	 * [validateUser Get User Count]
	 * @return [boolean]
	 */
	public function getUserCount()
	{
		$query = $this->conn->createQueryBuilder()->select("user_id")
			->from($this->table)
			->orderBy('user_id')
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		return $rowCount;
	}

	public function getLastRegistered()
	{
		$query = $this->conn->createQueryBuilder()->select("user_id, username, registration_date")
			->from($this->table)
			->setMaxResults(1)
			->orderBy('user_id', 'DESC')
			->executeQuery()
			->fetchAssociative();

		$this->conn->close();

		return $query;
	}

	public function Create(string $username, string $mail, string $password, string $secret_key, string $title, int $isAdmin)
	{
		$query = $this->conn->createQueryBuilder()
			->insert($this->table)
			->values([
				'username' => '?',
				'mail' => '?',
				'profile_picture' => '?',
				'password' => '?',
				'secret_key' => '?',
				'login_key' => '?',
				'status' => '?',
				'two_step_verification' => '?',
				'registration_date' => '?',
				'usertitle' => '?',
				'is_admin' => '?'
			])
			->setParameter(0, $username)
			->setParameter(1, $mail)
			->setParameter(2, 'default.svg')
			->setParameter(3, $password)
			->setParameter(4, $secret_key)
			->setParameter(5, \App\Repository\Crypto::encryption((new \PHPGangsta_GoogleAuthenticator())->createSecret(), $secret_key))
			->setParameter(6, 1)
			->setParameter(7, 0)
			->setParameter(8, \App\Entity\DateTime::getTimeStamp())
			->setParameter(9, $title)
			->setParameter(10, $isAdmin)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function search(string $keyword)
	{
		$query = $this->conn->createQueryBuilder()
			->select('usertitle', 'user_id', 'username', 'profile_picture', 'status', 'registration_date')
			->from($this->table)
			->where('username LIKE ?')
			->setParameter(0, "%{$keyword}%")
			->executeQuery();

		$fetch = $query->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function setMail($new_mail, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('mail', '?')
			->where('user_id = ?')
			->setParameter(0, $new_mail)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setTitle($new_title, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('usertitle', '?')
			->where('user_id = ?')
			->setParameter(0, $new_title)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setProfilePicture($new_pp, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('profile_picture', '?')
			->where('user_id = ?')
			->setParameter(0, $new_pp)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setPassword($new_password, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('password', '?')
			->where('user_id = ?')
			->setParameter(0, $new_password)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setTwoFa($definition, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('use_twofa', '?')
			->where('user_id = ?')
			->setParameter(0, $definition)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setUsername($new_username, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('username', '?')
			->where('user_id = ?')
			->setParameter(0, $new_username)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setRole($role, $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update($this->table)
			->set('is_admin', '?')
			->where('user_id = ?')
			->setParameter(0, $role)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function createFriendship(int $sender_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->insert('user_friendships')
			->values([
				'sender_id' => '?',
				'user_id' => '?',
				'dateline' => '?',
			])
			->setParameter(0, $sender_id)
			->setParameter(1, $user_id)
			->setParameter(2, \App\Entity\DateTime::getTimeStamp())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function setFriendshipAwaiting(int $sender_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()->update('user_friendships')
			->set('awaiting', '?')
			->where('sender_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, 0)
			->setParameter(1, $sender_id)
			->setParameter(2, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function removeFriendshipPending(int $sender_id, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()->delete('user_friendships')
			->where('sender_id = ?')
			->andWhere('user_id = ?')
			->setParameter(0, $sender_id)
			->setParameter(1, $user_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getUserFriendships(int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('user_friendships')
			->where('user_id = ?')
			->orWhere('sender_id = ?')
			->andWhere('awaiting = ?')
			->setParameter(0, $user_id)
			->setParameter(1, $user_id)
			->setParameter(2, 0)
			->executeQuery();

		$fetch = $query->fetchAllAssociative();

		$this->conn->close();

		return $fetch;
	}

	public function isUserHasFriendship(int $sender_id, int $user_id, $awaiting = 0)
	{
		$query = $this->conn->createQueryBuilder()
			->select('*')
			->from('user_friendships')
			->where('sender_id = ?')
			->andWhere('user_id = ?')
			->andWhere('awaiting = ?')
			->setParameter(0, $sender_id)
			->setParameter(1, $user_id)
			->setParameter(2, $awaiting)
			->executeQuery();

		$rowCount = $query->rowCount();

		$this->conn->close();

		if ($rowCount < 1)
		{
			$query = $this->conn->createQueryBuilder()
				->select('*')
				->from('user_friendships')
				->where('sender_id = ?')
				->andWhere('user_id = ?')
				->andWhere('awaiting = ?')
				->setParameter(0, $user_id)
				->setParameter(1, $sender_id)
				->setParameter(2, $awaiting)
				->executeQuery();

			$rowCount = $query->rowCount();

			$this->conn->close();

			if ($rowCount < 1)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			return true;
		}

		return false;
	}

	public function getLastFiveUsers()
	{
		$query = $this->conn->createQueryBuilder()->select("user_id, username, registration_date")
			->from($this->table)
			->setMaxResults(5)
			->orderBy('user_id', 'DESC')
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}

	public function banUser(int $expires, string $text, int $user_id)
	{
		$query = $this->conn->createQueryBuilder()
			->insert('user_bans')
			->values([
				'expires' => '?',
				'text' => '?',
				'user_id' => '?',
				'dateline' => '?'
			])
			->setParameter(0, $expires)
			->setParameter(1, $text)
			->setParameter(2, $user_id)
			->setParameter(3, time())
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function unbanUser($ban_id)
	{
		$query = $this->conn->createQueryBuilder()->update("user_bans")
			->set('expires', '?')
			->where('ban_id = ?')
			->setParameter(0, 0)
			->setParameter(1, $ban_id)
			->executeQuery();

		$this->conn->close();

		return $query;
	}

	public function getUserBans($user_id)
	{
		$query = $this->conn->createQueryBuilder()->select("*")
			->from('user_bans')
			->where('user_id = ?')
			->orderBy('dateline', 'DESC')
			->setParameter(0, $user_id)
			->executeQuery()
			->fetchAllAssociative();

		$this->conn->close();

		return $query;
	}
}
