<?php
$container = '<h3>Zájmy</h3>';
$container .= '<ul>';
foreach ($profil->getAllZajmy($member['id']) as $zajem) {
    $container .= "<li>{$zajem['text']}</li>";
}
$container .= '</ul>';

return $container;