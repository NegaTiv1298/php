<?php
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('#(a(ee|x+)a)#', '!', $str);