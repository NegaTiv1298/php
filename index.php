<?php
function recurs($arr)
{
    echo array_pop($arr). '<br>';
    if (!empty($arr)) {
        recurs($arr);
    }
}
$arr = range(1, 10);
recurs ($arr);