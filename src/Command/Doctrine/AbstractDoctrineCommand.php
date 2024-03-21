<?php

namespace Oscmarb\Bundle\MigrationsMultipleDatabase\Command\Doctrine;

use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Tools\Console\Command\DoctrineCommand;
use Oscmarb\Bundle\MigrationsMultipleDatabase\DependencyInjection\Configuration\Configuration;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractDoctrineCommand extends Command
{
    public const SUCCESS = 0;

    /**
     * @var Configuration
     */
    private $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;

        parent::__construct();
    }

    /**
     * @return class-string<DoctrineCommand>
     */
    abstract protected function commandClass(): string;

    protected function configure(): void
    {
        $this->setDefinition($this->createDoctrineCommand()->getDefinition());
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rawNewInput = array_merge($input->getArguments(), $input->getOptions());
        unset($rawNewInput['em']);

        $newInput = new ArrayInput($rawNewInput);
        $newInput->setInteractive($input->isInteractive());

        $em = $input->getOption('em');

        if (false === is_string($em) && null !== $em) {
            throw new \RuntimeException('invalid em option value');
        }

        foreach ($this->getDependencyFactories($em) as $dependencyFactory) {
            $doctrineCommand = $this->createDoctrineCommand($dependencyFactory);
            $doctrineCommand->run($input, $output);
        }

        return self::SUCCESS;
    }

    /**
     * @return DependencyFactory[]
     *
     * @throws \RuntimeException
     */
    private function getDependencyFactories(string $entityManager = null): array
    {
        $dependencyFactories = [];

        if (null === $entityManager || '' === $entityManager) {
            $dependencyFactories = $this->configuration->getDependencyFactories();
        } elseif (null !== $this->configuration->getConfigurationByEntityManagerName($entityManager)) {
            $dependencyFactories = [$this->configuration->getConfigurationByEntityManagerName($entityManager)];
        }

        if (0 === count($dependencyFactories)) {
            throw new \RuntimeException('No entity manager found');
        }

        return $dependencyFactories;
    }

    private function createDoctrineCommand(DependencyFactory $dependencyFactory = null): DoctrineCommand
    {
        return new ($this->commandClass())($dependencyFactory);
    }
}