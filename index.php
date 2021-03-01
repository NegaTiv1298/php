<?php
function input($name)
{
    if (isset($_REQUEST [$name]) && $_REQUEST[$name] == 1) {
        echo $value = 'checked';
    } else {
        echo $value = '';
    }
    return '<input type="hidden" name "'.$name.'" value="0">
    <input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
}
echo input('checkbox');