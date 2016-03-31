<?php
$profilClen = new Profil();
$member = $profilClen->getMember($profil->getId());
return include 'views/admin/home/basic.php';