<?php
$container = '';
$container .= '<h3>Kontakt</h3>';
$container .= '<table class="clenTable">';

$container .= '<tr><td class="clenTable_left">Veřejný tel: </td><td><input type="checkbox" onchange="change_show(this)" name="showTel"';
if ($member['showTel'] == true) {
	$container .= ' checked ';
}
$container .= '></td></tr>';

$container .= '<tr><td class="clenTable_left">Veřejný email: </td><td><input type="checkbox" onchange="change_show(this)" name="showMail"';
if ($member['showMail'] == true) {
	$container .= ' checked ';
}
$container .= '></td></tr>';

$container .= '<tr><td class="clenTable_left">Veřejný facebook: </td><td><input type="checkbox" onchange="change_show(this)" name="showFacebook"';
if ($member['showFacebook'] == true) {
	$container .= ' checked ';
}
$container .= '></td></tr>';

$container .= "<tr><td class='clenTable_left'>tel:</td><td><input type='text' onchange='change_data(this)' value='{$member['tel']}' name='tel'></td></tr>";
$container .= "<tr><td class='clenTable_left'>mail:</td><td><input type='text' onchange='change_data(this)' value='{$member['mail']}' name='mail'></td></tr>";
$container .= "<tr><td class='clenTable_left'>facebook:</td><td><input type='text' onchange='change_data(this)' value='{$member['facebook']}' name='facebook'></td></tr>";
$container .= '</table>';

return $container;