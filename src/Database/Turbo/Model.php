<?php

namespace ZFramework\Database\Turbo;

use PDO;
use ZFramework\App;

abstract class Model
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


    private $connexion;

    public function __construct()
    {
        $this->connexion = $this->queryBuilder()->getDB();
    }

    private function queryBuilder(): Builder
    {
        $app = new App();
        $app->addDefinition("./config.php");
        $query = $app->getContainer()->get(Builder::class);
        return $query;
    }



    public function all()
    {
        // return $this->select();
        $stmt = $this->connexion->prepare("SELECT * FROM users");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->connexion]);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // protected function belongTo(string $model): BelongTo{

    // }
}
