<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
if (isset($_GET['get']) and isset($arr[$_GET['get']])) {
    echo $arr[$_GET['get']];
    echo '<br>';
}
?>
<a href="?get=0">link 0</a>
<a href="?get=1">link 1</a>
<a href="?get=2">link 2</a>
<a href="?get=3">link 3</a>
<a href="?get=4">link 4</a>

