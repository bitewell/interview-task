<?php

use Interview\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    protected Task $task;

    protected function setUp(): void
    {
        $this->task = new Task();
    }

    /**
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}