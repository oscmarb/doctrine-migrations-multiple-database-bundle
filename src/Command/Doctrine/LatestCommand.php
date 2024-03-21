<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\LatestCommand as DoctrineLatestCommand;

class LatestCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineLatestCommand::class;
    }
}
