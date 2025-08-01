<?php

namespace Rofiadhim\Study\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}