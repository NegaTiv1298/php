<form action="" method="get">
    <input type="text" name="year" placeholder="Введите год">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['year'])) {
    $year = $_REQUEST['year'];
    for ($i = 1; $i <= 12; $i++) {
        if (date('w', mktime(0, 0, 0, $i, 13, $year)) == 5) {
            $friday13[] = date('d-m-Y', mktime(0, 0, 0, $i, 13, $year));
        }
    }
}
// По суті списав рішення задачі. Поняв всьо крім ( if (date..... )) == 5 ) Шо то за "== 5" я хз.