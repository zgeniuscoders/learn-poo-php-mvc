<?php

namespace ZFramework\Database\Turbo;

abstract class Model extends Turbo
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
}
