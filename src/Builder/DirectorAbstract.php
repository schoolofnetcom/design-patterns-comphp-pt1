<?php

namespace SON\Db\Builder;

abstract class DirectorAbstract implements DirectorInterface
{
    protected $builder;
    protected $table;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
        $this->setTableName();
    }

    public function getSqlAll() :string
    {
        $this->builder->setTable($this->table);
        return $this->builder->getSqlAll();
    }

    protected function setTableName()
    {
        if ($this->table === null) {
            $table = explode('\\', get_called_class());
            $table = array_pop($table);

            $this->table = strtolower($table);
        }
    }
}
