<?
require_once('include_dao.php');

if ( $_POST["mipUser"] != '' )
{
	$username = $_POST["mipUser"];
	$password = $_POST["mipPass"];

	$errorMessage = "";

	try{

		$acceso = Security::login( $username, $password );

		$_SESSION["username"] = $username;
		$_SESSION["rol"] = $acceso->rol;

		header("Location: inicio/");		
		die();
	}catch(Exception $e)
	{
		$errorMessage = $e->getMessage(); 	
	}

}

?>