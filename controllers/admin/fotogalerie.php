<?php

$fotogalerie = new Fotogalerie();

if (isset($_GET['pageNum']) && $_GET['pageNum']!="") {
	$fotogalerie->setPageNumber($_GET['pageNum']);
}
$member = $profil->getMember($profil->getId());

$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie&pageNum='.$fotogalerie->getPageNumber().'">Strana ' . $fotogalerie->getPageNumber() . '</a>');
$page->setTitle("Fotogalerie | Strana {$fotogalerie->getPageNumber()} | KVH Ústí nad Labem");


return include 'views/admin/fotogalerie/all.php';