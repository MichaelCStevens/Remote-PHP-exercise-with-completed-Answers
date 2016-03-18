<?php
//i dont have php unit installed on this machine so i could not test this :(
class MathTest extends PHPUnit_Framework_TestCase
{

 
    public function testCanBeAdded()
    {
        $math=new Math(10);
        $a = $math->add(10);
        $this->assertEquals(20, $a);
    }
    public function testCanBeSubtracted()
    {
        $math=new Math(10);
        $a = $math->subtract(10);
        $this->assertEquals(0, $a);
    }
    public function testCanBeMultiplied()
    {
        $math=new Math(10);
        $a = $math->multiply(10);
        $this->assertEquals(100, $a);
    }
    public function testCanBeDivided()
    {
        $math=new Math(10);
        $a = $math->divide(2);
        $this->assertEquals(5, $a);
    }
    public function testCanBeDoubled()
    {
        $math=new Math(10);
        $a = $math->getDouble(10);
        $this->assertEquals(20, $a);
    }
    public function testCanGetHalf()
    {
        $math=new Math(10);
        $a = $math->add(10);
        $this->assertEquals(20, $a);
    }

}