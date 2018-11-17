<?php

require_once "..\\vendor\\autoload.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;

class PDOTest extends TestCase
{
    use TestCaseTrait;

    /**
     * @return PHPUnit\DbUnit\Database\Connection
     */
    public function getConnection()
    {
        $pdo = new PDO('mysql:dbname=todos; host=127.0.0.1', 'root', '');

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
        $mock = $this->getMockBuilder(FileNotFoundException::class);

        $this->assertTrue(true);
    }
}