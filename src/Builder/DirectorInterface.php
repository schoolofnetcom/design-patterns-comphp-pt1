<?php

namespace SON\Db\Builder;

interface DirectorInterface
{
    public function __construct(BuilderInterface $builder = null);
    public function getSqlAll() :string;
}
