<?php
$week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'];
$day = date('w');
echo $week[$day];
$day1 = date('w', mktime(0,0,0,6,6,2006));
echo $week[$day1];
// Не поняв умову про день народження. Вивів просто день який був в 2006 році.
