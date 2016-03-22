<?php
require_once('../include_dao.php');
$reportes = DAOFactory::getReporteDAO()->queryAll();
$content = "index_form.php";
include "../plantilla/plantilla.php";
?>