<?php

namespace modules\PostgreSQL;

use interfaces\BuilderInterface;

class PostgreBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данных";
    }
} 