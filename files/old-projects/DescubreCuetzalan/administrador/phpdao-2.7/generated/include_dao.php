<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/ImagenesDAO.class.php');
	require_once('class/dto/Imagene.class.php');
	require_once('class/mysql/ImagenesMySqlDAO.class.php');
	require_once('class/mysql/ext/ImagenesMySqlExtDAO.class.php');
	require_once('class/dao/RecorridoDAO.class.php');
	require_once('class/dto/Recorrido.class.php');
	require_once('class/mysql/RecorridoMySqlDAO.class.php');
	require_once('class/mysql/ext/RecorridoMySqlExtDAO.class.php');

?>