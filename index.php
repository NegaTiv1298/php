<?php
require_once 'Product.php';
require_once 'AvgHelper.php';
require_once 'SumHelper.php';
require_once 'Cart.php';

//$phone = new Product('Телефон', 100, 3);
//$tv = new Product('Телевизор', 900, 2);

$cart = new Cart;
$cart->add(new Product('Телефон', 100, 3));
$cart->add(new Product('Телевизор', 900, 2));
echo $cart->getTotalCost();
echo $cart->getTotalQuantity();
echo $cart->getAvgPrice();