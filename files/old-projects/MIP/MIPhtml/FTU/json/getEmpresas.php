<?php

require_once('../include_dao.php');

$transaction = new Transaction();

$empresas = DAOFactory::getDatosEmpresaDAO()->queryByIdCliente( $_GET["id"] );

echo json_encode( $empresas );

$transaction->commit();

?>