<?php
	/**
	 * Object represents table 'Acceso'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2013-11-06 22:04	 
	 */
	class Acceso{
		

		var $usuario;

		var $contrasenia;

		var $rol;

		public static function generatePassword($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, strlen($characters) - 1)];
		    }
		    return $randomString;
		}
		
	}
?>