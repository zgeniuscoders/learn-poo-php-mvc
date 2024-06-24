<?php

namespace ZFramework\Database\Connectors;

use PDO;

class MySqlConnector extends Connector implements ConnectorInterface
{
    public function connect(array $config): PDO
    {
        $dsn = $this->getDsn($config);
        $options = $this->getOptions($config);

        return $this->createPdoConnection("mysql:".$dsn, $this->getConfig($config), $options);
    }
}
