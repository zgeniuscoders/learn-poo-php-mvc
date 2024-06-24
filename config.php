<?php

use ZFramework\Database\Connectors\MySqlConnector;
use ZFramework\Database\Turbo\Model;
use ZFramework\Database\Turbo\Query\QueryBuilder;

use function DI\create;
use function DI\get;

return [
    MySqlConnector::class => create(),
    QueryBuilder::class => create()->constructor(get(MySqlConnector::class), [
        "dsn" => "host=127.0.0.1;dbname=zf",
        "config" => ["username" => "root", "password" => ""],
        "options" => []
    ]),
    Model::class => create()->constructor(get(QueryBuilder::class))
];
