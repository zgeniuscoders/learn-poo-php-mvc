<?php

namespace ZFramework\Database\Connectors;

use PDO;

interface ConnectorInterface
{
    public function connect(array $congif): PDO;
}
