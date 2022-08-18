<?php

namespace modules\PostgreSQL;

use interfaces\ConnectInterface;

class PostgreConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базу данных";
    }
} 