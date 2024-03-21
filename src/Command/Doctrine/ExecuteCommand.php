<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\ExecuteCommand as DoctrineExecuteCommand;

class ExecuteCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineExecuteCommand::class;
    }
}
