<?php

namespace App\SubContainer\User;

use App\Entity\User;
use App\SubContainer\AppSub;

class Link
{
	protected $settings;

	private $user;
	private $language;
	private $phrase;

	public function __construct($settings, $language, $phrase)
	{
		$this->settings = $settings;
		$this->language = \App\Repository\Set::setObject(
			$language
		);

		$this->phrase = $phrase;
	}

	/**
	 * [setUser Set UserId or Username]
	 * @param [string] $user,
	 */
	public function setUser($user)
	{
		if (is_numeric($user))
		{
			$data = (new User())->getUserDataFromUserId($user);
		}
		else
		{
			$data = (new User())->getUserDataFromUsername($user);
		}

		if (is_null($data))
		{
			return false;
		}

		$this->user = $data;
	}

	/**
	 * [unsetUser Unset UserId or Username because it is necessary to define a new User.]
	 * @return [bool
	 */
	public function unsetUser()
	{
		$this->user = null;
	}

	/**
	 * [getLink Get User link]
	 * @param [string] $class
	 * @return [string]
	 */
	public function getLink($reaction = null, $zIndex = false)
	{
		if (is_null($this->user))
		{
			return false;
		}

		if (!is_null($reaction))
		{
			$reaction = "class=\"reaction {$reaction}\"";
		}
		else
		{
			$reaction = '';
		}

		if ($zIndex)
		{
			$zIndex = "style =\"z-index: 2\"";
		}
		else
		{
			$zIndex = '';
		}

		$linkBuilder = $this->phrase->buildLink('profile', [
			'username' => $this->user->username,
			'user_id' => $this->user->user_id
		]);

		return "<a {$reaction} {$zIndex} data-user-id=\"{$this->user->user_id}\" href=\"{$linkBuilder}\">{$this->user->username}</a>";
	}

	/**
	 * [getLink Get User Name]
	 * @return [string]
	 */
	public function getName()
	{
		if (is_null($this->user))
		{
			return false;
		}

		return $this->user->username;
	}

	/**
	 * [getLink Get User Id]
	 * @return [string]
	 */
	public function getId()
	{
		if (is_null($this->user))
		{
			return false;
		}

		return $this->user->user_id;
	}

	/**
	 * [getLink Get User Only Link]
	 * @return [string]
	 */
	public function getOnlyLink()
	{
		if (is_null($this->user))
		{
			return false;
		}

		return $this->phrase->buildLink('profile', [
			'username' => $this->user->username,
			'user_id' => $this->user->user_id
		]);
	}

	/**
	 * [getLinkWithProfilePicture Get User link With Profile Picture]
	 * @param  boolean $withUserStatusInfo [To get the status information]
	 * @return [string]
	 */
	public function getLinkWithProfilePicture($withUserStatusInfo = true, $zIndex = false)
	{
		if (is_null($this->user))
		{
			return false;
		}

		if ($zIndex)
		{
			$zIndex = "style =\"z-index: 2\"";
		}
		else
		{
			$zIndex = '';
		}

		$linkBuilder = $this->phrase->buildLink('profile', [
			'username' => $this->user->username,
			'user_id' => $this->user->user_id
		]);

		if ($withUserStatusInfo)
		{
			$statusInfo = $this->statusInfo($this->user->last_activity);
		}
		else
		{
			$statusInfo = '';
		}

		return "<a {$zIndex} data-user-id=\"{$this->user->user_id}\" href=\"{$linkBuilder}\">
		" . $this->getProfilePicture($withUserStatusInfo) . "
		</a>";
	}

	/**
	 * [getProfilePicture Get User Profile Picture]
	 * @param  boolean $withUserStatusInfo [To get the status information]
	 * @return [string]
	 */
	public function getProfilePicture($withUserStatusInfo = true, $extraClasses = false)
	{
		if (is_null($this->user))
		{
			return false;
		}

		if ($withUserStatusInfo)
		{
			$statusInfo = $this->statusInfo($this->user->last_activity);
			$info = $this->language->container->visitor->status->{$statusInfo['info']};

			$statusInfo = $statusInfo['class'];
		}
		else
		{
			$statusInfo = '';
			$info = $this->user->username;
		}

		if (substr(strrchr($this->user->profile_picture, "."), 1))
		{
			$path = AppSub::getPublicDir() . "/uploads/profile_picture/{$this->user->profile_picture}\"";
		}
		else
		{
			$path = AppSub::getPublicDir() . "/images/avatars/{$this->user->profile_picture}.svg\"";
		}

		return "<img title=\"{$info}\" alt=\"{$this->user->username}\" class=\"rounded-circle {$statusInfo} {$extraClasses}\" src=\"{$path}\" data-user-id=\"{$this->user->user_id}\" />";
	}

	public function getLastActivity()
	{
		return $this->user->last_activity;
	}

	public function getUserTitle()
	{
		if ($this->user->usertitle == '__default')
		{
			return $this->language->container->visitor->default_title;
		}
		else
		{
			return $this->user->usertitle;
		}
	}

	public function isAdmin()
	{
		return $this->user->is_admin;
	}

	/**
	 * statusInfo
	 *
	 * @param  mixed $last_activity
	 * @return void
	 */
	protected function statusInfo($last_activity)
	{
		if (time() - $last_activity < 15 * 60)
		{
			return [
				"class" => "user-status online",
				"info" => "online"
			];
		}
		else
		{
			return [
				"class" => "user-status offline",
				"info" => "offline"
			];
		}
	}
}
