<?php
require_once('../include_dao.php');

$tecnico = DAOFactory::getTecnicoDAO()->load( $_GET["id"] );

if( !empty($_POST) ) {
	$tecnico->nombre = $_POST["nombre_tecnico"]; 
	$tecnico->email = $_POST["email_tecnico"]; 
	$tecnico->tel = $_POST["tel_tecnico"]; 
	$tecnico->acceso = $_POST["acceso_tecnico"]; 
	$transaction = new Transaction();
	DAOFactory::getTecnicoDAO()->update( $tecnico );
	if ( $tecnico->acceso == "S" ){
		Security::registerUser($tecnico->email, $tecnico->nombre, "Tecnico");
	}
	else{
		DAOFactory::getAccesoDAO()->delete( $tecnico->email );	
	}
	$transaction->commit();
}

$content="editar_form.php";

include "../plantilla/plantilla.php"

?>
