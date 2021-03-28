<?php
session_start();
if (!isset($_SESSION['counter'])) {
    echo 'Вы не обновляли страницу';
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
echo 'Вы обновили страницу '. $_SESSION['counter']. ' раз!';