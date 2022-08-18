<?php
class MathClass{
    public function factorial($n){
        if ($n == 0)
            return 1;
        else
            return $n * $this->factorial($n - 1);
    }
}

class ManualTests extends PHPUnit\Framework\TestCase {
    
}

class MySuite extends PHPUnit_Framework_TestSuite {
    protected $sharedFixture;
    
    public function testFactorial()
    {
        $my = new MathClass();
        $this->assertEquals(6, $my->factorial(3));
    }

    public static function suite()
    {
        $suite = new MySuite('MyTestSuite');
        $suite->addTestSuite('MathClassTest');
        return $suite;
    }

    protected function setUp()
    {
        $this->sharedFixture = new MyClass();
    }

    protected function tearDown()
    {
        $this->sharedFixture = NULL;
    }
}
    