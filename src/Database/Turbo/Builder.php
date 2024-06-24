<?php

namespace ZFramework\Database\Turbo;

use ZFramework\Database\Turbo\Query\QueryBuilder;

class Builder
{

    protected string $table;

    public function __construct(private QueryBuilder $query)
    {
    }

    /**
     * Retrieve all data
     */
    public function select()
    {
        $stmt = $this->query->getConnector()->query("SELECT * FROM users");
        return $data = $stmt->fetchAll();
    }
}
