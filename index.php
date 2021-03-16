<?php
$str = 'wйw wяw wёw wqw';
echo preg_replace('#w[а-яА-ЯёЁ]w#u', '!', $str);