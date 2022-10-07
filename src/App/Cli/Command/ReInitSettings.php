<?php

namespace App\Cli\Command;

use App\Entity\Settings as SettingsEntity;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class ReInitSettings extends Command
{
	protected function configure()
	{
		$this->setName('iflex:reinit-settings')
			->setDescription('This command change settings from Cli.');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$settings = new SettingsEntity();

		$helper = $this->getHelper('question');

		foreach ($settings->findAll() as $listSettings)
		{
			$list[] = $listSettings['name'];
		}

		$name = new ChoiceQuestion(
			'Please select setting name.',
			$list
		);
		$name->setErrorMessage('Please select setting.');

		$value = new Question('New value:');

		$name = $helper->ask($input, $output, $name);
		$value = $helper->ask($input, $output, $value);

		$confirm = new ConfirmationQuestion("<question>Change setting?[y/n]</question>", false);

		$settings->setSettings(
			$name,
			$value
		);

		if (!$helper->ask($input, $output, $confirm))
		{
			return;
		}

		$output->writeln("<info>All data saved successfully.</info>");

		return 0;
	}
}
