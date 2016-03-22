<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}

$idActividad = $_GET['id'];
$actividad = DAOFactory::getActividadesDAO()->load( $idActividad );
$vc = explode('/',$actividad->logo);
array_pop($vc);
//$delDir = '../../'.$vc[0].'/'.$vc[1].'/'.$vc[2].'/';

$transaction = new Transaction();

if ($_GET['deleteAll'] || $_GET['del1'] ) {
	DAOFactory::getActividadesDAO()->delete($idActividad);
}
if ($_GET['deleteAll'] || $_GET['del2'] ) {
	DAOFactory::getServiciosActivDAO()->deleteByIdActiv($idActividad);
}
if ($_GET['deleteAll'] || $_GET['del3'] ) {
	DAOFactory::getFotosActivDAO()->deleteByIdActiv($idActividad);
}
$transaction->commit();

header('Location:index.php', true, 303);
die();
?>