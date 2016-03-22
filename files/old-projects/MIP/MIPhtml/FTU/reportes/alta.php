<?php
require_once('../include_dao.php');
$tecnico = DAOFactory::getTecnicoDAO()->queryByEmail($_SESSION["username"]);
$clientes = DAOFactory::getClienteDAO()->queryAll();

// echo "id del tecnico: " . $tecnico->id;

if( !empty($_POST) ) {
	
	$cliente = DAOFactory::getClienteDAO()->load( $_POST["id_cliente"]);
	$str = $cliente->nombre;
	$inicialesCliente = strtoupper(substr($str,0,3));

	$numEmpresa = $_POST["id_empresa"];
	$numeroEmp = "";
	if($numEmpresa > 0 && $numEmpresa < 9)
	{
		$numeroEmp = "0" . $numEmpresa;
	}
	else
	{
		$numeroEmp = $numEmpresa; 	
	}

	$today = date("dmY");

	$ultimoId = DAOFactory::getReporteDAO()->queryMaxId();
	if($ultimoId > 99)
	{
		$ultimoId = $ultimoId - 99;
	}
	if($ultimoId > 198)
	{
		$ultimoId = $ultimoId - 100;
	}
	$nuevoId = $ultimoId->id + 1;

	$folioFinal = $inicialesCliente . $numeroEmp . $today . $nuevoId;
	
	$reporte = new Reporte();
/*	$reporte->nombre = $_POST["nombre_reporte"]; 
	$reporte->tipo = $_POST["tipo_reporte"];
*/	
	 			$reporte->Id = $_POST["Id_reporte"]; // No
				$reporte->idCliente = $_POST["id_cliente"]; // Si 
				$reporte->idTecnico = $_POST["idTecnico"];//$_POST["idTecnico_reporte"]; // No
				$reporte->folio = $folioFinal;//$_POST["Folio_reporte"]; // No
				$reporte->propuesta = $_POST["propuesta"]; //Si 
				$reporte->responsable = $_POST["responsable"]; // Si
				$reporte->fechaCompromiso = $_POST["popupDatepicker"]; // Si
				$reporte->accion = $_POST["accion"]; //Si
				$reporte->fotoInicial = $_POST["fotoInicial"]; // Si
				$reporte->fotoFinal = $_POST["fotoFinal"]; // Si
				$reporte->codigoGoogle = $_POST["codigoGoogle"]; // Si
				$reporte->comentarios = $_POST["comentarios"]; // Si
				$reporte->fecha = $_POST["Fecha_reporte"]; // No
				$reporte->hora = $_POST["Hora_reporte"]; // No
				$reporte->status = $_POST["valorStatus"]; // Si
				$reporte->timestamp = $_POST["Timestamp_reporte"]; // No

	$transaction = new Transaction();
	DAOFactory::getReporteDAO()->insert( $reporte );
	$transaction->commit();
	header("Location: editar.php?id=".$reporte->id );
	die();
}
$content="alta_form.php";
include "../plantilla/plantilla.php";
?>
