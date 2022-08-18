<?php

namespace modules\SQL;

use interfaces\ConnectInterface;

class SQLConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данных";
    }
} 