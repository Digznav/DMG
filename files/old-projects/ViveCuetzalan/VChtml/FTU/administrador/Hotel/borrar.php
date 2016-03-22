<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}

//http://stackoverflow.com/questions/3349753/delete-directory-with-files-in-it
//public static function deleteDir($dirPath) {
/*function deleteDir($dirPath) {
	if (! is_dir($dirPath)) {
		throw new InvalidArgumentException("$dirPath must be a directory");
	}
	if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
		$dirPath .= '/';
	}
	$files = glob($dirPath . '*', GLOB_MARK);
	foreach ($files as $file) {
		if (is_dir($file)) {
			self::deleteDir($file);
		} else {
			unlink($file);
		}
	}
	rmdir($dirPath);
}*/

/*function deleteDir($dirPath) {
	if (!is_dir($dirPath)) {
		throw new InvalidArgumentException("$dirPath must be a directory");
	}
	if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
		$dirPath .= '/';
	}
	$files = scandir($dirPath); 
	foreach ($files as $file) {
		if ($file === '.' || $file === '..') continue;
		if (is_dir($dirPath.$file)) {
			deleteDir($dirPath.$file);
		} else {
			if ($dirPath.$file !== __FILE__) {
				unlink($dirPath.$file);
			}
		}
	}
	rmdir($dirPath);
}*/

/*function deleteDir($src) { 
	$dir = opendir($src);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				deleteDir($src . '/' . $file);
			}
			else {
				unlink($src . '/' . $file);
			}
		}
	}
	rmdir($src);
	closedir($dir);
}*/

$idHotel = $_GET['id'];
$hotel = DAOFactory::getHotelDAO()->load( $idHotel );
$vc = explode('/',$hotel->logo);
array_pop($vc);
//$delDir = '../../'.$vc[0].'/'.$vc[1].'/'.$vc[2].'/';

//deleteDir($delDir);

$transaction = new Transaction();

if ($_GET['deleteAll'] || $_GET['del1'] ) {
	DAOFactory::getHotelDAO()->delete($idHotel);
}
if ($_GET['deleteAll'] || $_GET['del2'] ) {
	DAOFactory::getHabitacionesDAO()->deleteByIdHotel($idHotel);
}
if ($_GET['deleteAll'] || $_GET['del3'] ) {
	DAOFactory::getServiciosHotelDAO()->deleteByIdHotel($idHotel);
}
if ($_GET['deleteAll'] || $_GET['del4'] ) {
	DAOFactory::getFotosHotelDAO()->deleteByIdHotel($idHotel);
}
$transaction->commit();

header('Location:index.php', true, 303);
die();
?>