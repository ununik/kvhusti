<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=clenove">Členové</a>');
$page->setTitle("Členové | KVH Ústí nad Labem");

$profil = new Profil();

return include 'views/clenove/all.php';