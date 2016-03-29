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

function getExtension($str) {

    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}


$errors=0;

if(isset($_FILES))
{
    $image =$_FILES["image"]["name"];
    $uploadedfile = $_FILES['image']['tmp_name'];

    if ($image)
    {
        $filename = stripslashes($_FILES['image']['name']);
        $extension = getExtension($filename);
        $extension = strtolower($extension);
        if (($extension != "jpg") && ($extension != "jpeg")
                && ($extension != "png") && ($extension != "gif"))
        {
            echo ' Unknown Image extension ';
            $errors=1;
        }
        else
        {
            $size=filesize($_FILES['image']['tmp_name']);

            if($extension=="jpg" || $extension=="jpeg" )
            {
                $uploadedfile = $_FILES['image']['tmp_name'];
                $src = imagecreatefromjpeg($uploadedfile);
            }
            else if($extension=="png")
            {
                $uploadedfile = $_FILES['image']['tmp_name'];
                $src = imagecreatefrompng($uploadedfile);
            }
            else
            {
                $src = imagecreatefromgif($uploadedfile);
            }

            list($width,$height)=getimagesize($uploadedfile);

            $newwidth=1000;
            $newheight=($height/$width)*$newwidth;
            $tmp=imagecreatetruecolor($newwidth,$newheight);

            $newwidth1=250;
            $newheight1=($height/$width)*$newwidth1;
            $tmp1=imagecreatetruecolor($newwidth1,$newheight1);

            imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
                    $width,$height);

            imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,
                    $width,$height);

            $filename = "$dir/$newName.$extension";
            $filename1 = "$dir/_$newName.$extension";

            imagejpeg($tmp,$filename,100);
            imagejpeg($tmp1,$filename1,100);

            imagedestroy($src);
            imagedestroy($tmp);
            imagedestroy($tmp1);
        }
    }
} else {
    return;
}

$title = "";
if(isset($_POST['title'])) {
    $title = $_POST['title'];
}

$galleryClass->saveFoto("$fileDir/_$newName.$extension", "$fileDir/$newName.$extension", "$newName.$extension", $title, $profil->getId(), $gallery);
return true;