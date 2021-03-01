<form>
    <input type="text" name="name" placeholder="Введите имя">
    <input type="checkbox" name="check"> <br> <br>
    <input type="submit" name="sumbit">
</form>
<?php
$name = $_REQUEST['name'];
if (isset($_REQUEST ['name']) && isset($_REQUEST ['check']) == 1) {
    echo 'Привет '. $name;
}
if (isset($_REQUEST ['check']) == 0) {
    echo 'Прощайте '. $name;
}