<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=clenove">Členové</a>');
$page->setTitle("Členové | KVH Ústí nad Labem");

$profilClenove = new Profil();

return include 'views/admin/clenove/all.php';