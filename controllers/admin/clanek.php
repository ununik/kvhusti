<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/admin/clanky.php';
}

$entryClass = new Entry();
$entry = $entryClass->getEntry($_GET['id']);

$page->addToDrobeckovaNavigace('<a href="admin.php?page=clanky">Články</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=clanek&id=' . $entry['id'] . '">' . $entry['title'] . '</a>');
$page->setTitle($entry['title'] . " | Články | KVH Ústí nad Labem");

$datum = date('j. n. Y', $entry['timestamp']);

return include 'views/admin/clanky/one.php';