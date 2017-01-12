<?php

namespace SON\Db\QueryBuilder;

class SqlTest extends \PHPUnit_Framework_TestCase
{
    public function testSelectQuery()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM users;', $query);
    }

    public function testSelectQueryComColunasEmFormatoTexto()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }

    public function testSelectQueryComColunasEmFormatoArray()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }
}
