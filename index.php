<?php
function input($type, $name, $value)
{
    return '<input type = "'.$type.'" name = "'.$name.'" value = "'.$value.'">';
}
echo input('text', 'input', '1');