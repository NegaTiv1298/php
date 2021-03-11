<form action="" method="get">
    <input type="text" name="text"> <br>
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $a = $_REQUEST['text'];
    for ($i = 1; $i <= $a; $i++) {
        if ($a % $i == 0) {
            echo $i. '<br>';
        }
    }
}