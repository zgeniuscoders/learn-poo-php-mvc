<?php

use DI\Container;

use App\Models\User;
use DI\ContainerBuilder;
use ZFramework\Database\Turbo\Query\QueryBuilder;
use ZFramework\Database\Connectors\MySqlConnector;

include "./vendor/autoload.php";
include "./config.php";

$builder = new ContainerBuilder();
$builder->addDefinitions("./config.php");
$container = $builder->build();

$user = $container->get(User::class);

// $user = new User(new QueryBuilder(new MySqlConnector(), [
//     "dsn" => "host=127.0.0.1;dbname=zf",
//     "config" => ["username" => "root", "password" => ""],
//     "options" => []
// ]));

foreach($user->all() as $u){
    echo $u->id;
}