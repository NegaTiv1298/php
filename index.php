<?php
require_once 'Product.php';
require_once 'AvgHelper.php';
require_once 'SumHelper.php';
require_once 'Cart.php';

function compare1($obj1, $obj2)
{
    return $obj1 == $obj2;
}
function compare2($obj1, $obj2)
{
    return $obj1 === $obj2;
}
function compare3($obj1, $obj2)
{
    if ($obj1 === $obj2)
        return 1;
    if ($obj1 == $obj2)
        return 0;
    return -1;


}