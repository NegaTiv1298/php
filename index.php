<?php
$str = "2aaa'3'bbb'4'";
function kv($m)
{
   return $m[1] * 2;
}
echo preg_replace_callback("#'(\d+)'#i", 'kv', $str);
