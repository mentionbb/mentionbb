<?php

namespace App\Cli;

use Symfony\Component\Console\Application as ConsoleApplication;

class Run
{
	public function __construct()
	{
		if (PHP_SAPI != 'cli')
		{
			die('Console Application is only for Cli.');
		}

		\App\App::beginConsoleInstall();
		$application = new ConsoleApplication(
			\App\App::getFiglet() . "\nMentionBB Console Application",
			'Version: ' . \App\App::versionNaming() . ', Build: ' . \App\App::$build['versionId']
		);

		$this->addCommands($application);

		$application->run();
	}

	protected function addCommands(ConsoleApplication $console)
	{
		$commandClasses = (new \App\Util\ClassFinder())->getClassesByNamespace('App\Cli\Command');
		foreach ($commandClasses as $class)
		{
			$console->add(new $class());
		}
	}
}
