<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

$homemade = new HomeMade();
$homemade;

var_dump($homemade->deleteHomemade($_POST['id']));