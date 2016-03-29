<?php

$fotogalerie = new Fotogalerie();

if (isset($_GET['pageNum']) && $_GET['pageNum']!="") {
	$fotogalerie->setPageNumber($_GET['pageNum']);
}

$page->addToDrobeckovaNavigace('<a href="index.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=fotogalerie&pageNum='.$fotogalerie->getPageNumber().'">Strana ' . $fotogalerie->getPageNumber() . '</a>');
$page->setTitle("Fotogalerie | Strana {$fotogalerie->getPageNumber()} | KVH Ústí nad Labem");


return include 'views/fotogalerie/all.php';