<?php
$str = 'var_text_hello';
$arr = explode('_', $str);
$str2 = '';
foreach ($arr as $elem) {
    if ($elem == $arr[0]) {
        $str2 .= $elem;
    } else {
        $str2 .= ucfirst($elem);
    }
}
echo $str2;