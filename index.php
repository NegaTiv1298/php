<?php
$arr = [
    ['href'=>'1.html', 'text'=>'ссылка 1'],
    ['href'=>'2.html', 'text'=>'ссылка 2'],
    ['href'=>'3.html', 'text'=>'ссылка 3'],
];
foreach ($arr as $elem) {
    $href = $elem['href'];
    $text = $elem['text'];
    echo "<p><a href=\"$href\">$text</a></p>";
}