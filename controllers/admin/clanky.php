<?php
$page->addToDrobeckovaNavigace('<a href="admin.php?page=clanky">Články</a>');
$entries = new Entry();
if (isset($_GET['pageNum']) && $_GET['pageNum']!="") {
	$entries->setPageNumber($_GET['pageNum']);
}
$page->setTitle("Články | Strana {$entries->getPageNumber()} | KVH Ústí nad Labem");
$page->addToDrobeckovaNavigace('<a href="admin.php?page=clanky&pageNum=' . $entries->getPageNumber() . '">Strana ' . $entries->getPageNumber() . '</a>');


return include_once("views/admin/clanky/all.php");