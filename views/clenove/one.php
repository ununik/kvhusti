<?php
$container = "<h2>$jmeno</h2>";
if ($kontakt != '') {
	$container .= "<div class='block_floats'>$kontakt</div>";
}
if ($clanky != '') {
	$container .= "<div class='block_floats'>$clanky</div>";
}
if ($omne != '') {
    $container .= "<div class='block_floats'>$omne</div>";
}

$container .= '<div id="wrapper"></div>';
if($foto != '') {
	$container .= $foto;
}

return $container;