<?php

namespace ZFramework\Database\Turbo\Connectors;

use PDO;


abstract class Connector
{
    protected $options = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => false,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * @return PDO
     */
    public function createPdoConnection(string $dsn, ?array $config = null, ?array $options = null): PDO
    {
        return new PDO($dsn, $config["username"] ?? null, $config["password"] ?? null, array_merge($this->options, $options));
    }

    public function getDsn(array $config): string|null
    {
        return $config["dsn"] ?? null;
    }

    public function getConfig(array $config): array|null
    {
        return $config["config"] ?? null;
    }

    public function getOptions(array $config): array|null
    {
        return $config["options"] ?? null;
    }
}