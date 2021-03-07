<form action="" method="get">
    <input type="text" name="text" placeholder="Введите год">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $year = trim($_REQUEST['text']);
    if (strlen($year) == 4) {
        if (date('L', mktime(0,0,0,1,1,$year))) {
            echo 'Высокосный';
        } else {
            echo 'Не высокосный';
        }
    }
}