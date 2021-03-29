<?php
if (!isset($_COOKIE['test'])) {
    setcookie('test', '1', time() + 3600);
} else {
    setcookie('test', ($_COOKIE['test'] + 1), time() + 3600);
}
echo 'Вы посетили страницу '. $_COOKIE['test']. ' раз!';