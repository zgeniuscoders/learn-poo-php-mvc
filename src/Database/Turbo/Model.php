<?php

namespace ZFramework\Database\Turbo;

abstract class Model extends Builder
{
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [];

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [];


    /**
     * @var string
     */
    protected string $table;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * Indicates if the model exists.
     *
     * @var bool
     */
    public $exists = false;

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
