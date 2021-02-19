<form action="" method="get">
    <input placeholder="Введите логин" type="text" name="login">
    <input placeholder="Введите пароль" type="password" name="pass">
    <input type="submit" name="sumbit">
</form>

<?php
if (isset($_REQUEST['login']) && $_REQUEST['pass']) {
    $login = 'user';
    $pass = '12345';
    $flogin = trim($_REQUEST['login']);
    $fpass = trim($_REQUEST['pass']);
    if ($login == $flogin && $pass == $fpass) {
        echo 'Доступ разрешен';
    } else {
        echo 'Доступ запрещен';
    }
}