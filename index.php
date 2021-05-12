<?php
//spl_autoload_register();
//
//$data = new \Project\User\Data();
//$user = new \Core\User();
//$controller = new \Core\Admin\Controller();
//
//echo $data->ret();
//echo $user->get();
//echo $controller->get();

spl_autoload_register(function($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$data = new \Project\User\Data();
echo $data->ret();
