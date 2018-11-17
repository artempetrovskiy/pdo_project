<?php

require_once "..\\vendor\\autoload.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class PDOTest extends TestCase
{
    use TestCaseTrait;

    /**
     * @return PHPUnit\DbUnit\Database\Connection
     */
    public function getConnection()
    {
        $pdo = new PDO('mysql:dbname=todos; host=127.0.0.1', 'root', '');

        var_dump($pdo);

        return $this->createDefaultDBConnection($pdo, ':memory:');


    }

    /**
     * @return PHPUnit\DbUnit\DataSet\IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/todos-seed.xml');
    }

    public function test()
    {


        $this->assertTrue(true);
    }
}