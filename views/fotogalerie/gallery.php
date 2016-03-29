<?php
$container = "<h2>{$gallery['title']} ($date)</h2>";
$container .= "<p>{$gallery['description']}</p>";

$container .= '<div class="galleryWrapper">';
foreach ($fotogalerie->getAllFotoFromGallery($gallery['id']) as $foto) {
	$container .= '<div class="galleryWrapperIMG">';
	$container .= "<a href='{$foto['pathBig']}' rel='lightbox[gallery]'>";
	$container .= "<img src='{$foto['path']}' class='img_uniformy'>";
	$container .= '</a>';
	$container .= "<a href='index.php?page=foto_detail&id={$foto['id']}' class='galleryWrapperIMG_detail'>detail</a>";
	$container .= '</div>';
}
$container .= '</div>';

return $container;