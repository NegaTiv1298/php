<?php
$host = 'php';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, "SET NAMES 'utf8'");

//$query = "SELECT * FROM workers WHERE salary>=400 AND salary<=1000 OR age>=23 AND age<=27";
$query = "INSERT INTO workers (name, age, salary)
     VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

//$user = mysqli_fetch_assoc($result);
//var_dump($user);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
