<?php

require_once('../include_dao.php');

$transaction = new Transaction();

$localidades = DAOFactory::getLocalidadesDAO()->queryByMunicipioId( $_GET["id"] );

echo json_encode( $localidades );

$transaction->commit();

?>