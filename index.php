<?php
$str = 'a1a a2a a3a a4a a5a aba aca';
echo preg_replace('#a\da#', '!', $str);