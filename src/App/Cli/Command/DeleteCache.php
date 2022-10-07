<?php

namespace App\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Symfony\Component\Filesystem\Filesystem;

class DeleteCache extends Command
{
	protected static $defaultName = \App\Cli\CommandList::CLEAR_CACHE;

	protected function configure()
	{
		$this->setDescription('This command delete cache files.');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$filesystem = new Filesystem();
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Languages/"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Storage/guzzle/"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/Template/"]);
		$filesystem->remove(['symlink', APPLICATION_SELF . "/Cache/sitemap.xml"]);

		$output->writeln("<info>All cache files has been deleted.</info>");
		$output->writeln("<info>src/Cache/Languages</info>");
		$output->writeln("<info>src/Cache/Storage</info>");
		$output->writeln("<info>src/Cache/Template</info>");
		$output->writeln("<info>src/Cache/sitemap.xml</info>");

		return Command::SUCCESS;
	}
}
