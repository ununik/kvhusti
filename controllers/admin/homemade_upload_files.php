<?php
$member = $profil->getMember($profil->getId());
if (!isset($_GET['id']) || $_GET['id'] == "" || $member['addFotogallery'] != 1) {
    return 'controllers/admin/homemade.php';
}

return include 'views/admin/homemade/upload_file.php';