<?php
session_start();
require_once('/Model/Connexion.php');
$pdoBuilder = new Connexion();
$db = $pdoBuilder->get_connection();

if (
	( isset($_GET['ctrl']) && !empty($_GET['ctrl']) ) &&
	( isset($_GET['action']) && !empty($_GET['action']) )
) {

    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
}
else {

    $ctrl = 'product';
    $action = 'display';
}

$id = !empty($_GET['id']) ? $_GET['id'] : false;

require_once('./Controller/' . $ctrl  . 'Controller.class.php');

$ctrl = $ctrl . 'Controller';

$controller = new $ctrl($db);
if ($id) {
    $controller->$action($id);
} else {
    $controller->$action();
}

?>
