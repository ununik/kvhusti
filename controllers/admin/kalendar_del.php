<?php
$member = $profil->getMember($profil->getId());
if($member['addEvent'] != 1) {
    return include 'views/admin/kalendar/basic.php';
}
if (!isset($_GET['id']) || $_GET['id'] == "") {
    return include 'views/admin/kalendar/basic.php';
}

$kalendar = new Kalendar();
$event = $kalendar->delEvent($_GET['id']);
header('location: admin.php?page=kalendar');