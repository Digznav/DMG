<?php
require_once('../include_dao.php');
$tecnico = new Tecnico();
if( !empty($_POST) ) {	
	$tecnico->nombre = $_POST["nombre_tecnico"]; 
	$tecnico->email = $_POST["email_tecnico"]; 
	$tecnico->tel = $_POST["tel_tecnico"]; 
	$tecnico->acceso = $_POST["acceso_tecnico"]; 
	$transaction = new Transaction();
	DAOFactory::getTecnicoDAO()->insert( $tecnico );
	
	if ( $tecnico->acceso == "S" ){
		Security::registerUser($tecnico->email, $tecnico->nombre, "Tecnico");
	}
	else{
		DAOFactory::getAccesoDAO()->delete( $tecnico->email );	
	}
	
	$transaction->commit();
	header("Location: editar.php?id=".$tecnico->id );
	die();
}
$content="alta_form.php";
include "../plantilla/plantilla.php";
?>
