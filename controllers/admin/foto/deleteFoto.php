<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

$galleryClass = new Fotogalerie();

$galleryClass->deleteFoto($_POST['id']);