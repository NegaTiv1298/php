<?php
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('#(ae+a|ax+a)#', '!', $str);