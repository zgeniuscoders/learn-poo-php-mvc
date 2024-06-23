<?php

namespace ZFramework\Database\Turbo\Connectors;

use PDO;

interface ConnectorInterface
{
    public function connect(array $congif): PDO;
}
