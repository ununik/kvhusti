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
$allZajem = $profil->getAllZajmy($member['id']);


$page->addToDrobeckovaNavigace('<a href="index.php?page=clenove">Členové</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=clen&id='.$member['id'].'">'.$jmeno.'</a>');

$page->setTitle("$jmeno | KVH Ústí nad Labem");

$kontakt = include 'views/clenove/kontakt.php';
$clanky = include 'views/clenove/clanky.php';
$foto = include 'views/clenove/foto.php';
if (count($allZajem) > 0) {
    $omne = include 'views/clenove/omne.php';
} else {
    $omne = '';
}
$info = include 'views/clenove/informace.php';

return include 'views/clenove/one.php';