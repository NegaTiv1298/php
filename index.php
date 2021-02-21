<?php
$date = date_create('2025-12-31');
date_modify($date, '2 days');
echo date_format($date, 'Y-m-d');
echo '<br>';
$date = date_create('2025-12-31');
date_modify($date, '1 month, 3 days');
echo date_format($date, 'Y-m-d');
echo '<br>';
$date = date_create('2025-12-31');
date_modify($date, '1 year');
echo date_format($date, 'Y-m-d');
echo '<br>';
$date = date_create('2025-12-31');
date_modify($date, '-3 days');
echo date_format($date, 'Y-m-d');