<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {
    return include 'controllers/admin/homemade.php';
}
$homeMadeClass = new HomeMade();
$homemade = $homeMadeClass->getOne($_GET['id']);

return include 'views/admin/homemade/one.php';