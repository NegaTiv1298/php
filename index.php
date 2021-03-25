<?php
$arr = array_diff(scandir('dir'), ['..', '.']);
foreach ($arr as $elem) {
    echo $elem. '-';
    var_dump(is_file('dir/'. $elem));
}

