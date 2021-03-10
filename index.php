<form action="" method="get">
    <input type="text" name="text"> <br>
    <input type="submit">
</form>
<?php
function Factorial($num)
{
    if ($num < 1) {
        return 1;
    } else return ($num * Factorial($num - 1));
}
if (isset($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    echo Factorial($str);
}