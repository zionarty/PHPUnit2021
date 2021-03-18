<?php
#test function
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddResultTheCorrectSum()
    {
        require '/Users/Maneerat/Desktop/PHPUnitCourse/codes/Function.php';
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(5, 3));
    }
    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5,add(2,2));
    }
}
