<?php
$container = '<h2>Nový článek</h2><form action="" method="post">';
$container .= '<div><label for="nadpis">Nadpis</label>';
$container .= "<input type='text' id='nadpis' name='nadpis' value='$nadpis'></div>";
$container .= "<textarea name='text'>$text</textarea>";
$container .= '<input type="submit" value="Uložit"></form>';

return $container;