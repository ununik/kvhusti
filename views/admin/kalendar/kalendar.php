<?php
$container = '<div id="zmena_obdobi">';
$container .= "<a href='admin.php?page=kalendar&year=$previousYear'>$previousYear</a> <a href='admin.php?page=kalendar&year=$thisYear' class='activeYear'>$thisYear</a> <a href='admin.php?page=kalendar&year=$nextYear'>$nextYear</a>";
$container .= '</div>';

$monthNum = 0;

for ($i=0; $i< count($event); $i++) {
    $monthNum++;
    for($monthNum; $monthNum <= date('n', $event[$i]['from']); $monthNum++) {
        $container .= "<h3>{$months[$monthNum]}</h3>";
    }
    $monthNum = date('n', $event[$i]['from']);
    
    
    
    $container .= '<div>';
    $container .= '<span class="kalendar_date">'.$page->getReadableDate($event[$i]['from'], $event[$i]['to']).'</span>';
    $container .= '<a href="admin.php?page=udalost&id='.$event[$i]['id'].'">'.$event[$i]['title'].'</a>';
    
    $container .= '</div>';
}
$monthNum++;
for($monthNum; $monthNum <= 12; $monthNum++) {
    $container .= "<h3>{$months[$monthNum]}</h3>";
}

return $container;