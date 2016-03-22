<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return ActividadesDAO
	 */
	public static function getActividadesDAO(){
		return new ActividadesMySqlExtDAO();
	}

	/**
	 * @return FotosActivDAO
	 */
	public static function getFotosActivDAO(){
		return new FotosActivMySqlExtDAO();
	}

	/**
	 * @return FotosHotelDAO
	 */
	public static function getFotosHotelDAO(){
		return new FotosHotelMySqlExtDAO();
	}

	/**
	 * @return FotosRestDAO
	 */
	public static function getFotosRestDAO(){
		return new FotosRestMySqlExtDAO();
	}

	/**
	 * @return HabitacionesDAO
	 */
	public static function getHabitacionesDAO(){
		return new HabitacionesMySqlExtDAO();
	}

	/**
	 * @return HotelDAO
	 */
	public static function getHotelDAO(){
		return new HotelMySqlExtDAO();
	}

	/**
	 * @return RestaurantesDAO
	 */
	public static function getRestaurantesDAO(){
		return new RestaurantesMySqlExtDAO();
	}

	/**
	 * @return ServiciosActivDAO
	 */
	public static function getServiciosActivDAO(){
		return new ServiciosActivMySqlExtDAO();
	}

	/**
	 * @return ServiciosHotelDAO
	 */
	public static function getServiciosHotelDAO(){
		return new ServiciosHotelMySqlExtDAO();
	}

	/**
	 * @return ServiciosRestDAO
	 */
	public static function getServiciosRestDAO(){
		return new ServiciosRestMySqlExtDAO();
	}


}
?>