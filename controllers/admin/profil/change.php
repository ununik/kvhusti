<?php
function __autoload($name){
	include_once("../../../modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();

if (!isset($_SESSION['kvh_login'])) {
	return;
}

$value = $_POST['value'];
if ($_POST['value'] == 'true') {
	$value = 1;
}
if ($_POST['value'] == 'false') {
	$value = 0;
}

$profil->setField($_POST['field'], $value, $_SESSION['kvh_login']);
echo 'ok';	