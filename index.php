<?php
$a = 'http://old.code.mu';
if (strpos( $a, 'http://') === 0 || strpos( $a, 'https://') === 0) {
    echo 'Да';
} else {
    echo 'Нет';
}
