<?php
$str = 'bbb /aaa\ bbb /ccc\\';
echo preg_replace('#/[a-z]+\\\\#', '!', $str);