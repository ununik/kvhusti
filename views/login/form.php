<?php
$container = '<form action="" method="post">';
$container .= "<div class='admin_log_from_div'><label for='login'>login:</label>";
$container .= "<input type='text' id='login' name='login'></div>";
$container .= "<div class='admin_log_from_div'><label for='password'>heslo:</label>";
$container .= "<input type='password' id='password' name='password'></div>";
$container .= '<input type="submit" value="přihlásit se" class="admin_log_from_submit">';
$container .= '</from>';

return $container;