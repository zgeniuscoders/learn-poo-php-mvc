<?php

namespace ZFramework\Database\Turbo\Query;

use ZFramework\Database\Turbo\Connectors\ConnectorInterface;

class QueryBuilder
{
    public function __construct(private ConnectorInterface $connectorInterface, private array $config)
    {
    }

    public function getConnector()
    {
        return $this->connectorInterface->connect($this->config);
    }
}
