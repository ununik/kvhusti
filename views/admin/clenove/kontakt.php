<?php
$container = '';
$container .= '<h3>Kontakt</h3>';
$container .= '<table class="clenTable">'; 
	$container .= "<tr><td class='clenTable_left'>tel:</td><td>{$member['tel']}</td></tr>";
	$container .= "<tr><td class='clenTable_left'>mail:</td><td>{$member['mail']}</td></tr>";
	$container .= "<tr><td class='clenTable_left'>facebook:</td><td><a href='{$member['facebook']}' target='_blank'>odkaz</a></td></tr>";
$container .= '</table>';

return $container;