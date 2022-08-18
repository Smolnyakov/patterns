<?php

namespace modules\PostgreSQL;

use interfaces\InsertInterface;

class PostgreInsert implements InsertInterface
{
    public function save()
    {
        echo "Запись таблицы в базу данных";
    }
} 