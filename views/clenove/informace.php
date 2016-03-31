<?php
$container = '';
if($member['vKlubuOd'] != "") {
    $container .= '<h3>Informace</h3>';
    $container .= '<table>';
    $container .= "<tr><td>Člen klubu od:</td><td>{$member['vKlubuOd']}</td></tr>";
    $container .= '</table>';
}

return $container;