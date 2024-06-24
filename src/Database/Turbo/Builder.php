<?php

namespace ZFramework\Database\Turbo;

use PDO;
use ZFramework\Database\Turbo\Query\QueryBuilder;

class Builder
{

    protected string $table;

    /**
     * @var QueryBuilder
     */
    public function __construct(private QueryBuilder $query)
    {
    }

    /**
     * Retrieve all data
     */
    public function select()
    {
        $stmt = $this->query->getConnector()->prepare("SELECT * FROM users");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->query]);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
