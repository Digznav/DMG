<?php
if (!loggedin()) {
	if ($root) { header('Location:/index.php'); }
	else { header('Location:/'); }
	exit();
}
?>