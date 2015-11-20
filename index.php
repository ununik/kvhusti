<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10. 9. 2015
 * Time: 17:06
 */
function __autoload($name){
    include_once("modules/classes/$name.class.php");
}
if(isset($_GET['page'])){
    $getPage = $_GET['page'];
}else{
    $getPage = "home";
}
$page = new Page();

$page->setTitle("KVH Ústí nad Labem");

$page->setNavigation(include_once('views/navigation.php'));

$page->setContent(include_once("controllers/$getPage.php"));

if($page->getContent() == ""){
    $page->setContent(include_once("controllers/404.php"));
}

print include_once('views/page.php');