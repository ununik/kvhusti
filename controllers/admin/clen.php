<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/admin/clenove.php';
}
$profilClen = new Profil();
$entries = new Entry();
$fotogalerie = new Fotogalerie();
$allEntriesForMember = $entries->getAllEntryForAuthor($_GET['id']);
$member = $profilClen->getMember($_GET['id']);
$jmeno = $profilClen->getNameFromId($member['id']);

$page->addToDrobeckovaNavigace('<a href="admin.php?page=clenove">Členové</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=clen&id='.$member['id'].'">'.$jmeno.'</a>');

$page->setTitle("$jmeno | KVH Ústí nad Labem");

$clanky = include 'views/admin/clenove/clanky.php';

if($profil->getId() == $member['id']) {
	$kontakt = include 'views/admin/clenove/kontakt_upr.php';
	$foto = include 'views/admin/clenove/foto_upr.php';
	$omne = include 'views/admin/clenove/omne_upr.php';
} else {
	$kontakt = include 'views/admin/clenove/kontakt.php';
	$foto = include 'views/admin/clenove/foto.php';
	//$omne = include 'views/admin/clenove/omne.php';
}

return include 'views/admin/clenove/one.php';