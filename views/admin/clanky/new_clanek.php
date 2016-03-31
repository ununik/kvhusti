<?php
$container = '<h2>Nový článek</h2><form action="" method="post">';
$container .= '<div class="input_form"><label for="nadpis">Nadpis:</label>';
$container .= "<input type='text' id='nadpis' name='nadpis' value='$nadpis' placeholder='Nadpis'></div>";
$container .= "<textarea name='text' class='textarea_editor'>$text</textarea>";
$container .= '<input type="submit" value="Uložit"></form>';

$container .= '<script>tinymce.init({ selector:"textarea" });</script>';

return $container;