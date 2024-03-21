<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\UpToDateCommand as DoctrineUpToDateCommand;

class UpToDateCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineUpToDateCommand::class;
    }
}
