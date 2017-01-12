<?php

namespace SON\Db;

class DbTest extends \PHPUnit_Framework_TestCase
{
    public function testTestarSeAClasseEstaInstanciando()
    {
        $db = new Db;

        $this->assertInstanceOf('SON\Db\Db', $db);
    }
}
