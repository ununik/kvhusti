<?php
$container = '<h2>Fotogalerie</h2>';
foreach ($fotogalerie->getAllGaleries() as $galerie) {
	$container .= '<div class="entries_all">';
	$date = $page->getReadableDate($galerie['date'], $galerie['date2']);
	$container .= "<h3 class='entries_all_h3'><a href='index.php?page=foto&id={$galerie['id']}'>{$galerie['title']} ($date)</a></h3>";
	$container .= "<div>Počet fotografií: {$fotogalerie->getCountOfFotoForGallery($galerie['id'])}</div>";
	$container .= "<p>{$galerie['description']}</p>";
	$container .= '</div>';
}

$container .= '<div id="cislovani_stranek">';
$pages = $fotogalerie->getPageCount();
if ($pages > 1) {
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $fotogalerie->getPageNumber()) {
			$container .= "<a href='index.php?page=fotogalerie&pageNum=$i'>$i</a>";
		} else {
			$container .= "<a href='index.php?page=fotogalerie&pageNum=$i' id='aktualniStrana'>$i</a>";
		}
	}
}
$container .= '</div>';

return $container;