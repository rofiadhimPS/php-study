<?php

namespace App\Test;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function register(Product $product): Product
    {
        if($this->repository->findById($product->getId()) != null) {
            throw new \Exception("Product already exists");
        }

        $savedProduct = $this->repository->save($product);
        // if ($savedProduct === null) {
        //     throw new \Exception("Failed to save product");
        // }
        
        return $savedProduct;
        
    }

    public  function delete(string $id): void
    {
        $product = $this->repository->findById($id);
        if ($product === null) {
            throw new \Exception("Product not found");
        }
        
        $this->repository->delete($product);

    }
} 