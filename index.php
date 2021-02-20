<form action="" method="get">
    <input type="text" name="year">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['year'])) {
    $year = trim(strip_tags($_REQUEST['year']));
    if (strlen($year) == 4) {
        if (date('L', mktime(0,0,0,1,1, $year ))) {
            echo 'Высокосный';
        } else {
            echo 'Не высокосный';
        }
    } else {
        echo 'Ошибка, Введите год(4 цифры)';
    }
}
