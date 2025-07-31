<?php

namespace App\Test;

interface ProductRepository
{
    public function findById(string $id): ?Product;

    public function save(Product $product): product;

    public function delete(?Product $product): void;

    public function findAll(): array;
}