<?php
$host = 'php';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, "SET NAMES 'utf8'");


if (!empty($_POST)) {
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
mysqli_query($link, $query) or die(mysqli_error($link));
}
?>
<form action="" method="POST">
    <input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name'];?>">
    <input name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age'];?>">
    <input name="salary" value="<?php if (isset($_POST['salary'])) echo $_POST['salary'];?>">
    <input type="submit" value="добавить работника">
</form>
