<?php
namespace LeoGalleguillos\WebsiteTest;

use PHPUnit\Framework\TestCase;

class TableTestCase extends TestCase
{
    /**
     * @var string
     */
    protected $sqlDirectory = __DIR__ . '/../sql/';

    /**
     * @var string
     */
    protected $sqlDatabaseDirectory = __DIR__ . '/../sql/leogalle_test/';

    protected function setForeignKeyChecks0()
    {
        $sql     = file_get_contents(
            $this->sqlDirectory . 'SetForeignKeyChecks0.sql'
        );
        $result = $this->adapter->query($sql)->execute();
    }

    protected function setForeignKeyChecks1()
    {
        $sql     = file_get_contents(
            $this->sqlDirectory . 'SetForeignKeyChecks1.sql'
        );
        $result = $this->adapter->query($sql)->execute();
    }
}