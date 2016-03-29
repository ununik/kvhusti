<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/fotogalerie.php';
}

$fotogalerie = new Fotogalerie();
$profil = new Profil();
$foto = $fotogalerie->getFotoFromId($_GET['id']);

if ($foto['title'] == '') {
	$title = "Foto č. {$foto['id']}";
} else {
	$title = $foto['title'];
}

$gallery = $fotogalerie->getGalleryFromId($foto['fotogalerie']);

$page->addToDrobeckovaNavigace('<a href="index.php?page=fotogalerie">Fotogalerie</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=foto&id='.$gallery['id'].'">' . $gallery['title'] . '</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=foto_detail&id='.$foto['id'].'">' . $title . '</a>');
$page->setTitle("$title | {$gallery['title']} | Fotogalerie | KVH Ústí nad Labem");

return include 'views/fotogalerie/detail.php';
