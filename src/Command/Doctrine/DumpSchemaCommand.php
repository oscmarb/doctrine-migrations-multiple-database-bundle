<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand as DoctrineDumpSchemaCommand;

class DumpSchemaCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineDumpSchemaCommand::class;
    }
}
