<?php
function delitel($x)
{
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return true;
        }
    }
    return false;
}
$num = 31;
if (delitel($num)) {
    echo 'True';
} else {
    echo 'False';
}