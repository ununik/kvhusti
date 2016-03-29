<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();

$profil->deleteZajem($_POST['id']);
return;