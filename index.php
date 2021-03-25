<?php
$arr = array_diff(scandir('dir'), ['..', '.']);
foreach ($arr as $elem) {
    echo file_get_contents("dir/$elem");
}
