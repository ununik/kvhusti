<?php
$galerie = new Fotogalerie();
$galerie = $galerie->getAllGaleries();
$udalost = new Kalendar();
$udalost = $udalost->getAll();

if (count($galerie) > count($udalost)) {
   $count = count($galerie);
} else {
    $count = count($udalost);
}

$container = '<table>';
$container .= '<tr><th>Připojit galerii</th><th>Připojit událost</th></tr>';
for ($i = 0; $i < $count; $i++) {
    $container .= '<tr><td>';
    if (isset($galerie[$i]['id'])) {
        $container .= '<input type="checkbox">'.$galerie[$i]['title'];
    }
    $container .= '</td><td>';
    if (isset($udalost[$i]['id'])) {
        $container .= '<input type="checkbox">'.$udalost[$i]['title'];
    }
    $container .= '</td></tr>';
}
$container .= '</table>';

return $container;