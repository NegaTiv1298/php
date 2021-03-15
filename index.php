<?php
echo $_GET['get'];
echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    echo "<a href=\"?get=$i\">link $i</a> ";
}
?>
