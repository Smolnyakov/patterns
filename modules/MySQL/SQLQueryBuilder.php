<?php

namespace modules\SQL;

use interfaces\BuilderInterface;

class SQLQueryBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов в базу данных";
    }
} 