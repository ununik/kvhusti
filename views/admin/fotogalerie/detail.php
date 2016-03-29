<?php
if ($member['addFotogallery'] == 1) {
    $container = "<input type='text' value='$title' onchange='changeFotoTitle(this, \"{$foto['id']}\")'>";
} else {
    $container = "<h2>$title</h2>";
}

$container .= "<img src='{$foto['pathBig']}' class='foto_detail'>";
if ($member['addFotogallery'] == 1) {
$container .= "<textarea onchange='changeFotoComment(this, \"{$foto['id']}\")'>{$foto['comment']}</textarea>";
} else {
    $container .= "<div>{$foto['comment']}</div>";
}

$osoby = array();
foreach ($fotogalerie->getAllOsobyNaFotkach($foto['id']) as $osoba) {
	if ($osoba['user'] > 0) {
		$osoby[] = "<a href='index.php?page=clen&id={$osoba['user']}'>{$profil->getNameFromId($osoba['user'])}</a>";
	} else {
		$osoby[] = $osoba['jmeno'];
	}
}

if ($member['addFotogallery'] != 1) {
    if(count($osoby) > 0) {
        $container .= "Kdo je na fotce:";
        
        $container .= implode(', ', $osoby);
    }
} else {
    $container .= "Kdo je na fotce: ";
    foreach ($profil->getAllMembers() as $memberNum) {
        $checked = $fotogalerie->checkedOnThisFoto($memberNum['id'], $foto['id']);
        $container .= "<br><input type='checkbox' $checked onchange='changeFotoOsoba(\"{$foto['id']}\", \"{$memberNum['id']}\")'> {$profil->getNameFromId($memberNum['id'])}";
    }
}

return $container;