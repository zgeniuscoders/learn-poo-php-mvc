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

    }

    public function find(string $id)
    {
        
    }

    public function update(string $id, array $data)
    {
    }

    public function delete(string $id)
    {
    }

    public function where($column, $operator = null, $value = null, $boolean = 'and')
    {
    }

    public function whereAnd()
    {
    }

    public function whereOr($column, $operator = null, $value = null)
    {
    }

    public function whereNot($column, $operator = null, $value = null, $boolean = 'and')
    {
    }

    public function getConnexion(): PDO
    {
        return $this->query->getConnector();
    }
}
