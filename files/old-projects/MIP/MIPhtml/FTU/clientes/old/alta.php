<?php

require_once('../include_dao.php');


if( !empty($_POST) )
{
	$cliente = new Cliente();
	$cliente->nombre = $_POST["nombre_cliente"]; 
	$cliente->tipo = $_POST["tipo_cliente"]; 

	$transaction = new Transaction();
	
	DAOFactory::getClienteDAO()->insert( $cliente );

	$transaction->commit();

	header("Location: editar.php?id=".$cliente->id );

	die();
}


$content="alta_form.php";

include "../plantilla/plantilla.php";


?>
