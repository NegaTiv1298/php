<?php
$str = '1234321423';
echo preg_match('#^\d{1,12}$#', $str);