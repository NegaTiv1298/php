<?php
session_start();
$_SESSION['test'] = 'Test';
echo $_SESSION['test'];