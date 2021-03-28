<?php
session_start();
if (!empty($_REQUEST['country'])) {
    $_SESSION['country'] = $_REQUEST['country'];
} else {
    $_SESSION['country'] = 'Введите вашу страну';
}
?>
<form action="" method="get">
    <input type="text" name="country">
    <input type="submit" name="sumbit">
</form>