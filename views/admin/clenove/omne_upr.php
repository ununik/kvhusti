<?php
$container = '<h3>Zájmy</h3>';
$container .= '<ul>';
foreach ($profil->getAllZajmy($profil->getId()) as $zajem) {
    $container .= "<li><input type='text' value='{$zajem['text']}' id='zajem_{$zajem['id']}'><input type='submit' value='uložit' onclick='changeZajem(\"{$zajem['id']}\")'><input type='submit' value='smazat'  onclick='deleteZajem(\"{$zajem['id']}\")'></li>";
}
$container .= "<li><input type='text' id='newZajem'><input type='submit' onclick='addNewZajem(\"{$profil->getId()}\")' value='uložit'></li>";
$container .= '</ul>';

return $container;