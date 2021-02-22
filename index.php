<?php
$week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'];
$date = date_create('2021-02-22');
$date = date_modify($date, '-100 day');
$day = date_format($date, 'w');
echo $day. '<br>';
echo $week[$day];