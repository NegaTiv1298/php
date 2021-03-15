<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
if (isset($_GET['get']) and isset($arr[$_GET['get']])) {
    echo $arr[$_GET['get']];
    echo '<br>';
}
foreach ($arr as $key => $elem) {
    echo "<a href=\"?get=$key\">link $elem</a> ";
}
?>
