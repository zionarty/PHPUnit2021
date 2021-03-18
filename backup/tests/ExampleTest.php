<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testAddingTwoPlusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testTrueisTrue()
    {
        return $this->assertTrue(true,true);
    }

}
