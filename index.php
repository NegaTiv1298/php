<form action="" method="get">
    <input type="text" name="text" placeholder="Введите год">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $year = trim($_REQUEST['text']);
    $arr = explode('.', $year);
    $mtime = mktime(0,0, 0, $arr[1], $arr[0], $arr[2]);
    $hb = $mtime - time();
    $result = date('z', $hb);
    echo $result;
}