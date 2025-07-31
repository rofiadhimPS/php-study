<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\After;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\RequiresOperatingSystemFamily;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Create Counter" . PHP_EOL;
    }

    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCount());
        self::markTestIncomplete('This test is incomplete and needs to be implemented.');
    }
    public function testCounter()
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCount());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCount());

        $this->counter->increment();
        self::assertSame(3, $this->counter->getCount());

    }

    #[Test]
    public function increment()
    {
        self::markTestSkipped("This test is skipped for demonstration purposes.");
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCount());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCount());
        return $this->counter;
    }

    #[Depends('testFirst')]
    public function testSecond(Counter $counter):void
    {
        $counter->increment();
        Assert::assertEquals(2, $counter->getCount());
    }

    public function tearDown(): void
    {
        echo "Tear Down" . PHP_EOL;
    }

    #[After()]
    public function after(): void
    {
        echo "After" . PHP_EOL;
    }

    #[RequiresOperatingSystemFamily('darwin')]
    public function testOnlyMac()
    {
        self::assertTrue(true, 'This test is only for Mac');
    }
}