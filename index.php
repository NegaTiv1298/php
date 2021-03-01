<form action="" method="get">
    <p><b>Отметьте какие языки вы знаете.</b></p>
    <select multiple name="name[]">
        <option>Html</option>
        <option>Css</option>
        <option>Php</option>
        <option>JavaScript</option>
    </select> <br> <br>
    <input type="submit" name="sumbit">
</form>

<?php
if (isset($_REQUEST ['name'])) {
    echo 'Вы знате : '. implode(', ', $_REQUEST['name']);
}