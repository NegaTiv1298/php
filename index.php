<?php
$arr = array_diff(scandir('dir'), ['..', '.']);
foreach ($arr as $elem) {
    $text = file_get_contents($elem);
    file_put_contents($elem, $text. '!');
}
