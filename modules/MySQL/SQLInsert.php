<?php

namespace modules\SQL;

use interfaces\InsertInterface;

class SQLInsert implements InsertInterface
{
    public function save()
    {
        echo "Запись таблицы в базу данных";
    }
} 