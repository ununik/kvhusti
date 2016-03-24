<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 15. 9. 2015
 * Time: 6:58
 */
$kontakt = $page->getDBContent('kontakt');
$page->addToDrobeckovaNavigace('<a href="index.php?page=o_nas">O nás</a>');
$page->setTitle("O nás | KVH Ústí nad Labem");
return include_once("views/o_nas/o_nas.php");