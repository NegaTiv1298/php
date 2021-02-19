<form action="" method="get">
    <input placeholder="Введите имя" type="text" name="name">
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['name'])) {
    $name = strip_tags($_REQUEST['name']);
    echo 'Привет, '. $name;
}