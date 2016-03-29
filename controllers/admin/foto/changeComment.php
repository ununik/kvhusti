<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

$galleryClass = new Fotogalerie();

$galleryClass->changeComment($_POST['id'], $_POST['text']);