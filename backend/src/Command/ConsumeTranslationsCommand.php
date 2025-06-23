<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\Command\ConsumeMessagesCommand;
use Symfony\Component\Console\Input\ArrayInput;

#[AsCommand(name: 'app:consume-translations')]
class ConsumeTranslationsCommand extends Command
{
    public function __construct(private ConsumeMessagesCommand $consumeCommand)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = new ArrayInput([
            'receivers' => ['async'],
            '--limit' => 100,
            '--time-limit' => 300
        ]);

        return $this->consumeCommand->run($input, $output);
    }
}
