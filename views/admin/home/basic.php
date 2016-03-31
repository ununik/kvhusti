<?php
$container = '<h2>Úvod</h2>';
$container .= '<h3>Co můžeš měnit</h3>';
$container .= '<ul>';
$container .= '<li><a href="admin.php?page=clen&id='.$profil->getId().'">Svůj profil</a></li>';
if($member['addEntry'] == 1) {
    $container .= '<li><a href="admin.php?page=clanky">Články</a></li>';
}
if($member['addFotogallery'] == 1) {
    $container .= '<li><a href="admin.php?page=fotogalerie">Fotogalerie</a></li>';
}
if($member['addEvent'] == 1) {
    $container .= '<li><a href="admin.php?page=fotogalerie">Události v kalendáři</a></li>';
}

$container.= '</ul>';

return $container;