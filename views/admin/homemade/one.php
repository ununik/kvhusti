<?php
$container = "<h2>{$homemade['title']}</h2>";
$container .= $homemade['description'];
$container .= '<ol>';
foreach ($homeMadeClass->getAllFilesForId($homemade['id']) as $file) {
    $container .= '<li><a href="'.$file['path'].'" target="_blank">'.$file['title'].' ['.$file['type'].']</a></li>';
}
$container .= '</ol>';

return $container;