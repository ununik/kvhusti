<?php
$container = '<h2>Vlastní výroba</h2>';
if ($member['addHomeMade'] == 1) {
    $container .= '<a href="admin.php?page=homemade_new">přidat nové</a>';
}
foreach ($homeMadeClass->getAll() as $homemade) {
    $container .= '<div class="entries_all">';
    $container .= "<h3 class='entries_all_h3'><a href='admin.php?page=homemade_one&id={$homemade['id']}'>{$homemade['title']}</a></h3>";
    if($homemade['author'] == $profil->getId()) {
        $container .= 'upravit';
        $container .= '<span onclick="delVlastniVyroba(\''.$homemade['id'].'\')">smazat</span>';
    }
    $container .= '</div>';
}

$container .= '<div id="cislovani_stranek">';
$pages = $homeMadeClass->getPageCount();
if ($pages > 1) {
    for ($i = 1; $i <= $pages; $i++) {
        if ($i != $homeMadeClass->getPageNumber()) {
            $container .= "<a href='admin.php?page=fotogalerie&pageNum=$i'>$i</a>";
        } else {
            $container .= "<a href='admin.php?page=fotogalerie&pageNum=$i' id='aktualniStrana'>$i</a>";
        }
    }
}
$container .= '</div>';

return $container;