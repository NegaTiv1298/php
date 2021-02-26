<?php
function NumApple($num, $str1, $str2, $str3)
{
    if ($num == 1) {
        return $num. ' '. $str1;
    }
    if ($num >= 2 && $num <= 4) {
        return $num. ' '. $str2;
    }
    if ($num >= 5) {
        return $num. ' '. $str3;
    }
    return false;
}
echo NumApple (10, 'Яблоко', 'Яблока', 'Яблок');