<?php
if (!empty($_REQUEST['birthday'])) {
    setcookie('birthday', $_REQUEST['birthday'], time() + 3600);
        $dateR = $_REQUEST['birthday'];
        $chekTime = strtotime($dateR) - time();
        if ($_COOKIE['birthday']) {
            $birthday = floor($chekTime / (60*60*24));
            if ($birthday == 0) {
                echo 'Поздравляем з днем рождения!!';
            } else {
                echo 'Сегодня ' . date('d.m.Y', time()) . '<br>' . 'До Вашего дня рождения осталось ' . $birthday . ' дней';
            }
        }
}
?>
<form action="" method="get">
    <p><b>Введите дату своего рождения</b></p><input type="date" name="birthday">
    <input type="submit">
</form>
