<?php

namespace App;

class Products
{
    private string $product;
    private int $quantity;
    private float $price;

    public function __construct(string $product, int $quantity, float $price)
    {

        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}