<form action="" method="get">
    <input type="text" name="text" placeholder="Введите год">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $year = trim($_REQUEST['text']);
    $arr = explode('.', $year);
    $mtime = mktime(0,0, 0, $arr[1], $arr[0], $arr[2]);
    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    $day = date('w', $mtime);
    echo $week[$day];
}