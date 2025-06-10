<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
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

    #[Test]
    public function increment()
    {
            $counter = new Counter();
            $counter->increment();
            $this->assertEquals(1, $counter->getCount());

            $counter->increment();
            $this->assertEquals(2, $counter->getCount());
    }
}