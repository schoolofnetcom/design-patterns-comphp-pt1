<?php

namespace SON\Db;

use SON\Db\Builder\BuilderInterface;
use SON\Db\Builder\DirectorAbstract;

abstract class ModelAbstract extends DirectorAbstract
{
    protected $db;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->db = \SON\Db\DbSingleton::getInstance();
        $driver = $this->db->getPdo()
            ->getAttribute(\PDO::ATTR_DRIVER_NAME);

        if ($driver == 'mysql') {
            $builder = new Builder\MySqlBuilder;
        } else {
            $builder = new Builder\SqlBuilder;
        }
        parent::__construct($builder);

        $this->db->setDirector($this);
    }

    public function getAll()
    {
        return $this->db->getAll()
            ->execute();
    }
}
