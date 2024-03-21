<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\RollupCommand as DoctrineRollupCommand;

class RollupCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineRollupCommand::class;
    }
}
