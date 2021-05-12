<?php
spl_autoload_register();

$data = new \Project\User\Data();
$user = new \Core\User();
$controller = new \Core\Admin\Controller();

echo $data->ret();
echo $user->get();
echo $controller->get();

