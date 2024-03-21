<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\MigrateCommand as DoctrineMigrateCommand;

class MigrateCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineMigrateCommand::class;
    }
}
