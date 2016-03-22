<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}

$idRestaurant = $_GET['id'];
$restaurant = DAOFactory::getRestaurantesDAO()->load( $idRestaurant );
$vc = explode('/',$restaurant->logo);
array_pop($vc);
//$delDir = '../../'.$vc[0].'/'.$vc[1].'/'.$vc[2].'/';

$transaction = new Transaction();

if ($_GET['deleteAll'] || $_GET['del1'] ) {
	DAOFactory::getRestaurantesDAO()->delete($idRestaurant);
}
if ($_GET['deleteAll'] || $_GET['del2'] ) {
	DAOFactory::getServiciosRestDAO()->deleteByIdRest($idRestaurant);
}
if ($_GET['deleteAll'] || $_GET['del3'] ) {
	DAOFactory::getFotosRestDAO()->deleteByIdRest($idRestaurant);
}
$transaction->commit();

header('Location:index.php', true, 303);
die();
?>