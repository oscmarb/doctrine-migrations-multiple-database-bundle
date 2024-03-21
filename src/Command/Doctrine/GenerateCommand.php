<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\GenerateCommand as DoctrineGenerateCommand;

class GenerateCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineGenerateCommand::class;
    }
}
