<?php
$member = $profil->getMember($profil->getId());
if($member['addEvent'] != 1) {
    return include 'views/admin/kalendar/basic.php';
}
if (!isset($_GET['id']) || $_GET['id'] == "") {
    return include 'views/admin/kalendar/basic.php';
}
$page->addToDrobeckovaNavigace('<a href="admin.php?page=foto&id=admin.php?page=kalendar">Kalendář</a>');
$page->setTitle("Kalendář | Fotogalerie | KVH Ústí nad Labem");
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');

$kalendar = new Kalendar();
$event = $kalendar->getEvent($_GET['id']);

if (isset($_POST['nadpis'])) {
    if($_POST['nadpis'] && ($_POST['od'] != '' || $_POST['do'] !='')) {
        $kalendar->updateEvent($event['id'], $_POST['od'], $_POST['do'], $_POST['nadpis'], $_POST['poradatel'], $_POST['text'], $_POST['misto']);
        header('location: admin.php?page=kalendar');
    }
}

$od = date("Y-m-d", $event['from']);
if($event['to'] == 0) {
    $do = "";
} else {
    $do = date("Y-m-d", $event['to']);
}
$nadpis = $event['title'];
$poradatel = $event['poradatel'];
$text = $event['popis'];
$misto = $event['misto'];

return include 'views/admin/kalendar/new.php';