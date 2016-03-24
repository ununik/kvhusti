<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 7:25
 */
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy">Výstroj a výzboroj</a>');
if(!isset($_GET['subpage'])){
    return include_once("views/uniformy/home.php");
}elseif(!isset($_GET['category']) && !isset($_GET['uniform'])){
    return include_once("views/uniformy/{$_GET['subpage']}-home.php");
}elseif(isset($_GET['category'])){
    return include_once("views/uniformy/{$_GET['subpage']}-{$_GET['category']}.php");
}else{
	return include_once("views/uniformy/{$_GET['subpage']}-{$_GET['uniform']}/{$_GET['uniform']}.php");
}
