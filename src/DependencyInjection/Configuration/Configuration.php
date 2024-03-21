<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\DependencyInjection\Configuration;

use Doctrine\Migrations\DependencyFactory;

class Configuration
{
    /** @var array<string, DependencyFactory> */
    private $dependencyFactories = [];

    public function addDependencyFactory(string $name, DependencyFactory $entityManager): self
    {
        $this->dependencyFactories[$name] = $entityManager;

        return $this;
    }

    /**
     * @return DependencyFactory[]
     */
    public function getDependencyFactories(): array
    {
        return $this->dependencyFactories;
    }

    public function getConfigurationByEntityManagerName(string $name): ?DependencyFactory
    {
        return $this->dependencyFactories[$name] ?? null;
    }
}
