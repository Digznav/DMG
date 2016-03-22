<?php
	include 'conexion.php';

	$arraySearchResults = array();
	$resResults = array();

	/*$_REQUEST['sBrand'] = 49;
	$_REQUEST['sModel'] = 581;*/

	if ( isset($_REQUEST['sBrand']) && isset($_REQUEST['sModel']) ){

		$getResultBrand = mysqli_query ($conexion, 'SELECT * FROM marcas WHERE id_marca=' . $_REQUEST['sBrand'] . ' LIMIT 1' );
		if (!$getResultBrand) { die('Consulta no válida ' . mysqli_error($conexion)); }
		else {
			$resBrand = mysqli_fetch_assoc($getResultBrand);
			$arraySearchResults['marcaDescrip'] = $resBrand;
		}
		
		/*$getResultModel = mysqli_query ($conexion, 'SELECT * FROM modelos WHERE id_modelo=' . $_REQUEST['sModel'] . ' ORDER BY modelo LIMIT 1');*/
		$getResultModel = mysqli_query ($conexion, 'SELECT * FROM modelos WHERE id_modelo=' . $_REQUEST['sModel'] . ' ORDER BY id_modelo, modelo LIMIT 1');
		if (!$getResultModel) { die('Consulta no válida ' . mysqli_error($conexion)); }
		else {
			$resModel = mysqli_fetch_assoc($getResultModel);
			$arraySearchResults['modeloDescrip'] = $resModel;

			$getResultMaterials = mysqli_query ($conexion, 'SELECT (SELECT material FROM materiales WHERE id_material = p.id_material) AS material, p.id_categoria AS IdCatMod, p.id_material AS IdMaterial, p.id_productos AS idproducto, p.precio, p.clave FROM productos p WHERE p.id_marca = ' . $_REQUEST['sBrand'] . ' AND p.id_modelo = ' . $_REQUEST['sModel'] . ' AND p.id_material!= 7 LIMIT 8');
			if (!$getResultMaterials) { die('Consulta no válida ' . mysqli_error($conexion)); }
			else {
				$cont = 0;
				while ($resMaterial = mysqli_fetch_assoc($getResultMaterials)) {
					$resResults[$cont] = $resMaterial;
					$cont++;
				}

				$arraySearchResults['resultadosBusqueda'] = $resResults;
			}
		}
		echo json_encode($arraySearchResults);
	}

?>