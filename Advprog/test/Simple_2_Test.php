<?php
require_once __DIR__ . '/../src/Simple_2.php';

class Simple_2_Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Simple_2();
        $simple2->setName('April');
        $this->assertEquals($simple2->getName(), 'April');
    }

    public function testGetAge()
    {
        $simple2 = new Simple_2();
        $simple2->setAge(22);
        $this->assertEquals($simple2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $simple2 = new Simple_2();
        $simple2->setFaveColor('Green');
        $this->assertEquals($simple2->getFaveColor(), 'Green');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simple_2();
        $simple2 ->setName('April');
        $this->assertIsString($simple2->getName(), 'April');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simple_2();
        $simple2->setAge(20);
        $this->assertIsInt($simple2->getAge(), 20);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simple_2();
        $simple2->setAge(20);
        $this->assertIsNumeric($simple2->getAge(), 20);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simple_2();
        $simple2->setFaveColor('Green');
        $this->assertIsString($simple2->getFaveColor(), 'Green');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simple_2();
        $simple2->setTogetherInput('April', 20, 'Green');
        $this->assertEquals($simple2->getTogetherInput(), 'April', 20, 'Green');
    }

}