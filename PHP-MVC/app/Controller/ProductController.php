<?php

namespace Rofiadhim\Study\PHP\MVC\Controller;

class ProductController
{
    public function categories(string $productId, string $categoryid): void
    {
        // Simulate fetching product categories based on productId and categoryid
        echo "Product ID: $productId, Category ID: $categoryid";
    }
}