<?php

namespace App\SubContainer\Post;

class Order
{
	public static function getOrder(string $order_name)
	{
		$order_name = (new \Laminas\Escaper\Escaper('utf-8'))->escapeHtml($order_name);

		switch ($order_name)
		{
			case 'newest':
				return self::newestOrder();
				break;

			case 'popular':
				return self::popularOrder();
				break;

			case 'top-likes':
				return self::likesOrder();
				break;

			case 'oldest':
				return self::oldestOrder();
				break;

			default:
				self::newestOrder();
				break;
		}
	}

	private static function newestOrder()
	{
		return [
			'statement' => 'ORDER BY',
			'param' => 'p.dateline',
			'with' => 'DESC'
		];
	}

	private static function popularOrder()
	{
		return [
			'statement' => 'ORDER BY',
			'param' => 'comment_count',
			'with' => 'DESC'
		];
	}

	private static function likesOrder()
	{
		return [
			'statement' => 'ORDER BY',
			'param' => 'lp.like_count',
			'with' => 'DESC'
		];
	}

	private static function oldestOrder()
	{
		return [
			'statement' => 'ORDER BY',
			'param' => 'p.dateline',
			'with' => 'ASC'
		];
	}

	public static function isWhiteList($value, $allowed)
	{
		if ($value === null)
		{
			return $allowed[0];
		}
		$key = array_search($value, $allowed, true);
		if ($key === false)
		{
			throw new \InvalidArgumentException("Unauthorized parameter!");
		}
		else
		{
			return $value;
		}
	}
}
