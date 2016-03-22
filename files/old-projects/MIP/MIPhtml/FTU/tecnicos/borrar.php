<?php
require_once('../include_dao.php');

$transaction = new Transaction();
switch( $_POST["action"]  )
{
	case "removeTecnico":	
		$idTecnico = $_POST["idTecnico"];
		DAOFactory::getTecnicoDAO()->delete( $idTecnico );
		DAOFactory::getAccesoDAO()->delete( $tecnico->email );	
	break;

} 
$transaction->commit();

include "index.php";
?>

