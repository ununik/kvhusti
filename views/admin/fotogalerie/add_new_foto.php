<?php
$container = '<h2>Přidat nové fotky do alba</h2>';
$container .= '<input type="file" id="fotos" name="project_image[]" multiple="multiple" onchange="for(var i=0; i<this.files.length;i++) { ajaxSaveUploaded(this.files[i]);};">';
$container .= '<div id="uploadedFile"></div>';
$container .= '<input type="submit" value="nahrát fotky" onclick="uploadFoto()">';

return $container;