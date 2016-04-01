<?php
if ($member['addFotogallery'] == 1) {
    $container = '<form action="" method="post"><div  class="input_form"><label for="title">Název alba</label>';
    $container .= '<input type="text" name="title" id="title" value="'.$gallery['title'].'"></div>';
    $container .= '<div><label>Datum</label>';
    $container .= '<input type="date" name="date" value="'.$date1.'"> - <input type="date" name="date2" value="'.$date2.'"></div>';
    $container .= '<div><label for="description">Popis</label>';
    $container .= '<textarea id="description" name="description" class="textarea_editor">'.$gallery['description'].'</textarea></div>';
    $container .= '<input type="submit" value="Uložit"></form>';
    $container .= '<div class="galleryWrapper">';
	$container .= '<div class="galleryWrapperIMG">';
	$container .= "<a href='admin.php?page=add_foto&id={$gallery['id']}'><img src='images/newPlus.png' class='img_uniformy'></a>";
	$container .= '</div>';
} else {
    $container = "<h2>{$gallery['title']} ($date)</h2>";
    $container .= "<p>{$gallery['description']}</p>";
    $container .= '<div class="galleryWrapper">';
}
foreach ($fotogalerie->getAllFotoFromGallery($gallery['id']) as $foto) {
	$container .= '<div class="galleryWrapperIMG">';
	if ($member['addFotogallery'] == 1) {
	   $container .= "<div onclick='deleteFoto(\"{$foto['id']}\")' class='galleryWrapperIMG_smazat'>smazat</div>";
	}
	$container .= "<a href='{$foto['pathBig']}' rel='lightbox[gallery]'>";
	$container .= "<img src='{$foto['path']}' class='img_uniformy'>";
	$container .= '</a>';
	$container .= "<a href='admin.php?page=foto_detail&id={$foto['id']}' class='galleryWrapperIMG_detail'>detail</a>";
	$container .= '</div>';
}
$container .= '</div>';
$container .= '<script>tinymce.init({ selector:"textarea" });</script>';

return $container;