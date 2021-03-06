<?php
if	(!$profil->get_addEntry()) {
	return include 'controllers/admin/clanky.php';
}
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');
$entryClass = new Entry();
$nadpis = '';
$text = '';
if (isset($_POST['nadpis'])) {
	if($_POST['nadpis'] != "") {
		if ($entryClass->saveNewEntry($profil->getId(), $_POST['nadpis'], $_POST['text'])) {
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