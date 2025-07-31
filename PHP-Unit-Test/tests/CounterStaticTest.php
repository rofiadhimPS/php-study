<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
        echo "Create Static Counter" . PHP_EOL;   
    }

    public function testFirst()
    {
        self::$counter->increment();
        $this->assertEquals(1, self::$counter->getCount());
        return self::$counter;
    }

    public function testSecond()
    {
        self::$counter->increment();
        $this->assertEquals(2, self::$counter->getCount());
        return self::$counter;
    }

    public static function tearDownAfterClass(): void
    {
        echo "Unit Test Finish" . PHP_EOL;
    }
}