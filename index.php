<?php
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z]+a#', '!', $str);