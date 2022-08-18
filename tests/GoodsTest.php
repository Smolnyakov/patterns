<?php

class GoodsTest extends PHPUnit\Framework\TestCase
{
    public function testGoodsConstructor() {
        $name = "Чай";
        $product = new \app\models\entities\Goods($name);
        $this->assertEquals($name, $goods->name);
    }
}