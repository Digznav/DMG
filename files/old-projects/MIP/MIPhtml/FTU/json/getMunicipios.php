<?php

require_once('../include_dao.php');

$transaction = new Transaction();

$municipios = DAOFactory::getMunicipiosDAO()->queryByEstadoId( $_GET["id"] );

echo json_encode( $municipios );

$transaction->commit();

?>