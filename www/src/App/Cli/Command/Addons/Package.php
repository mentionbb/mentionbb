<?php

namespace App\Cli\Command\Addons;

use App\Util\Zip;

use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;

class Package extends Command
{
    protected function configure(): void
    {
        $this->setName(\App\Cli\CommandList::REBUILDING_ADDONS)
            ->setDescription('This command builds your addon and outputs it as a package.')
            ->setDefinition(
                new InputDefinition([
                    new InputOption('name', null, InputOption::VALUE_REQUIRED)
                ])
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filesystem = new Filesystem();

        $io = new SymfonyStyle($input, $output);

        if ($input->getOption('name') == 'Mention')
        {
            $io->getErrorStyle()->error('You cannot build the Core-Application addons.');
            return Command::INVALID;
        }

        if (!file_exists(APPLICATION_SELF . '/Dev/Addons'))
        {
            $filesystem->mkdir(APPLICATION_SELF . '/Dev/Addons');
        }

        if (file_exists(APPLICATION_SELF . '/Addons/' . $input->getOption('name') . '.yaml'))
        {
            if (file_exists(APPLICATION_SELF . '/Addons/' . $input->getOption('name')))
            {
                (new Zip())->compress(
                    [
                        $input->getOption('name') . '.noactive' => APPLICATION_SELF . '/Addons/' . $input->getOption('name') . '.yaml',
                        $input->getOption('name') => APPLICATION_SELF . '/Addons/' . $input->getOption('name') . '/'
                    ],
                    APPLICATION_SELF . '/Dev/Addons/' . $input->getOption('name') . '.zip'
                );
            }
        }
        else
        {
            $io->getErrorStyle()->error('Addon ' . $input->getOption('name') . ' is not exist!');
            return Command::INVALID;
        }

        return Command::SUCCESS;
    }
}
