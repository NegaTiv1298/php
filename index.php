<?php
function strLlen($str)
{
    return count(str_split($str, 1));
}
$str = '1, 2, 3, 4, 5';
echo strLlen($str);