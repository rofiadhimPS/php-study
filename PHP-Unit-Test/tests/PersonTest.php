<?php

namespace App\Test;

use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class PersonTest extends TestCase
{
    private Person $person;
    protected function setUp(): void
    {
        // $this->person = new Person("Alice");
    }

    #[Before()]
    public function createPerson()
    {
        $this->person = new Person("Alice");
    }
    public function testSuccess()
    {
        $this->assertEquals("Hello Bob, my name is Alice.", $this->person->sayHello("Bob"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput()
    {
        $person = new Person("Alice");
        $this->expectOutputString("Goodbye Bob" . PHP_EOL);
        $person->sayGoodbye("Bob");
    }
}