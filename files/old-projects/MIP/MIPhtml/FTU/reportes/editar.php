<?php

require_once('../include_dao.php');

$transaction = new Transaction();
$reporte = DAOFactory::getReporteDAO()->load( $_GET["id"] );
//$catestados = DAOFactory::getEstadosDAO()->queryAll();
//echo "responsale: " . $reporte->responsable;

if( !empty($_POST) ) {
				$reporte->Id = $_POST["Id_reporte"]; // No
				$reporte->idCliente = $_POST["id_cliente"]; // Si 
				$reporte->idTecnico = 8;//$_POST["idTecnico_reporte"]; // No
				$reporte->folio = $_POST["Folio_reporte"]; // No
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
				$reporte->status = $_POST["Status_reporte"]; // Si
				$reporte->timestamp = $_POST["Timestamp_reporte"]; // No

	$transaction = new Transaction();
	DAOFactory::getReporteDAO()->update( $reporte );
	$transaction->commit();
}


$content="editar_form.php";
include "../plantilla/plantilla.php"
?>
