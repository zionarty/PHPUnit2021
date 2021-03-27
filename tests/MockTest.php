<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        //$mailler = new Mailler;
        $mock = $this->createMock(Mailler::class);

        $mock->method('sendMessage')
            ->willReturn(true);

        //$result = $mailler->sendMessage('siona@gmail.com','Hello');
        $result = $mock->sendMessage('siona@gmail.com', 'Hello');

        //var_dump($result);
        $this->assertTrue($result);
    }
}
