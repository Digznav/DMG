<?php
require_once('../include_dao.php');
$clientes = DAOFactory::getClienteDAO()->queryAll();
$content = "index_form.php";
include "../plantilla/plantilla.php";
?>
