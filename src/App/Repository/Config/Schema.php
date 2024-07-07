<?php

namespace App\Repository\Config;

use InitialConfig;

use App\Util\Yaml;

class Schema
{
	/**
	 * dbInitialize
	 * 
	 * @deprecated 
	 *
	 * @return void
	 */
	protected function dbInitialize()
	{
		$config = Yaml::getFile(CONFIG_DIR . "/db.yaml");
		$config = \App\Repository\Set::setObject($config)->db;

		return "{$config->driver}://{$config->user}:{$config->password}@{$config->host}/{$config->name}?charset={$config->charset}";
	}

	public static function eventInitialize($getDisabled = false)
	{
		$extension = (!$getDisabled ? 'yaml' : 'noactive,yaml');

		foreach (glob(APPLICATION_SELF . "/Addons/" . '*' . ".{" . $extension . "}", GLOB_BRACE) as $file)
		{
			$event = Yaml::getFile($file);
			if (!isset($event['event_id']))
			{
				$event['event_id'] = 0;
			}

			$events["AppId_{$event['event_id']}"] = $event;
			$events["AppId_{$event['event_id']}"]['file'] = pathinfo($file, PATHINFO_EXTENSION);

			if (InitialConfig::Disable_All_Addons)
			{
				if ($event['event_id'] != 'e4888e0e-364f-4feb-88b9-e961088460c4')
				{
					unset($events["AppId_{$event['event_id']}"]);
					unset($events["AppId_{$event['event_id']}"]['file']);
				}
			}
		}

		return \App\Repository\Set::setObject($events);
	}

	public static function routeInitialize()
	{
		return CONFIG_DIR . "/routes.yaml";
	}
}
