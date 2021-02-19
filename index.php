<?php
if (!isset($_REQUEST['age'])) {
?>
<form action="" method="get">
    <input placeholder="Введите возраст" type="text" name="age">
    <input type="submit" name="sumbit">
</form>
    <?php
}
    ?>
<?php
if (isset($_REQUEST['age'])) {
    $age = strip_tags($_REQUEST['age']);
echo $age;
}