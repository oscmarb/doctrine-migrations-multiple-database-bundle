<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase;

use Symfony\Component\HttpKernel\Bundle\Bundle;
final class DoctrineMigrationsMultipleDatabaseBundle extends Bundle
{
    public function getParent(): string
    {
        return 'DoctrineMigrationsBundle';
    }
}
