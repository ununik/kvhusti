<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/clenove.php';
}
$profil = new Profil();
$entries = new Entry();
$fotogalerie = new Fotogalerie();
$allEntriesForMember = $entries->getAllEntryForAuthor($_GET['id']);
$member = $profil->getMember($_GET['id']);
$jmeno = $profil->getNameFromId($member['id']);
$profil->setId($_GET['id']);


$page->addToDrobeckovaNavigace('<a href="index.php?page=clenove">Členové</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=clen&id='.$member['id'].'">'.$jmeno.'</a>');

$page->setTitle("$jmeno | KVH Ústí nad Labem");

$kontakt = include 'views/clenove/kontakt.php';
$clanky = include 'views/clenove/clanky.php';
$foto = include 'views/clenove/foto.php';

return include 'views/clenove/one.php';