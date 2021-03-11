<form action="" method="get">
    <input type="text" name="text"> <br>
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $a = $_REQUEST['text'];
    $arr = [];
    for ($i = 2; $i <= $a; $i++) {
        if (($a % $i) == 0) {
            $arr[] = $i;
            $a /= $i;
            $i--;
            if ($a < 2) break;
        }
    }
    echo implode('*', $arr);
}