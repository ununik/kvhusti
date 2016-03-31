<?php
$container = '<h3>Mé údaje</h3>';
$container .= '<table class="clenTable">';
$container .= "<tr><td class='clenTable_left'>Jméno:</td><td><input type='text' onchange='change_data(this)' value='{$member['jmeno']}' name='jmeno'></td></tr>";
$container .= "<tr><td class='clenTable_left'>Příjmení:</td><td><input type='text' onchange='change_data(this)' value='{$member['prijmeni']}' name='prijmeni'></td></tr>";
$container .= "<tr><td class='clenTable_left'>Přezdívka:</td><td><input type='text' onchange='change_data(this)' value='{$member['prezdivka']}' name='prezdivka'></td></tr>";
$container .= "<tr><td class='clenTable_left'>Login:</td><td><input type='text' onchange='change_data(this)' value='{$member['login']}' name='login'></td></tr>";

$container .= '</table>';

return $container;