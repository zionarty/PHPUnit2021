<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    protected function tearDown(): void
    {
        unset($this->queue);
    }
    public function testNewQueueIsEmpty()
    {

        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {

        $this->queue->push('Green');

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsRemoveFromTheQueue()
    {
        $this->queue->push('Green');

        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('Green', $item);
    }
}
