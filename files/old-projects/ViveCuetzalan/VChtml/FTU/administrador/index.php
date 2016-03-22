<?php session_start();
if (isset($_SESSION['k_username'])) {
	header('Location:inicio.php', true, 303);
	die();
}
include('libs/validar_usuario.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/admin.css">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<header class="clearfix">
				<a href="index.php" class="logo">Vive Cuetzalan HOY</a>
				<div class="deco1 clearfix"></div>
			</header>

			<div class="cont onlyText clearfix">
				<h2 class="sectionTitle">Inicio de sesión</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<label for="user">Usuario: </label><input type="text" name="user" id="user"><br>
					<label for="pass">Contraseña: </label><input type="password" name="password" id="pass">
					<!-- <input type="submit" name="submit" value="Entrar"> -->
					<button type="submit" name="submit" class="isButton">Ingresar</button>
				</form>
			</div>

		</div>

		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/query.min.js"></script>
	</body>
</html>