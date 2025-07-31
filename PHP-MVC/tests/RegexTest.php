<?php

namespace Rofiadhim\Study\PHP\MVC;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testPathRegex()
    {
        $path = '/products/12345/categories/abcde';
        $pattern = '#^/products/([0-9a-zA-Z]*)/categories/([a-zA-Z0-9]*)$#';

        $result = preg_match($pattern, $path, $matches);

        self::assertTrue($result===1);
        var_dump($matches);
    }
}