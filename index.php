<?php

use DI\Container;

use App\Models\User;
use DI\ContainerBuilder;
use ZFramework\App;

include "./vendor/autoload.php";
include "./config.php";

// $builder = new ContainerBuilder();
// $builder->addDefinitions("./config.php");
// $container = $builder->build();

// $user = $container->get(User::class);

// $user = new User(new QueryBuilder(new MySqlConnector(), [
//     "dsn" => "host=127.0.0.1;dbname=zf",
//     "config" => ["username" => "root", "password" => ""],
//     "options" => []
// ]));

// $app = new App("./config.php");


$app = new App();
$app->addDefinition("./config.php");
$app->getContainer();

$user = new User();

// echo "<pre>";
// var_dump($user->all());
// echo "</pre>";
foreach ($user->all() as $u) {
    echo $u->email;
}
