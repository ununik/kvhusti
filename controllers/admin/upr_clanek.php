<?php
if	(!$profil->get_addEntry()) {
	return include 'controllers/admin/clanky.php';
}
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/admin/clanky.php';
}

$entryClass = new Entry();
$entry = $entryClass->getEntry($_GET['id']);
$nadpis = $entry['title'];
$text = $entry['text'];
if (isset($_POST['nadpis'])) {
	if($_POST['nadpis'] != "") {
		if ($entryClass->saveUprEntry($_GET['id'], $profil->getId(), $_POST['nadpis'], $_POST['text'])) {
			header('location: admin.php?page=clanky');
		}
	}
	$nadpis = $_POST['nadpis'];
	$text = $_POST['text'];
}

$page->addToDrobeckovaNavigace('<a href="admin.php?page=clanky">Články</a>');
$page->addToDrobeckovaNavigace('<a href="">Nový článek</a>');
$page->setTitle("Články | KVH Ústí nad Labem");

return include 'views/admin/clanky/new_clanek.php';