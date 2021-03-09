<form action="" method="get">
    <textarea name="text"></textarea>
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['text'])) {
    $text = $_REQUEST['text'];
    $strlen = strlen($text);
    $count = count(explode(' ', $text));
    $probel = $count - 1;
    echo 'В тексте '. $count. ' слов '.$strlen. ' символов '. $probel. ' пробелов';
}

