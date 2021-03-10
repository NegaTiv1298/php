<form action="" method="get">
    <textarea name="text"></textarea>
    <input type="submit">
</form>
<?php

if (isset($_REQUEST['text'])) {
    $text = $_REQUEST['text'];
    $strLen = mb_strlen($text);
    $arr = array_count_values(str_split($text));
    foreach ($arr as $key => $item) {
        $result = 100 / $strLen * $item;
        echo '"'. $key. '"'. ' - '. round($result, 2). '%'. '<br>';
    }
}

