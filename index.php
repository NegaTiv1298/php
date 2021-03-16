<?php
$str = 'aba aea aca aza axa';
echo preg_replace('#a[bex]a#', '!', $str);