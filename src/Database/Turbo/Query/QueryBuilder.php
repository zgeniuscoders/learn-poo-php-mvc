<?php

namespace ZFramework\Database\Turbo\Query;

use ZFramework\Database\Connectors\ConnectorInterface;

abstract class QueryBuilder
{
    public function __construct(private ConnectorInterface $connectorInterface, private array $config)
    {
    }

    public function getConnector()
    {
        return $this->connectorInterface->connect($this->config);
    }
}
