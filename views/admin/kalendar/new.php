<?php
$container = '<h2>Kalendář</h2>';
$container .= '<h3>Nová událost</h3><form action="" method="post">';
$container .= '<div class="input_form"><label for="nadpis">Název:</label>';
$container .= "<input type='text' id='nadpis' name='nadpis' placeholder='Název' value='$nadpis'></div>";
$container .= '<div class="input_form"><label for="misto">Místo:</label>';
$container .= "<input type='text' id='misto' name='misto' placeholder='Místo' value='$misto'></div>";
$container .= '<div class="input_form"><label for="od">od:</label>';
$container .= "<input type='date' id='od' name='od' value='$od'></div>";
$container .= '<div class="input_form"><label for="do" >do:</label>';
$container .= "<input type='date' id='do' name='do' value='$do'></div>";
$container .= '<div class="input_form"><label for="poradatel">Pořadatel:</label>';
$container .= "<input type='text' id='poradatel' name='poradatel' placeholder='Pořadatel' value='$poradatel'></div>";
$container .= "<textarea name='text' class='textarea_editor'>$text</textarea>";
$container .= '<input type="submit" value="Uložit"></form>';

$container .= '<script>tinymce.init({ selector:"textarea" });</script>';

return $container;