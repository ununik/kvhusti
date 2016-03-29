<?php
$container = '<h3>Fotografie</h3>';
$container .= '<div class="galleryWrapper">';
foreach ($fotogalerie->getAllFotoFromOsobyNaFotkach($_GET['id']) as $foto) {
	$container .= '<div class="galleryWrapperIMG">';
	$container .= "<div onclick='deleteOsobaNaObrazku(\"{$foto['id']}\", \"{$profil->getId()}\")' class='galleryWrapperIMG_smazat'>smazat označení</div>";
	$container .= "<a href='{$foto['pathBig']}' rel='lightbox[gallery]'>";
	$container .= "<img src='{$foto['path']}' class='img_uniformy'>";
	$container .= '</a>';
	$container .= "<a href='admin.php?page=foto_detail&id={$foto['id']}' class='galleryWrapperIMG_detail'>detail</a>";
	$container .= '</div>';
}
$container .= '</div>';

return $container;