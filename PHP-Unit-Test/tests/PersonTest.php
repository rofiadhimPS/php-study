<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Alice");
        $this->assertEquals("Hello Bob, my name is Alice.", $person->sayHello("Bob"));
    }

    public function testException()
    {
        $person = new Person("Alice");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
        
    }

    public function testOutput()
    {
        $person = new Person("Alice");
        $this->expectOutputString("Goodbye Bob" . PHP_EOL);
        $person->sayGoodbye("Bob");
    }
}