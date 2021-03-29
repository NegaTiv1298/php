<form action="" method="get">
    <p><b>Введите дату своего рождения</b></p><input type="text" name="birthday">
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['birthday'])) {
    setcookie('birthday', $_REQUEST['birthday'], time() + 3600);
}
if (isset($_REQUEST['birthday']) && !empty($_REQUEST['birthday'])) {
        $arr = explode('-', $_REQUEST['birthday']);
        $day = $arr[2] + 1;
        $month = $arr[1];
        $year = date('Y');
        $birthForm = "$year-$month-$day";
        if (strtotime($birthForm) < time()) {
            $year = date('Y') + 1;
            $birthForm = "$year-$month-$day";
        }
        $checkTime = strtotime($birthForm) - time();
        if ($_COOKIE['birthday']) {
            $birthday = floor($checkTime / (60 * 60 * 24));
            if ($birthday == 0) {
                echo 'Поздравляем з днем рождения!!!';
            } else {
                echo 'Сегодня ' . date('d.m.Y', time()) . '<br>' . 'До вашего дня рождения осталось -' . $birthday . 'дней.';
            }
        }
}