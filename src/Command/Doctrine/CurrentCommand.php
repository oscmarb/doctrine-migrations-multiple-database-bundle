<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\CurrentCommand as DoctrineCurrentCommand;

class CurrentCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineCurrentCommand::class;
    }
}
