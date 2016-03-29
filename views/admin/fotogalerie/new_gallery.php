<?php
$container = '<h2>Nové album</h2><form action="" method="post">';
$container .= '<div><label for="title">Název alba</label>';
$container .= '<input type="text" name="title" id="title"></div>';
$container .= '<div><label>Datum</label>';
$container .= '<input type="date" name="date1"> - <input type="date" name="date2"></div>';
$container .= '<div><label for="description">Popis</label>';
$container .= '<textarea id="description" name="description"></textarea></div>';
$container .= '<input type="submit" value="Uložit a přejít k nahrávání fotek"></form>';

return $container;