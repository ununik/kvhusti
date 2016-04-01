<?php
$homeMadeClass = new HomeMade();
$member = $profil->getMember($profil->getId());
if (isset($_GET['pageNum']) && $_GET['pageNum']!="") {
    $homeMadeClass->setPageNumber($_GET['pageNum']);
}
return include 'views/admin/homemade/all.php';