<?php
function __autoload($name){
	include_once("../../../modules/classes/$name.class.php");
}

session_start();


var_dump($_FILES);
/*if(isset($_FILES)) {
	var_dump($_FILES);
} else {
	var_dump($_POST);
}*/

/*
 * 
 * 
 * move_uploaded_file(tmp_name, name);
 */