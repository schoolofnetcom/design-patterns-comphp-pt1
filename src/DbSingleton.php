<?php

namespace SON\Db;

use SON\Db\Builder\DirectorInterface;

class DbSingleton
{
    protected static $instance;
    protected static $config;

    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    public static function configure(array $config)
    {
        self::$config = $config;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            $dsn = self::$config['dsn'] ?? '';
            $user = self::$config['user'] ?? '';
            $passwd = self::$config['passwd'] ?? '';
            $options = self::$config['options'] ?? [];

            $pdo = new \PDO($dsn, $user, $passwd, $options);
            self::$instance = new Db($pdo);
        }
        return self::$instance;
    }
}
