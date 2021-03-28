<?php
session_start();
if (isset($_REQUEST['email'])) {
    $_SESSION['email'] = $_REQUEST['email'];
}
?>
<form action="" method="get">
    <input type="text" name="email">
    <input type="submit">
</form>

<form action="" method="get">
    <input type="text" name="name">
    <input type="text" name="surname">
    <input type="text" name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
    <input type="submit">
</form>