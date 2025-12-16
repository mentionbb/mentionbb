<?php

namespace App\SubContainer\Search;

use App\Entity\Posts;
use App\Entity\Discussion;
use App\Entity\User;
use Laminas\Escaper\Escaper;

class Quick
{
	public static function searchPosts($keyword)
	{
		$keyword = (new Escaper('utf-8'))->escapeHtml($keyword);

		return (new Posts())->search($keyword);
	}

	public static function searchDiscussions($keyword)
	{
		$keyword = (new Escaper('utf-8'))->escapeHtml($keyword);

		return (new Discussion())->search($keyword);
	}

	public static function searchUsers($keyword)
	{
		$keyword = (new Escaper('utf-8'))->escapeHtml($keyword);

		return (new User())->search($keyword);
	}
}
