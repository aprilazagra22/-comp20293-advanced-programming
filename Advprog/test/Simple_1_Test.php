<?php
require_once __DIR__ . '/../src/Simple_1.php';

class Simple_1_Test extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $simple = new Simple_1 (12);
        $result = $simple->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $simple = new Simple_1 (6);
        $result = $simple->modulus(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $simple = new Simple_1 (6);
        $result = $simple->modulus('M');
    }

    public function testModulus1()
    {
        $simple = new Simple_1 (17);
        $result = $simple->modulus(2);

        $this->assertEquals(1, $result);
    }

    public function testModulus2()
    {
        $simple = new Simple_1 (60);
        $result = $simple->modulus(10);

        $this->assertEquals(0, $result);
    }

}