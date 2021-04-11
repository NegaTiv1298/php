<?php
require_once 'User.php';

$user = new User('Дима', 24);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}(). $user->{$methods['method2']}();