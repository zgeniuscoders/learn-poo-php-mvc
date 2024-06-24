<?php


namespace ZFramework\Database\Turbo;

use ZFramework\Database\Turbo\Relations\BelongTo;

class Turbo extends Builder
{
    protected string $table;

    public function all()
    {
        return $this->select();
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

    // protected function belongTo(string $model): BelongTo{

    // }
}
