<?php

namespace app\models\repositories;

use app\models\entities\Goods;
use app\models\Repository;

class GoodsRepository extends Repository
{

    protected function getEntityClass() {
        return Goods::class;
    }

    protected function getTableName()
    {
        return 'goods';
    }
}