<form action="" method="get">
    <input placeholder="Введите имя" type="text" name="name">
    <input placeholder="Введите возраст" type="text" name="age">
    <br><br>
    <textarea placeholder="Введите сообщение" name="text"></textarea>
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST['sumbit'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $text = strip_tags($_REQUEST ['text']);
    echo 'Привет, '. $name. ', '. $age. '<br>';
    echo 'Твое сообщение:'. $text;
}