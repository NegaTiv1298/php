<?php
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
echo preg_replace('#(\*q*\+)+#', '!', $str);