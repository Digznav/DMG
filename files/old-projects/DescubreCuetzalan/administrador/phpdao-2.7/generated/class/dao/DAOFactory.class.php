<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return ImagenesDAO
	 */
	public static function getImagenesDAO(){
		return new ImagenesMySqlExtDAO();
	}

	/**
	 * @return RecorridoDAO
	 */
	public static function getRecorridoDAO(){
		return new RecorridoMySqlExtDAO();
	}


}
?>