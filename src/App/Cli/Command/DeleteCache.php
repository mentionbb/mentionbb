<?php

namespace App\Cli\Command;

use App\Cli\Console\LoggableOutput;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Filesystem\Filesystem;

class DeleteCache extends Command
{
	protected function configure(): void
	{
		$this->setName(\App\Cli\CommandList::CLEAR_CACHE)
			->setDescription('This command delete cache files.');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$output = new LoggableOutput($this->getName(), $output);
		
		$filesystem = new Filesystem();
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/DBQuaries/"]);

		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Languages/"]);

		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Storage/guzzle/"]);

		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Template/"]);

		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/sitemap-1.xml"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/sitemap-2.xml"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/sitemap-3.xml"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/sitemap-4.xml"]);

		$output->writeln("<info>All cache files has been deleted.</info>");
		$output->writeln("<info>src/Cache/DBQuaries</info>");
		$output->writeln("<info>src/Cache/Languages</info>");
		$output->writeln("<info>src/Cache/Storage</info>");
		$output->writeln("<info>src/Cache/Template</info>");
		$output->writeln("<info>src/Cache/sitemap</info>");

		$output->log();

		return Command::SUCCESS;
	}
}
