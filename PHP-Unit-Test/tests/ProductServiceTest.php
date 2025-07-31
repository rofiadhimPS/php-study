<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class); 
        $this->service = new ProductService($this->repository);   
    }

    public function testStub()
    {
        $product = new Product();
        $product->setId('1');
         
        $this->repository->method('findById')
            ->willReturn($product);
            
        $result = $this->repository->findById('1');
        // var_dump($result);
        $this->assertSame($product, $result, 'The product should be the same as the stubbed one');
    }

    public function testStubMap()
    {
        $product1 = new Product();
        $product1->setId('1');

        $product2 = new Product();  
        $product2->setId('2'); 

        $map = [
            ['1', $product1],
            ['2', $product2],
        ];

        $this->repository->method('findById')
            ->willReturnMap($map);

        self::assertSame($product1, $this->repository->findById('1'), 'The product should be the same as the stubbed one');
        self::assertSame($product2, $this->repository->findById('2'), 'The product should be the same as the stubbed one');
    }

    public function testStubCallback()
    {
        $this->repository->method('findById')
            ->willReturnCallback(function ($id) {
                $product = new Product();
                $product->setId($id);
                return $product;
            });
        
        self::assertSame('1', $this->repository->findById('1')->getId(), 'The product ID should be 1');
        self::assertSame('2', $this->repository->findById('2')->getId(), 'The product ID should be 2');     
        self::assertSame('3', $this->repository->findById('3')->getId(), 'The product ID should be 3'); 
    }

    public function testRegisterSuccess()
    {
        $this->repository->method('findById')
            ->willReturn(null);
        $this->repository->method('save')
            ->willReturnArgument(0);
        
        $product = new Product();
        $product->setId('1');
        $product->setName('Test Product');

        $result = $this->service->register($product);
        self::assertEquals($product->getId(), $result->getId(), 'The product ID should match the registered product ID');
        self::assertEquals($product->getName(), $result->getName(), 'The product name should match the registered product name');
    }

    public function testRegisterException()
    {
        $this->expectException(\Exception::class);

        $productInDB = new Product();
        $productInDB->setId('1');

        $this->repository->method('findById')->willReturn($productInDB);

        $product = new Product();
        $product->setId('1');

        $this->service->register($product);
        // This line should not be reached, as an exception is expected
    }

    
}
