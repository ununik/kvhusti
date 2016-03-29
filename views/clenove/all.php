<?php
$container = '<h2>Členové</h2><ul>';
foreach ($profil->getAllMembers() as $member) {
	$container .= "<li><a href='index.php?page=clen&id={$member['id']}'>{$profil->getNameFromId($member['id'])}</a></li>";
}
$container .= '</ul>';

return $container;