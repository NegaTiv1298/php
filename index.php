<?php
function input($type, $name, $value)
{
    if (isset($_REQUEST[$name])) {
        $value = $_REQUEST[$name];
    }
    return '<input type = "text" name = "'.$name.'" value = "'.$value.' ">';
}
echo input('text', 'input', '1');