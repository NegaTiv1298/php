<?php
$str = 'aba aea aca aza axa a.a a+a a*a';
echo preg_replace('#a[a-fj-z]a#', '!', $str);