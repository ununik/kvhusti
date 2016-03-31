<?php
function __autoload($name){
	include_once("../../../modules/classes/$name.class.php");
}

$fotogalerie = new Fotogalerie();

$fotogalerie->deleteOsobaNaObrazku($_POST['foto'], $_POST['user']);
return;