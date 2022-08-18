<?php

use factories\{MySQLFactory, OracleFactory, PostgreFactory};
use interfaces\DBFactoryInterface;

include "Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

class DB{

    public $connection;
    public $insert;
    public $builder;

    public function __construct(DBFactoryInterface $db)
    {
        $this->connection = $db->getConnection();
        $this->insert = $db->getInsert();
        $this->builder = $db->getQueryBuilder();
    }

}

$SqlDB = new DB(new SQLFactory());

$SqlDB->connection->link();
$SqlDB->insert->save();
$SqlDB->builder->select();