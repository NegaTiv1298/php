<?php
$arr = array_diff(scandir('dir'), ['..', '.']);
foreach ($arr as $elem) {
    $text = file_get_contents("dir/$elem");
    file_put_contents("dir/$elem", $text. '!');
}
