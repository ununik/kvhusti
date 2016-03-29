<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

$fotogalerie = new Fotogalerie();

if ($fotogalerie->checkedOnThisFoto($_POST['member'], $_POST['foto']) != '') {
    $fotogalerie->deleteOsobaNaObrazku($_POST['foto'], $_POST['member']);
} else {
    $fotogalerie->addOsobaNaObrazku($_POST['foto'], $_POST['member']);
}