<?php
$container = "<h2>$title</h2>";

$container .= "<img src='{$foto['pathBig']}' class='foto_detail'>";
$container .= "<div>{$foto['comment']}</div>";

$osoby = array();
foreach ($fotogalerie->getAllOsobyNaFotkach($foto['id']) as $osoba) {
	if ($osoba['user'] > 0) {
		$osoby[] = "<a href='index.php?page=clen&id={$osoba['user']}'>{$profil->getNameFromId($osoba['user'])}</a>";
	} else {
		$osoby[] = $osoba['jmeno'];
	}
}
if(count($osoby) > 0) {
    $container .= "Kdo je na fotce: ";
    
    $container .= implode(', ', $osoby);
}

return $container;