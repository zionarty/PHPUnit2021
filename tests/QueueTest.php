<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue;

        $this->assertEquals(0,$queue->getCount());
    }
    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue;

        $queue->push('Green');

        $this->assertEquals(1,$queue->getCount());
    }
    public function testAnItemIsRemoveFromTheQueue()
    {
        $queue = new Queue;

        $queue->push('Green');

        $item = $queue->pop();

        $this->assertEquals(0,$queue->getCount());

        $this->assertEquals('Green',$item);
    }
}