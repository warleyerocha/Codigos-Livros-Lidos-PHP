<?php

class Product
{
    private $description;
    private $stock;
    private $price;

    public function __construct($description, $stock, $price)
    {
        if (is_string($description))
            $this->description = $description;

        if (is_numeric($stock) && $stock > 0)
            $this->stock = $stock;

        if (is_numeric($price) && $price > 0)
            $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$product = new Product("Descrição do produto", 10, 5);
echo "Descrição: " . $product->getDescription() . "<br>";
echo "Estoque: " . $product->getStock() . "<br>";
echo "Preço: " . $product->getPrice();

