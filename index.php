<form action="" method="get">
    <input type="text" placeholder="Пример(21.12.2000)" name="date">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['date'])) {
    $date = trim(strip_tags($_REQUEST['date']));
    $arr = explode('.', $date);
    $mtime = mktime(0,0,0, $arr[1], $arr[0], $arr[2]);
    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    $day = date('w', $mtime);
    echo $week[$day];
}
