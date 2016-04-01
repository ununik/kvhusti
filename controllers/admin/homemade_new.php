<?php
$homeMadeClass = new HomeMade();
$member = $profil->getMember($profil->getId());
if ($member['addHomeMade'] != 1) {
    return 'controllers/admin/homemade.php';
}
$page->addScript('<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>');
$nadpis = '';
$text = '';

if (isset($_POST['title'])) {
    $lastId = $homeMadeClass->createNew($profil->getId(), $_POST['title'], $_POST['text']);
    header('location: admin.php?page=homemade_upload_files&id=' . $lastId);
}

return include'views/admin/homemade/new.php';