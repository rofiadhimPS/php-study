<?php

namespace App\Test;

use PHPUnit\Event\Runtime\PHP;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

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
    }