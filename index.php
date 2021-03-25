<?php
function getFiles($dir)
{
    $arr = array_diff(scandir('dir'), ['..', '.']);
    foreach ($arr as $elem) {
        $path = $dir . '/' . $elem;
        if (is_dir($path)) {
            getFiles($path);
        } else {
            var_dump($path);
        }
    }
}
getFiles('dir');
