<?php
function __autoload($name){
    include_once("../../../modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();
$homeMadeClass = new HomeMade();
if(!isset($_SESSION['kvh_login']) || $_SESSION['kvh_login'] == "" || $_SESSION['kvh_login'] == 0 || !$profil->checkIDLogin($_SESSION['kvh_login'])) {
    return;
}

if(!isset($_GET['id'])) {
    return;
}
$title = '';
if(isset($_POST['title'])) {
    $title = $_POST['title'];
}
$dir = "../../../fileadmin/files/" ;
$fileDir = "fileadmin/files/";
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

$newName = count(scandir($dir)) - 2;

if(isset($_FILES))
{
    if($_FILES['file']['error'] == ""){
        $file = $_FILES['file'];
        $sufix = explode ('.', $file['name']);
        $sufix = $sufix[count($sufix) - 1];
          
          
        move_uploaded_file($file['tmp_name'], $dir . $newName . '.' . $sufix);
        $homeMadeClass->saveFile("/".$fileDir. $newName . '.' . $sufix, $sufix, $newName . '.' . $sufix, $title, $_GET['id'] );
    }
}