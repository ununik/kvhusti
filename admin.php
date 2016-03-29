<?php
function __autoload($name){
    include_once("modules/classes/$name.class.php");
}

session_start();
$profil = new Profil();
$page = new Page();

if(!isset($_SESSION['kvh_login']) || $_SESSION['kvh_login'] == "" || $_SESSION['kvh_login'] == 0 || !$profil->checkIDLogin($_SESSION['kvh_login'])) {
	$page->setTitle("KVH Ústí nad Labem");
	$page->addToDrobeckovaNavigace('<a href="index.php">kvhusti.cz</a>');
	
	$page->setNavigation(include_once('views/navigation.php'));
	
	$page->setContent(include_once("controllers/admin/badName.php"));
	
	$page->setAdminLog(include 'controllers/login/form.php');
	
	print include_once('views/page.php');
	return;
}


$page->addScript('<script src="js/ajax.js"></script>');
$page->addScript('<script src="js/admin.js"></script>');
$page->addScript('<script src="js/jquery-ui-1.8.18.custom.min.js"></script>');

if(isset($_GET['page'])){
    $getPage = $_GET['page'];
}else{
    $getPage = "home";
}

$page->setTitle("KVH Ústí nad Labem");
$page->addToDrobeckovaNavigace('<a href="admin.php">kvhusti.cz</a>');

$page->setNavigation(include_once('views/admin/navigation.php'));

$page->setContent(include_once("controllers/admin/$getPage.php"));

if($page->getContent() == ""){
    $page->setContent(include_once("controllers/404.php"));
}

$page->setAdminLog(include 'controllers/login/activeMember.php');

print include_once('views/page.php');