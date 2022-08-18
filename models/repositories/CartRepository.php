<?php

namespace app\models\repositories;

use app\engine\App;
use app\models\entities\Cart;
use app\models\Repository;

class CartRepository extends Repository
{
    public static function getCart($session_id) {
        $sql = "SELECT  cart.id as cart_id, 
                        goods.id as prod_id, 
                        goods.product_name, 
                        goods.description, 
                        goods.price 
                FROM `cart`,`goods` 
                WHERE `session_id` = :session_id 
                AND cart.product_id = goods.id";

        return App::call()->db->queryAll($sql, ['session_id' => $session_id]);
    }

    protected function getEntityClass() {
        return Cart::class;
    }

    public function getTableName()
    {
        return 'cart';
    }
}