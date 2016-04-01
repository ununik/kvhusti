<?php
$container = '<h2>Nová položka vlastní výroby</h2><form action="" method="post">';
$container .= '<div class="input_form"><label for="nadpis">Nadpis:</label>';
$container .= "<input type='text' id='nadpis' name='title' value='$nadpis' placeholder='Nadpis'></div>";
$container .= "<textarea name='text' class='textarea_editor'>$text</textarea>";
$container .= '<br><input type="submit" value="Uložit"></form>';

$container .= '<script>tinymce.init({ selector:"textarea" });</script>';

return $container;