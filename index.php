<form action="" method="get">
    <input type="text" placeholder="Введите дату и время" name="date1">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['date1'])) {
    $date1 = trim(strip_tags($_REQUEST['date1']));
    echo date('H:i:s d.m.Y', strtotime($date1));
}
