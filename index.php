<?php
function dW($day)
{
    $week = [1 => 'sn', 'mn', 'tu', 'wd', 'th', 'fr', 'st'];
    if ($day >= 1 && $day <=7){
        return $week[$day];
    } else {
        return 'False';
    }
}