<form action="" method="get">
    <input type="text" placeholder="Пример(2025-12-31)" name="date1">
    <input type="text" placeholder="Пример(2025-12-31)" name="date2">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['date1']) && $_REQUEST['date2']) {
    $date1 = trim(strip_tags($_REQUEST['date1']));
    $date2 = trim(strip_tags($_REQUEST['date2']));
    if ($date1 > $date2) {
        echo $date1;
    } else {
        echo $date2;
    }
}
