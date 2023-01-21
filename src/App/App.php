<?php

namespace App;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\ErrorHandler\DebugClassLoader;

class App
{
	public static $collection;
	public static $request;

	public static $time;
	public static $configDir;
	public static $build;

	public static $session;

	public static $_supportPhpVersion = '7.4';

	public static $variable = [
		'session' => [
			'name' => 'fx_session',
			'lifetime' => 3600
		]
	];

	public static $dev = [
		'_debug' => true,
		'_devMode' => true,
		'_createErrorLog' => true
	];

	public static function beginInstall()
	{
		if (self::$dev['_devMode'])
		{
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
		}
		else
		{
			ini_set('display_errors', 'Off');
			error_reporting(E_ERROR | E_PARSE);
		}

		if (self::$dev['_debug'])
		{
			Debug::enable();
		}

		$_phpVersion = \PHP_VERSION;
		if (version_compare($_phpVersion, self::$_supportPhpVersion, '<='))
		{
			throw new \Exception("Your PHP version is '$_phpVersion' is does not support.Support PHP version is '7.4'.");
		}
		if (!self::isLoadExtension('curl'))
		{
			throw new \Exception("Mention required a PHP Curl Extension.");
		}
		if (!self::isLoadExtension('pdo_mysql'))
		{
			throw new \Exception("Mention required a MySQL PDO Extension.");
		}
		if (!self::isLoadExtension('mbstring'))
		{
			throw new \Exception("Mention required a mbstring Extension.");
		}
		if (!self::isLoadExtension('iconv'))
		{
			throw new \Exception("Mention required a iconv Extension.");
		}

		self::$collection = new RouteCollection();
		self::$request = Request::createFromGlobals();

		self::isAppInstalled();
	}

	public static function parameterContainer()
	{
		self::$session = new \App\Repository\Session();

		self::$session->setName(\App\App::$variable['session']['name']);
		self::$session->start();
	}

	public static function finder($class)
	{
		new $class;
	}

	public static function isLoadExtension($extension)
	{
		if (in_array($extension, get_loaded_extensions()))
		{
			return true;
		}
		return false;
	}

	/**
	 * isAppInstalled
	 * 
	 * Checks if the application is installed.
	 * Returns false if the user is on the Installer page.
	 *
	 * @return bool
	 */
	protected static function isAppInstalled()
	{
		if (!file_exists(APPLICATION_SELF . '/install.lock'))
		{
			$buildData = json_decode(
				file_get_contents(APPLICATION_SELF . '/Install/versions.json'),
				true
			);
			$buildData = \App\Util\Arr::arrayKeyMaxValue($buildData);
			self::$build = $buildData;

			if (class_exists(\Install\Controller\Install::class))
			{
				$request = new \App\Repository\Request();

				if ($request->getPathInfo() !== '/install')
				{
					return $request->redirect('install', true);
				}
			}
			else
			{
				throw new \Exception("Installer class not found. Please install manual.");
			}
		}
		else
		{
			self::$build = json_decode(
				file_get_contents(APPLICATION_SELF . '/install.lock'),
				true
			);
		}

		return true;
	}
	
	/**
	 * versionNaming
	 * 
	 * Version naming. Converts build versions to legit versions.
	 * 
	 * For example:
	 * Build: 11015101
	 * Version: 1.0.15 Beta 1
	 * 
	 * Template: 
	 * [Major/Minor/Update/Stage/Stage Level]
	 * Stage = 0:Stable|1:Beta|2:Alpha.
	 * Stage level = 00, no level but Stage keep.
	 * So when the version is stable, the last three numbers should be 000.
	 *
	 * @return void
	 */
	public static function versionNaming()
	{
		$versionId = self::$build['versionId'];

		$major = substr($versionId, 1, 1);
		$minor = substr($versionId, 2, 1);
		$update = substr($versionId, 3, 1);
		$update_2 = substr($versionId, 4, 1);

		$stage = substr($versionId, 5, 1);
		$stageLevel = substr($versionId, 6, 1) . substr($versionId, 7, 1);

		if ($stage == 1)
		{
			$stage = " Beta";
		}
		elseif ($stage == 2)
		{
			$stage = " Alpha";
		}
		elseif ($stage == 0)
		{
			$stage = "";
		}

		if ($stageLevel == 00)
		{
			$stageLevel = "";
		}
		else
		{
			$stageLevel = " " . number_format($stageLevel);
		}

		if (substr("{$update}{$update_2}", 0, 1) == 0)
		{
			$update = $update_2;
		}
		else
		{
			$update = "{$update}{$update_2}";
		}

		return "{$major}.{$minor}.{$update}{$stage}{$stageLevel}";
	}
}
