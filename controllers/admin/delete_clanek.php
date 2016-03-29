<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
	return include 'controllers/admin/clanky.php';
}

$entryClass = new Entry();
if ($entryClass->deleteEntry($_GET['id'], $profil->getId())) {
	header('location: admin.php?page=clanky');
}

return include 'controllers/admin/clanky.php';