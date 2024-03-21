<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\VersionCommand as DoctrineVersionCommand;

class VersionCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineVersionCommand::class;
    }
}
