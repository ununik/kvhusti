<?php
function __autoload($name){
    include_once("modules/classes/$name.class.php");
}

session_start();

if(isset($_GET['page'])){
    $getPage = $_GET['page'];
}else{
    $getPage = "home";
}
$page = new Page();

$page->setTitle("KVH Ústí nad Labem");
$page->addToDrobeckovaNavigace('<a href="index.php">kvhusti.cz</a>');

$page->setNavigation(include_once('views/navigation.php'));

$page->setContent(include_once("controllers/$getPage.php"));

if($page->getContent() == ""){
    $page->setContent(include_once("controllers/404.php"));
}

$page->setAdminLog(include 'controllers/login/form.php');

print include_once('views/page.php');