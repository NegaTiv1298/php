<form action="" method="get">
    <p>Введите языки которые вы знаете <b>( html, css, php, javascript )</b></p>
    <input type="text" name="name">
    <br> <br>
    <input type="submit" name="sumbit">
</form>
<?php
$name = $_REQUEST['name'];
if (isset($_REQUEST['name'])) {
    echo $name;
    echo '<br>';
} // < Так зробив ізначально я.
?>

<form action="" method="get">
    <p>html<input type="checkbox" name="lang[]" value="html"></p>
    <p>css<input type="checkbox" name="lang[]" value="css"></p>
    <p>php<input type="checkbox" name="lang[]" value="php"></p>
    <p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST ['lang'])) {
    echo 'Вы знаете'. ' : '. implode(', ', $_REQUEST['lang']);
} // А так показало в рішенню задачі. Но суть поняв.
