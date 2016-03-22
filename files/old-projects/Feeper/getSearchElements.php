<?php
	include 'conexion.php';

	$primerElemBusq = array();
	$segundoElemBusq = array();
	$resultMarcas = array();
	$resultModelos = array();

	/*$_GET['category'] = 1;*/
	/*$_GET['brandCategory'] = 2;
	$_GET['brand'] = 49;*/
	
	if ( isset($_GET['category']) ){
		$getCategoria = mysqli_query ($conexion, 'SELECT * FROM categorias WHERE id_categoria =' . $_GET['category'] );
		if (!$getCategoria) { die('Consulta no válida ' . mysqli_error($conexion)); }
		else {
			$Categoria = mysqli_fetch_assoc($getCategoria);
			$primerElemBusq['category'] = $Categoria;
		}
			
		$getMarcas = mysqli_query ($conexion, 'SELECT id_marca, marca FROM marcas WHERE id_marca IN (SELECT DISTINCT (id_marca) FROM productos WHERE id_categoria =' . $_GET['category'] . ') ORDER BY marcas.marca ASC' );
		if(!$getMarcas) { die('Invalid: ' . mysqli_error($conexion)); }
		else {
			$cont = 0;
			while ($Marcas = mysqli_fetch_assoc($getMarcas)) {
				$resultMarcas[$cont] = $Marcas;
				$cont++;
			}
			$primerElemBusq['brands'] = $resultMarcas;
		}
		echo json_encode($primerElemBusq);
	}
	
	if ( isset($_GET['brand']) && isset($_GET['brandCategory']) ){
		$segundoElemBusq['id_marca'] = $_GET['brand'];

		$getModelos = mysqli_query ($conexion, 'SELECT id_modelo, modelo, id_marca FROM modelos WHERE id_modelo IN (SELECT id_modelo FROM productos WHERE id_categoria=' . $_GET['brandCategory'] . ') ORDER BY modelos.modelo ASC');
		if (!$getModelos) { die('Consulta no válida ' . mysqli_error($conexion)); }
		else {
			$cont = 0;
			while ($Modelos = mysqli_fetch_assoc($getModelos)) {
				if ($Modelos['id_marca'] == $_GET['brand'] ){
					$resultModelos[$cont] = $Modelos;
					$cont++;
				}
			}
			$segundoElemBusq['models'] = $resultModelos;
		}
		echo json_encode($segundoElemBusq);
	}
?>