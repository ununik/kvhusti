<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();

$profil->addNewZajem($_POST['text'], $_POST['user']);
return;