<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\StatusCommand as DoctrineStatusCommand;

class StatusCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineStatusCommand::class;
    }
}
