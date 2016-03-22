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
 	
	require_once('class/dao/ActividadesDAO.class.php');
	require_once('class/dto/Actividade.class.php');
	require_once('class/mysql/ActividadesMySqlDAO.class.php');
	require_once('class/mysql/ext/ActividadesMySqlExtDAO.class.php');
	require_once('class/dao/FotosActivDAO.class.php');
	require_once('class/dto/FotosActiv.class.php');
	require_once('class/mysql/FotosActivMySqlDAO.class.php');
	require_once('class/mysql/ext/FotosActivMySqlExtDAO.class.php');
	require_once('class/dao/FotosHotelDAO.class.php');
	require_once('class/dto/FotosHotel.class.php');
	require_once('class/mysql/FotosHotelMySqlDAO.class.php');
	require_once('class/mysql/ext/FotosHotelMySqlExtDAO.class.php');
	require_once('class/dao/FotosRestDAO.class.php');
	require_once('class/dto/FotosRest.class.php');
	require_once('class/mysql/FotosRestMySqlDAO.class.php');
	require_once('class/mysql/ext/FotosRestMySqlExtDAO.class.php');
	require_once('class/dao/HabitacionesDAO.class.php');
	require_once('class/dto/Habitacione.class.php');
	require_once('class/mysql/HabitacionesMySqlDAO.class.php');
	require_once('class/mysql/ext/HabitacionesMySqlExtDAO.class.php');
	require_once('class/dao/HotelDAO.class.php');
	require_once('class/dto/Hotel.class.php');
	require_once('class/mysql/HotelMySqlDAO.class.php');
	require_once('class/mysql/ext/HotelMySqlExtDAO.class.php');
	require_once('class/dao/RestaurantesDAO.class.php');
	require_once('class/dto/Restaurante.class.php');
	require_once('class/mysql/RestaurantesMySqlDAO.class.php');
	require_once('class/mysql/ext/RestaurantesMySqlExtDAO.class.php');
	require_once('class/dao/ServiciosActivDAO.class.php');
	require_once('class/dto/ServiciosActiv.class.php');
	require_once('class/mysql/ServiciosActivMySqlDAO.class.php');
	require_once('class/mysql/ext/ServiciosActivMySqlExtDAO.class.php');
	require_once('class/dao/ServiciosHotelDAO.class.php');
	require_once('class/dto/ServiciosHotel.class.php');
	require_once('class/mysql/ServiciosHotelMySqlDAO.class.php');
	require_once('class/mysql/ext/ServiciosHotelMySqlExtDAO.class.php');
	require_once('class/dao/ServiciosRestDAO.class.php');
	require_once('class/dto/ServiciosRest.class.php');
	require_once('class/mysql/ServiciosRestMySqlDAO.class.php');
	require_once('class/mysql/ext/ServiciosRestMySqlExtDAO.class.php');

?>