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
    $max = 0;
    if ($a > $b) {
        $max = $a;
    } else {
        $max = $b;
    }
    $flag = true;
    while ($flag) {
        $max++;
        if ($max % $a == 0 and $max % $b == 0) {
            $flag = false;
            echo $max;
        }
    }
}