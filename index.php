<?php
require_once 'Arr.php';

echo (new Arr([1,5,6]))->getSum() + (new Arr([5,15,1]))->getSum();