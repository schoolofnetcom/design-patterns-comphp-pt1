<?php

namespace SON\Db;

use SON\Db\Builder\DirectorInterface;

class Db
{
    private $pdo;
    private $director;
    private $sql;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function setDirector(DirectorInterface $director)
    {
        $this->director = $director;
        return $this;
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function getAll()
    {
        $this->sql = $this->director->getSqlAll();
        return $this;
    }

    public function execute()
    {
        return $this->pdo->query($this->sql);
    }
}
