<?php

namespace App\Cli\Command\Install;

use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Db extends Command
{
	protected function configure(): void
	{
		$this->setName(\App\Cli\CommandList::INSTALL_DB)
			->setDescription('This command create a env config file.')
            ->setDefinition(
                new InputDefinition([
                    new InputOption('dbadapter', null, InputOption::VALUE_REQUIRED, 'Database adapter default is pdo_mysql'),
                    new InputOption('user', null, InputOption::VALUE_REQUIRED, 'Database user'),
                    new InputOption('password', null, InputOption::VALUE_REQUIRED, 'Database user password'),
                    new InputOption('dbname', null, InputOption::VALUE_REQUIRED, 'Database name'),
                    new InputOption('dbhost', null, InputOption::VALUE_REQUIRED, 'Database host name')
                ])
            );
	}

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filesystem = new Filesystem();

        $io = new SymfonyStyle($input, $output);

        $envContent = "DBCONFIG_PORT=\"3306\"\nDBCONFIG_HOST=\"{$input->getOption('dbhost')}\"\nDBCONFIG_ADAPTER=\"{$input->getOption('dbadapter')}\"\nDBCONFIG_USER=\"{$input->getOption('user')}\"\nDBCONFIG_USER_PASSWORD=\"{$input->getOption('password')}\"\nDBCONFIG_DBNAME=\"{$input->getOption('dbname')}\"";

        if(file_exists(INDEX_DIR . '/.env'))
        {
            $io->getErrorStyle()->error('.env file is exist!');
            return Command::INVALID;
        }

        $filesystem->dumpFile(INDEX_DIR . '/.env', $envContent);

        return Command::SUCCESS;
    }
}