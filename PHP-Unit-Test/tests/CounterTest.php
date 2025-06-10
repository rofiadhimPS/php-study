<?php

namespace App\Test;

use PHPUnit\Event\Runtime\PHP;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();

        echo "Counter value after increment: " . $counter->getCount() . PHP_EOL;
    }

    public function testOther()
    {
        echo "This is another test method." . PHP_EOL;
    }
}