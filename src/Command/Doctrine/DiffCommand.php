<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\DiffCommand as DoctrineDiffCommand;

class DiffCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineDiffCommand::class;
    }
}
