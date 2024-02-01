<?php

namespace App\Cli\Console;

use App\Util\File;
use App\Uuid;

use Symfony\Component\Console\Output\OutputInterface;

class LoggableOutput
{
    public $output;

    private $buffer;
    private $commandName;
    private $outputStylePattern = '/\<(?:(?:fg|bg|options)=[a-z]+|(?:info|comment|question|error));?(?:[a-zA-Z;=]+)?\>/';

    public function __construct(string $commandName, OutputInterface $output)
    {
        $this->output = $output;
        $this->commandName = $commandName;
    }

    public function write($data)
    {
        $this->buffer .= $data;
        $this->output->write($data);
    }

    public function writeln($data)
    {
        $this->buffer .= $data . "\n";
        $this->output->writeln($data);
    }

    public function getBuffer()
    {
        return $this->buffer;
    }

    public function log()
    {
        $name = Uuid::v4();

        $file = new File();

        $data = preg_replace($this->outputStylePattern, '', $this->getBuffer());
        $data = preg_replace('/<\/(?:info|comment|question|error)?>/', '', $data);

        $file->dumpFile(APPLICATION_SELF . "/Logs/Console/{$name}.log", "Console query id: {$name}\nLog date:" . \date('Y-m-d H:i', \time()) . "\n\n" . "> {$this->commandName} update\n\n{$data}");
    }
}
