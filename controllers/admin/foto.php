<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/fotogalerie.php';
}
$member = $profil->getMember($profil->getId());

$fotogalerie = new Fotogalerie();

$gallery = $fotogalerie->getGalleryFromId($_GET['id']);

$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=foto&id='.$gallery['id'].'">' . $gallery['title'] . '</a>');
$page->setTitle("{$gallery['title']} | Fotogalerie | KVH Ústí nad Labem");

$date = $page->getReadableDate($gallery['date'], $gallery['date2']);

return include 'views/admin/fotogalerie/gallery.php';