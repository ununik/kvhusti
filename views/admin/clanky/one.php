<?php
$container = "<h2>{$entry['title']}</h2>";
$container .= "<span class='entries_vytvoreno'>vytvořeno: $datum</span>";

$container .= "<span class='entries_autor'>autor: {$profil->getNameFromId($entry['author'])}</span>";

if ($profil->getId() == $entry['author']) {
	$container .= '<div>';
	$container .= "<a href='admin.php?page=upr_clanek&id={$entry['id']}'>upravit</a>";
	$container .= "<a href='admin.php?page=delete_clanek&id={$entry['id']}'>smazat</a>";
	$container .= '</div>';
}

$container .= "<div>{$entry['text']}</div>";

return $container;