<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/admin/kalendar.php';
}
$member = $profil->getMember($profil->getId());
$page->addToDrobeckovaNavigace('<a href="admin.php?page=kalendar">Kalendář</a>');

$kalendar = new Kalendar();
$event = $kalendar->getEvent($_GET['id']);
$page->addToDrobeckovaNavigace('<a href="admin.php?page=udalost&id='.$event['id'].'">'.$event['title'].'</a>');
$page->setTitle("{$event['title']} | Kalendář | KVH Ústí nad Labem");

return include 'views/admin/kalendar/event.php';