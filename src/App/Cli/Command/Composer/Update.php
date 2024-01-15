<?php

namespace App\Cli\Command\Composer;

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
            $output->writeln('<info>Starting composer update..</info>');

            $process = new Process(['php', FRAMEWORK_LIBS . '/bin/composer.phar', 'update', '-v']);
            $process->run();

            if (!$process->isSuccessful())
            {
                throw new ProcessFailedException($process);
            }

            $loggerName = \App\Uuid::v4();
            $this->doLogger($loggerName, \App\Cli\CommandList::COMPOSER);
            $process->run(function ($type, $buffer) use ($output, $loggerName)
            {
                $this->doLogger($loggerName, \App\Cli\CommandList::COMPOSER, $buffer);
                if (Process::ERR === $type)
                {
                    $output->writeln("<fg=black;bg=cyan;options=bold>{$buffer}</>");
                }
                else
                {
                    $output->writeln("<info>{$buffer}</info>");
                }
            });
        }

        return Command::SUCCESS;
    }

    private function doLogger(string $name, string $command, $data = "")
    {
        $file = new \App\Util\File();

        if (!file_exists(APPLICATION_SELF . "/Logs/Console/{$name}.txt"))
        {
            $data = "Log date:" . time() . "\n" . "> {$command} update\n\n";
        }

        $file->appendToFile(APPLICATION_SELF . "/Logs/Console/{$name}.txt", $data);
    }
}
