<?php

namespace factories;

use interfaces\{DBFactoryInterface, ConnectInterface, InsertInterface, BuilderInterface};
use modules\SQL\{SQLConnect, SQLInsert, SQLQueryBuilder};

class SQLFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new SQLConnect();
    }

    public function getInsert(): InsertInterface
    {
        return new SQLInsert();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new SQLQueryBuilder();
    }
} 