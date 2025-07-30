<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCount());

        $counter->increment();
        $this->assertEquals(2, $counter->getCount());

        $counter->increment();
        self::assertSame(3, $counter->getCount());

    }

    /**
     * @test
     */
    public function testIncrement()
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCount());
    }

    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCount());
        return $counter;
    }

    #[Depends('testFirst')]
    public function testSecond(Counter $counter):void
    {
        $counter->increment();
        Assert::assertEquals(2, $counter->getCount());
    }
}