<?php

namespace factories;

use interfaces\{DBFactoryInterface, ConnectInterface, InsertInterface, BuilderInterface};
use modules\PostgreSQL\{PostgreConnect, PostgreInsert, PostgreBuilder};

class PostgreFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new PostgreConnect();
    }

    public function getInsert(): InsertInterface
    {
        return new PostgreInsert();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new PostgreBuilder();
    }
} 