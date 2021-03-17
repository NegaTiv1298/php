<?php
$str = 'aaa bcd xxx efg';
echo preg_replace('#(\w)\1+#', '!', $str);