<?php
$container = '<h3>Zájmy</h3>';
$container .= '<ul>';
foreach ($allZajem as $zajem) {
    $container .= "<li>{$zajem['text']}</li>";
}
$container .= '</ul>';

return $container;