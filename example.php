<?php

require __DIR__.'/vendor/autoload.php';

$builder = new SON\Db\Builder\MySqlBuilder;
$director = new SON\Db\Builder\UsersDirector($builder);

/*$sql = $director->getSqlAll();

$banks = new App\Model\Banks($builder);

$sql = $banks->getSqlAll();

var_dump($sql);

$pdo = new \PDO('mysql:host=localhost;dbname=laravel_angular2', 'root', '1234');

$db = new SON\Db\Db($pdo);
$db->setDirector($director);

$data = $db->getAll()
    ->execute();
*/

$config = [
    'dsn'=>'mysql:host=localhost;dbname=laravel_angular2',
    'user'=>'root',
    'passwd'=>'1234'
];

SON\Db\DbSingleton::configure($config);
$db = SON\Db\DbSingleton::getInstance();
$db->setDirector($director);

$data = $db->getAll()
    ->execute();

var_dump($data->fetchAll());
