<?php
$container = "<h2>{$entry['title']}</h2>";
$container .= "<span class='entries_vytvoreno'>vytvořeno: $datum</span>";

$container .= "<span class='entries_autor'>autor: <a href='index.php?page=clen&id={$entry['author']}'>{$profil->getNameFromId($entry['author'])}</a></span>";

$container .= "<div>{$entry['text']}</div>";

return $container;