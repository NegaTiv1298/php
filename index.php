<?php
$arr = ['dir1', 'dir2'];
foreach ($arr as $elem) {
    mkdir($elem);
}