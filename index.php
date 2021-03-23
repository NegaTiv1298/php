<?php
if (file_exists('test.php') == true ){
    unlink('test.php');
} else {
    file_put_contents('test.php', '');
}