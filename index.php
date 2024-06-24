<?php

use App\Models\User;
use DI\ContainerBuilder;

include "./vendor/autoload.php";
include "./config.php";

$builder = new ContainerBuilder();
$builder->addDefinitions("./config.php");
$container = $builder->build();

$user = $container->get(User::class);

var_dump($user->all());