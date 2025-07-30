<?php

namespace App\Test;

class Math {
    public static function sum(array $values): int
    {
        $sum = 0;
        foreach ($values as $value) {
            $sum += $value;
        }
        return $sum;
    }
}