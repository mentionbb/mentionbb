<?php

namespace App\Cli\Command\Composer;

use App\Cli\Console\loggableOutput;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Update extends Command
{
    protected function configure(): void
    {
        $this->setName(\App\Cli\CommandList::COMPOSER)
            ->setDescription('This command allows you to easily perform the composer update.')
            ->addArgument('update', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getArgument('update'))
        {
            $output = new loggableOutput($this->getName(), $output);

            $output->writeln('<info>Starting composer update..</info>');

            $process = new Process(['php', FRAMEWORK_LIBS . '/bin/composer.phar', 'update', '-v']);
            $process->run();

            if (!$process->isSuccessful())
            {
                throw new ProcessFailedException($process);
            }

            $process->run(function ($type, $buffer) use ($output)
            {
                $output->writeln("<fg=white;bg=green;options=bold>{$buffer}</>");
            });
        }

        $output->log();

        return Command::SUCCESS;
    }
}
