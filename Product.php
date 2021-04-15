<?php


class Product
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
$product1 = new Product('Телевизор', 1000);
$product2 = $product1;
echo $product2->name;