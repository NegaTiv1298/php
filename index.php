<form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <textarea placeholder="Введите сообщение" name="text">
        <?php if (isset($_GET['text'])) echo $_GET['text']; ?>
    </textarea>
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['submit'])) {
    $name = strip_tags($_REQUEST['name']);
    $text = strip_tags($_REQUEST['text']);
    echo $name;
}
?>