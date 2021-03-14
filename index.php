<form action="" method="get">
    <input type="text" name="text"> <br>
    <input type="text" name="text2"> <br>
    <input type="submit">
</form>
<?php
function delitel($num)
{
    $del = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $del[] = $i;
        }
    }
    return $del;
}
if (isset($_REQUEST['text']) && $_REQUEST['text2']) {
    $a = $_REQUEST['text'];
    $b = $_REQUEST['text2'];
    $delA = delitel($a);
    $delB = delitel($b);
    $del = array_intersect($delA, $delB);
    echo max($del);
}