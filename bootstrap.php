<?php

require __DIR__.'/vendor/autoload.php';

$builder = new SON\Db\Builder\MySqlBuilder;
$director = new SON\Db\Builder\UsersDirector($builder);

$config = [
    'dsn'=>'mysql:host=localhost;dbname=laravel_angular2',
    'user'=>'root',
    'passwd'=>'1234'
];

SON\Db\DbSingleton::configure($config);
