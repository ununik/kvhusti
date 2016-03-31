<?php
$container = '<h2>Kalendář</h2>';
if ($member['addEvent'] == 1) {
$container .= '<a href="admin.php?page=kalendar_new">nová událost</a>';
};

$container .= $kalendar;

return $container;