<?php
class DatabaseShell
{
    private $link;

    public function __construct($host, $user, $password, $database)
    {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8'"); // устанавливаем кодировку
    }

    public function save($table, $data)
    {

        // сохраняет запись в базу
        $query = "INSERT INTO $table SET $data";
        mysqli_query($this->link, $query) or die( mysqli_error($this->link) );


    }

    public function del($table, $id)
    {
        // удаляет запись по ее id
        $query = "DELETE FROM $table WHERE id = $id";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function delAll($table, $ids)
    {
        // удаляет записи по их id
       $query = "DELETE FROM $table WHERE id IN ($ids)";
       mysqli_query($this->link, $query) or die(mysqli_error($this->link));

    }

    public function get($table, $id)
    {
        // получает одну запись по ее id
        $query = "SELECT * FROM $table WHERE id = $id";

        $result = mysqli_query($this->link, $query) or die( mysqli_error($this->link) );

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        var_dump($data);
    }

    public function getAll($table, $ids)
    {
        // получает массив записей по их id
        $query = "SELECT * FROM $table WHERE id IN ($ids)";

        $result = mysqli_query($this->link, $query) or die( mysqli_error($this->link) );

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        var_dump($data);
    }

    public function selectAll($table, $condition)
    {
        // получает массив записей по условию
        $query = "SELECT * FROM $table WHERE $condition";

        $result = mysqli_query($this->link, $query) or die( mysqli_error($this->link) );

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        var_dump($data);
    }
}