<form action="" method="get">
    <input type="text" placeholder="Пример(2025-12-31)" name="date">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['date'])) {
    $date = trim(strip_tags($_REQUEST['date']));
    $arr = explode('-', $date);
    $mtime = mktime(0,0,0, $arr[1], $arr[2], $arr[0]);
    $month = [1 => 'Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'];
    $day = date('n', $mtime);
    echo $month[$day];
}
