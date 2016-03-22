<?php
require_once('../include_dao.php');

$transaction = new Transaction();
switch( $_POST["action"]  )
{
	case "removeCliente":	
		$idCliente = $_POST["idCliente"];
		DAOFactory::getClienteDAO()->delete( $idCliente );
	break;

} 
$transaction->commit();

include "index.php";
?>