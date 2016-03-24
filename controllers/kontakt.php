<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 15. 9. 2015
 * Time: 7:16
 */
$kontakt = $page->getDBContent('kontakt');
$page->addToDrobeckovaNavigace('<a href="index.php?page='.$kontakt['url_name'].'">'.$kontakt['title'].'</a>');
$page->setTitle("{$kontakt['title']} | KVH Ústí nad Labem");
return include_once("views/kontakt/kontakt.php");