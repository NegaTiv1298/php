<form action="" method="get">
    <p><b>Знаете ли вы язык 'PHP'?</b></p>
    <p>Да<input type="radio" name="rad1" value="1"></p>
    <p>Нет<input type="radio" name="rad2" value="0"></p>
    <input type="submit" name="sumbit">
</form>
<?php
if (isset($_REQUEST ['rad1'])) {
    echo 'Вы знаете PHP';
}
if (isset($_REQUEST ['rad2'])) {
    echo 'Вы не знаете PHP';
}
