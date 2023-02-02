<?php

namespace App\SubContainer;

class AppSub
{
	public static function getPublicDir()
	{
		if (preg_match('#/#', self::getFullUrl(), $matchSub))
		{
			$parts = explode('/', self::getFullUrl());
			if (isset($parts[3]))
			{
				return "/{$parts[3]}/public";
			}
			else
			{
				return '/public';
			}
		}
		else
		{
			return '/public';
		}
	}

	public static function getSubDir()
	{
		if (preg_match('#/#', self::getFullUrl(), $matchSub))
		{
			$parts = explode('/', self::getFullUrl());
			if (isset($parts[3]))
			{
				return $parts[3];
			}

			return false;
		}

		return false;
	}

	public static function getFullUrl()
	{
		if (
			isset($_SERVER['HTTPS']) &&
			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
		)
		{
			$protocol = 'https';
		}
		else
		{
			$protocol = 'http';
		}

		$host = $_SERVER['HTTP_HOST'];
		$folder = $_SERVER['PHP_SELF'];

		// Fix for some system show "index.php/public/.."
		$folder = \str_replace('/index.php', '', $folder);

		return "{$protocol}://{$host}{$folder}";
	}
}
