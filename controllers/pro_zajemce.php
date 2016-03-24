<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 7:09
 */
$kontakt = $page->getDBContent('pro_zajemce');
$page->addToDrobeckovaNavigace('<a href="index.php?page='.$kontakt['url_name'].'">'.$kontakt['title'].'</a>');
$page->setTitle("{$kontakt['title']} | KVH Ústí nad Labem");
return include_once("views/pro_zajemce/pro_zajemce.php");