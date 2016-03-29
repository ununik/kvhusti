<?php
if (isset($_POST['login'])) {
	$login = new Profil();
	if ($login->checkLogin($_POST['login'], md5($_POST['password']))) {
		header('location: admin.php');
	}
}

return include 'views/login/form.php';