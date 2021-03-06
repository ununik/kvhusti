<?php
$container = '<h2>Články</h2>';
if	($profil->get_addEntry()) {
	$container .= '<div><a href="admin.php?page=new_clanek">Přidat nový článek</a></div>';
}
foreach ($entries->getEntriesForPage() as $entry) {
	$container .= '<div class="entries_all">';
	$container .= "<h3 class='entries_all_h3'><a href='admin.php?page=clanek&id={$entry['id']}'>{$entry['title']}</a></h3>";
	
	$datum = date('j. n. Y', $entry['timestamp']);
	$container .= "<span class='entries_vytvoreno'>vytvořeno: $datum</span>";
	
	$container .= "<span class='entries_autor'>autor: {$profil->getNameFromId($entry['author'])}</span>";
	$container .= '</div>';
}

$container .= '<div id="cislovani_stranek">';
$pages = $entries->getPageCount();
if ($pages > 1) {
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $entries->getPageNumber()) {
			$container .= "<a href='admin.php?page=clanky&pageNum=$i'>$i</a>";
		} else {
			$container .= "<a href='admin.php?page=clanky&pageNum=$i' id='aktualniStrana'>$i</a>";
		}
	}
}
$container .= '</div>';

return $container;