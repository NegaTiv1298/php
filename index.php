<?php
$str = 'aaa@bbb eee7@kkk';
echo preg_replace('#([a-z\d]+)@([a-z\d]+)#', '$2@$1', $str);