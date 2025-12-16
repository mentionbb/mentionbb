<?php

namespace App\Cli\Command\Build;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BuildHashes extends Command
{
    protected function configure(): void
    {
        $this->setName(\App\Cli\CommandList::BUILD_HASHES)
            ->setDescription('This command is used to build hash.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Building hash..</info>');

        (new \RequireChecker())->buildHashes();

        $output->writeln('<info>Hashes created</info>');

        return Command::SUCCESS;
    }
}
