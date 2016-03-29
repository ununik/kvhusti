<?php
$container = '';
if (count($allEntriesForMember) > 0) {
	$container .= '<h3>Články</h3><ul>';
	foreach ($allEntriesForMember as $entry) {
		$container .= "<li><a href='index.php?page=clanek&id={$entry['id']}'>{$entry['title']}</a></li>";
	}
	$container .= '</ul>';
	
}

return $container;