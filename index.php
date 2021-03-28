<?php
setcookie("test", "123123", time() + 3600);
echo $_COOKIE['test'];