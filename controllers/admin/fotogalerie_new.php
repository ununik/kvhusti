<?php
$member = $profil->getMember($profil->getId());
if ($member['addFotogallery'] != 1) {
	return 'controllers/admin/fotogalerie.php';
}

if (isset($_POST['title'])) {
	$fotogalerie = new Fotogalerie();
	
	if($lastId = $fotogalerie->addNewAlbum($_POST['title'], $_POST['description'], $profil->getId(), $_POST['date1'], $_POST['date2'])) {
		header('location: admin.php?page=foto&id=' . $lastId);
	}
}
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie_new">Nové album</a>');
$page->setTitle("Fotogalerie | KVH Ústí nad Labem");

return include 'views/admin/fotogalerie/new_gallery.php';