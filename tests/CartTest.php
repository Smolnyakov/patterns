<?php

use app\models\repositories\CartRepository;


class CartTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider cartProvider
     */
    public function testCart($expected, $value) {
        $cart = (new CartRepository())->getCart("ncetgdu8n1pl5emdqd3mo7t1gj449bk2");
        $this->assertSame($expected, $value);
    }

    public function cartProvider()
    {
        return [
            'id'  => [25, $cart->cart_id],
            'product_id' => [3, $cart->product_id]
        ];
    }
}