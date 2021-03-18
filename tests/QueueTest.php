<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue;

        $this->assertEquals(0,$queue->getCount());

        return $queue;
    }
    /**
     * @depends testNewQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        #$queue = new Queue;

        $queue->push('Green');

        $this->assertEquals(1,$queue->getCount());

        return $queue;
    }
    /**
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemoveFromTheQueue(Queue $queue)
    {
        #$queue = new Queue;

        #$queue->push('Green');

        $item = $queue->pop();

        $this->assertEquals(0,$queue->getCount());

        $this->assertEquals('Green',$item);
    }
}