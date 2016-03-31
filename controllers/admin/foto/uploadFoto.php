<?php
function __autoload($name){
	include_once("../../../modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();
$galleryClass = new Fotogalerie();
if(!isset($_SESSION['kvh_login']) || $_SESSION['kvh_login'] == "" || $_SESSION['kvh_login'] == 0 || !$profil->checkIDLogin($_SESSION['kvh_login'])) {
    return;
}


if(!isset($_GET['id'])) {
    return;
}
$gallery = $_GET['id'];

$dir = "../../../fileadmin/foto/$gallery" ;
$fileDir = "fileadmin/foto/$gallery";
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

$newName = count(scandir($dir)) - 2;


$errors=0;

if(isset($_FILES))
{
    if($_FILES['image']['error'] == ""){
      $profile_image = $_FILES['image'];
      switch($profile_image['type']){
        case "image/png":
              $sufix = ".png";
              break;
        case "image/gif":
          $sufix = ".gif";
          break;
        case "image/jpeg":
          $sufix = ".jpg";
          break;
        case "image/jpg":
          $sufix = ".jpg";
          break;
        default:
              $sufix = "";
          $err[] = "Nezn�m� typ souboru.";
      }
      move_uploaded_file($profile_image['tmp_name'], '../../../fileadmin/foto/'.$newName. $sufix);
      $galleryClass->resizeImage(850, $dir . '/' . $newName, '../../../fileadmin/foto/'.$newName . $sufix);
      $galleryClass->resizeImage(200, $dir . '/_' . $newName, '../../../fileadmin/foto/'.$newName . $sufix);
      unlink ( '../../../fileadmin/foto/'.$newName. $sufix);
    }
} else {
    return;
}

$title = "";
if(isset($_POST['title'])) {
    $title = $_POST['title'];
}


$galleryClass->saveFoto('/'.$fileDir.'/_'.$newName . $sufix, '/'.$fileDir.'/'.$newName . $sufix, $newName . $sufix, $title, $profil->getId(), $gallery);
return true;