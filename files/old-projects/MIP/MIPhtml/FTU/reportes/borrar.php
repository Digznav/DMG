<?php
require_once('../include_dao.php');

$transaction = new Transaction();
switch( $_POST["action"]  )
{
	case "removeReporte":	
		$idReporte = $_POST["idReporte"];
		DAOFactory::getReporteDAO()->delete( $idReporte );
	break;
} 
$transaction->commit();

include "index.php";
?>
