<?php
function removeDir($dir)
{
    $arr = array_diff(scandir($dir), ['..', '.']);
    foreach ($arr as $elem) {
        $path = $dir . '/' . $elem;
        if (is_dir($path)) {
            removeDir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}
removeDir('dir');