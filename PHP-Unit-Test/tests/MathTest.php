<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;

class MathTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(6, Math::sum([1, 2, 3]));
        $this->assertEquals(0, Math::sum([]));
    }

    #[DataProvider('mathSumData')]
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }

    public static function mathSumData(): array
    {
        return [
            [[1, 2, 3], 6],
            [[-1, -2, -3], -6],
            [[0, 0, 0], 0],
            [[10, 20], 30],
            [[], 0],
        ];
    }

    #[TestWith([[1, 2, 3], 6])]
    #[TestWith([[-1, -2, -3], -6])]
    #[TestWith([[0, 0, 0], 0])]
    #[TestWith([[10, 20], 30])]
    #[TestWith([[], 0])]
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}