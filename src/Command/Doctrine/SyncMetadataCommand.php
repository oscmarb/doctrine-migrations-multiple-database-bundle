<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand as DoctrineSyncMetadataCommand;

class SyncMetadataCommand extends AbstractDoctrineCommand
{
    protected function commandClass(): string
    {
        return DoctrineSyncMetadataCommand::class;
    }
}
