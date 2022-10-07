<?php

namespace App\SubContainer\Search;

use App\Entity\Posts;
use Laminas\Escaper\Escaper;

class Post
{
	public static function keyword($keyword)
	{
		if (is_null($keyword))
		{
			return self::_noSearch();
		}

		$keyword = (new Escaper('utf-8'))->escapeHtml($keyword);

		return self::quickSearchByKeyword($keyword);
	}

	private static function _noSearch()
	{
		return [
			'search' => false
		];
	}

	private static function quickSearchByKeyword(string $keyword)
	{
		return [
			'search' => true,
			'query' => [
				0 => [
					'where' => 'AND',
					'statement' => 'LIKE',
					'column' => 'p.content',
					'param' => ':keywords',
					'value' => "%{$keyword}%"
				]
			]
		];
	}
}
