<?php
$host = 'php';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, "SET NAMES 'utf8'");
?>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Salary</th>
    <th>Delete</th>
    <th>Update</th>
</tr>
    <?php
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    if (isset($_GET['del'])) {
        $del = $_GET['del'];
        $query = "DELETE FROM workers WHERE id=$del";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }


    $query = "SELECT * FROM workers";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $result = '';
    foreach ($data as $elem) {
        $result .= '<tr>';

        $result .= '<td>'. $elem['id'] .'</td>';
        $result .= '<td>'. $elem['name'] .'</td>';
        $result .= '<td>'. $elem['age'] .'</td>';
        $result .= '<td>'. $elem['salary'] .'</td>';
        $result .= '<td> <a name="del" href="?del=' . $elem['id'] . '">Удалить</td>';
        $result .= '<td> <a name="upd" href="test.php?upd=' .$elem['id'].'">Редактировать</td>';

        $result .= '</tr>';
    }
    echo $result;
    ?>
</table>
<br>
<form action="" method="post">
    <input name="name">
    <input name="age">
    <input name="salary">
    <input type="submit" value="Добавить работника">
</form>