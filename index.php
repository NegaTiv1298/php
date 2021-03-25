<?php
function getFiles($dir)
{
    $arr = array_diff(scandir($dir), ['..', '.']);
    $result = [];
    foreach ($arr as $elem) {
        $path = $dir . '/' . $elem;
        if (is_dir($path)) {
            $result = array_merge($result, getFiles($path));
        } else {
            $result[] = $path;
        }
    }
    return $result;
}
$arr = getFiles('dir');
foreach ($arr as $elem) {
    if (is_file($elem)) {
        $text = file_get_contents($elem);
        file_put_contents($elem, $text. '!');
    }
}
