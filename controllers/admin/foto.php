<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/fotogalerie.php';
}
$member = $profil->getMember($profil->getId());
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');

$fotogalerie = new Fotogalerie();

if (isset($_POST['title'])) {
    $fotogalerie->updateAlbum($_GET['id'], $_POST['title'], $_POST['description'], $_POST['date'], $_POST['date2']);
}

$gallery = $fotogalerie->getGalleryFromId($_GET['id']);

$page->addToDrobeckovaNavigace('<a href="admin.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="admin.php?page=foto&id='.$gallery['id'].'">' . $gallery['title'] . '</a>');
$page->setTitle("{$gallery['title']} | Fotogalerie | KVH Ústí nad Labem");

$date = $page->getReadableDate($gallery['date'], $gallery['date2']);
$date1 = date("Y-m-d", $gallery['date']);
if($gallery['date2'] != 0) {
    $date2 = date("Y-m-d", $gallery['date2']);
} else {
    $date2 = '';
}

return include 'views/admin/fotogalerie/gallery.php';