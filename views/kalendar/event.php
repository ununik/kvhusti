<?php
$container = "<h2>{$event['title']}</h2>";
$container .= '<table>';
$container .= '<tr><td>Datum:</td><td>'.$page->getReadableDate($event['from'], $event['to']).'</td></tr>';
if ($event['poradatel'] != '') {
    $container .= '<tr><td>Pořadatel:</td><td>'.$event['poradatel'].'</td></tr>';
}
if ($event['misto'] != '') {
    $container .= '<tr><td>Místo:</td><td>'.$event['misto'].'</td></tr>';
}
$container .= '</table>';
$container .= $event['popis'];

return $container;