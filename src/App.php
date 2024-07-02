<?php

namespace ZFramework;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

class App
{

    /**
     * @var ContainerInterface
     */
    private ?ContainerInterface $container = null;

    /**
     * @var string
     */
    private string $configPath;


    /**
     * @var string $configPath
     */
    public function addDefinition(string $configPath)
    {
        $this->configPath = $configPath;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface
    {
        if ($this->container == null) {
            $this->loadContainer();
        }

        return $this->container;
    }

    private function loadContainer()
    {
        $builder = new ContainerBuilder();
        $builder->useAutowiring(true);
        $builder->addDefinitions($this->configPath);
        $this->container = $builder->build();
    }
}
