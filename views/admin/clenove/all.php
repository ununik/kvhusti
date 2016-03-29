<?php
$container = '<h2>Členové</h2><ul>';
foreach ($profilClenove->getAllMembers() as $member) {
	$container .= "<li><a href='admin.php?page=clen&id={$member['id']}'>{$profil->getNameFromId($member['id'])}</a></li>";
}
$container .= '</ul>';

return $container;