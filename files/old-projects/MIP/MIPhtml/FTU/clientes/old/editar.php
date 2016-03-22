<?php

require_once('../include_dao.php');

$transaction = new Transaction();

$cliente = DAOFactory::getClienteDAO()->load( $_GET["id"] );

$catestados = DAOFactory::getEstadosDAO()->queryAll();

echo $_POST["action"];

switch( $_POST["action"]  )
{
	case "updCliente":
		$cliente->nombre = $_POST["nombre_cliente"]; 
		DAOFactory::getClienteDAO()->update( $cliente );
	break;
	case "addEmpresa":
		$newDatoEmpresa = new DatosEmpresa();
		$newDatoEmpresa->idCliente = $cliente->id;
		$newDatoEmpresa->nombre = $_POST["nombre"];
		$newDatoEmpresa->direccion = $_POST["direccion"];
		$newDatoEmpresa->idEstado = $_POST["idEstado"];
		$newDatoEmpresa->idCiudad = $_POST["idCiudad"];
		$newDatoEmpresa->idMpio = $_POST["idMpio"];
		DAOFactory::getDatosEmpresaDAO()->insert( $newDatoEmpresa );
	break;
	case "updEmpresa":
		$datoEmpresa = new DatosEmpresa();
		$datoEmpresa->idCliente = $cliente->id;
		$datoEmpresa->idEmpresa = $_POST["idEmpresa"];
		$datoEmpresa->nombre = $_POST["nombre"];
		$datoEmpresa->direccion = $_POST["direccion"];
		$datoEmpresa->idEstado = $_POST["idEstado"];
		$datoEmpresa->idCiudad = $_POST["idCiudad"];
		$datoEmpresa->idMpio = $_POST["idMpio"];
		DAOFactory::getDatosEmpresaDAO()->update( $datoEmpresa );	
	break;
	case "removeEmpresa":
		$idEmpresa = $_POST["idEmpresa"];
		DAOFactory::getDatosEmpresaDAO()->delete( $idEmpresa );
	break;
	case "addContacto":
		$contacto = new Contacto();
		$contacto->idCliente = $_POST["idEmpresa"];
		$contacto->nombre = $_POST["nombre"];
		$contacto->cargo = $_POST["cargo"];
		$contacto->email = $_POST["email"];
		$contacto->telefono = $_POST["telefono"];
		$contacto->ext = $_POST["ext"];
		DAOFactory::getContactoDAO()->insert( $contacto );
	break;
	case "updContacto":
		$contacto = new Contacto();
		$contacto->id = $_POST["idContacto"];
		$contacto->idCliente = $_POST["idEmpresa"];
		$contacto->nombre = $_POST["nombre"];
		$contacto->cargo = $_POST["cargo"];
		$contacto->email = $_POST["email"];
		$contacto->telefono = $_POST["telefono"];
		$contacto->ext = $_POST["ext"];
		DAOFactory::getContactoDAO()->update( $contacto );
	break;
	case "removeContacto":
		$idContacto = $_POST["idContacto"];
		DAOFactory::getContactoDAO()->delete( $idContacto );
	break;

} 


$datosEmpresaArr = DAOFactory::getDatosEmpresaDAO()->queryByIdCliente( $cliente->id );
$contactosArr= array( Count( $datosEmpresaArr ) );

for($i=0 ; $i < Count( $datosEmpresaArr ) ; $i++ )
{
	$datosEmpresa = $datosEmpresaArr[$i];
	$contactosArr[$i] = DAOFactory::getContactoDAO()->queryByIdCliente( $datosEmpresa->id );
}


$transaction->commit();


$content="editar_form.php";

include "../plantilla/plantilla.php"
?>
