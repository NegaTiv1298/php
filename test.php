<?php
$host = 'php';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, "SET NAMES 'utf8'");

function input($name)
{
    if (isset($_POST[$name])) {
        $value = $_POST[$name];
    } else {
        $value = '';
    }
    return '<input name="' .$name. '" value="' .$value. '">';
}



if (!empty($_POST) && isset($_GET['upd'])) {
    $idUp = $_GET['upd'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

  $query = "UPDATE workers SET name='$name', age='$age', salary='$salary' WHERE id=$idUp";
  mysqli_query($link, $query) or die(mysqli_error($link));
}
?>
<form action="" method="POST">
    <?php echo input('name'); ?>
    <?php echo input('age'); ?>
    <?php echo input('salary'); ?>
    <input type="submit" value="редактировать работника">
    <br>
    <a href="index.php">Вернуться на главную страницу</a>
</form>

