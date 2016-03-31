<?php
$container = '';
if (
		($member['showMail'] == 1 && $member['mail'] != "") ||
		($member['showFacebook'] == 1 && $member['facebook'] != "") ||
		($member['showTel'] == 1 && $member['tel'] != "")
) {
	$container .= '<h3>Kontakt</h3>';
	$container .= '<table class="clenTable">';
	if ($member['showTel'] == 1 && $member['tel'] != "") {
		$container .= "<tr><td class='clenTable_left'>tel:</td><td>{$member['tel']}</td></tr>";
	}
	if ($member['showMail'] == 1 && $member['mail'] != "") {
		$container .= "<tr><td class='clenTable_left'>mail:</td><td>{$member['mail']}</td></tr>";
	}
	if ($member['showFacebook'] == 1 && $member['facebook'] != "") {
		$container .= "<tr><td class='clenTable_left'>facebook:</td><td><a href='{$member['facebook']}' target='_blank'>odkaz</a></td></tr>";
	}

	$container .= '</table>';
}

return $container;