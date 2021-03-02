<?php
$result = [];
for ($i = 1; $i <= 10; $i++) {
    $result[] = $i;
    shuffle($result);
}
var_dump($result);
?>

