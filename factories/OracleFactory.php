<?php

namespace factories;

use interfaces\{DBFactoryInterface, ConnectInterface, InsertInterface, BuilderInterface};
use modules\Oracle\{OracleConnect, OracleInsert, OracleBuilder};

class OracleFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new OracleConnect();
    }

    public function getInsert(): InsertInterface
    {
        return new OracleInsert();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new OracleBuilder();
    }
}