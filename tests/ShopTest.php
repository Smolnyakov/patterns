<?php

// для запуска в терминале:
// vendor/bin/phpinput tests/имя файла --testdox --colors
// для запуска всех тестов:
// vendor/bin/phpinput tests --testdox --colors

// если прописано в composer.jsonб то для запуска:
// composer test --testdox --colors

class ShopTest extends PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $x = 1;
        $y = 2;
        $this->assertEquals(3, $x + $y );
    }
    public function testSub()
    {
        $x = 5;
        $y = 2;
        $this->assertEquals(3, $x - $y);
    }

}