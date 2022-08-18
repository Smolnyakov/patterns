<?php

namespace modules\Oracle;

use interfaces\InsertInterface;

class OracleInsert implements InsertInterface
{
    public function save()
    {
        echo "Запись таблицы в базу данных";
    }
} 