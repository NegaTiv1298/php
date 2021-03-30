<?php
if (!empty($_REQUEST['birthday'])) {
    setcookie('birthday', $_REQUEST['birthday'], time() + 3600);
        $dateR = explode('.', $_REQUEST['birthday']);
        $mkTime = mktime(0, 0, 0, $dateR[1], $dateR[0], $dateR[2]);
        $chekTime = $mkTime - time();
        if ($_COOKIE['birthday']) {
            $birthday = date('z', $chekTime);
            if ($birthday == 0) {
                echo 'Поздравляем з днем рождения!!';
            } else {
                echo 'Сегодня ' . date('d.m.Y', time()) . '<br>' . 'До Вашего дня рождения осталось ' . $birthday . ' дней';
            }
        }
}
?>
<form action="" method="get">
    <p><b>Введите дату своего рождения</b></p><input type="text" name="birthday">
    <input type="submit">
</form>
