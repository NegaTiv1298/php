<?php
require_once 'User.php';

//$user = new User;
//$user->setName('Николай');
//$user->setSurname('Петров');
//$user->setPatronymic('Петрович');
//echo $user->getFullName();

echo (new User)->setName('Николай')->setPatronymic('Иванович')->setSurname('Петров')->getFullName();
