<?php
$a = 'smile.png';
if (strlen($a) <= 5) {
    echo $a;
} else {
    echo substr($a, 5). '...';
}
