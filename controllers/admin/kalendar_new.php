<?php
$member = $profil->getMember($profil->getId());
if($member['addEvent'] != 1) {
    return include 'views/admin/kalendar/basic.php';
}
$page->addToDrobeckovaNavigace('<a href="admin.php?page=foto&id=admin.php?page=kalendar">Kalendář</a>');
$page->setTitle("Kalendář | Fotogalerie | KVH Ústí nad Labem");
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');
$kalendar = new Kalendar();
$od = '';
$do = '';
$nadpis = '';
$poradatel = '';
$text = '';
$misto = '';

if (isset($_POST['nadpis'])) {
    if($_POST['nadpis'] && ($_POST['od'] != '' || $_POST['do'] !='')) {
        $kalendar->saveNew($_POST['od'], $_POST['do'], $_POST['nadpis'], $_POST['poradatel'], $_POST['text'], $_POST['misto']);
        header('location: admin.php?page=kalendar');
    }
}


return include 'views/admin/kalendar/new.php';