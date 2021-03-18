<?php
$str = '1 2 3 4';
function kv($m)
{
    $result = pow($m[0], 2);
    return $result;
}
echo preg_replace_callback('#(\d+)#i', 'kv', $str);
