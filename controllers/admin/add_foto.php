<?php
$member = $profil->getMember($profil->getId());
if (!isset($_GET['id']) || $_GET['id'] == "" || $member['addFotogallery'] != 1) {
	return 'controllers/admin/fotogalerie.php';
}

$fotogalerie = new Fotogalerie();

$gallery = $fotogalerie->getGalleryFromId($_GET['id']);


return include 'views/admin/fotogalerie/add_new_foto.php';