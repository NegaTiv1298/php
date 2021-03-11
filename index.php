<form action="" method="get">
    <input type="text" name="text"> <br>
    <input type="text" name="text2"> <br>
    <input type="submit">
</form>
<?php
function Delitel($num)
{
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
    $delA = Delitel($a);
    $delB = Delitel($b);
    echo implode(',', array_intersect($delA, $delB));
}