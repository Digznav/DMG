<?php
require_once('../include_dao.php');
$tecnicos = DAOFactory::getTecnicoDAO()->queryAll();
$content = "index_form.php";
include "../plantilla/plantilla.php";
?>
