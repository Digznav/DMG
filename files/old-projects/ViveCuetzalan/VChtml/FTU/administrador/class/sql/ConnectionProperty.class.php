<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{
	//private static $host = 'localhost';
	//private static $user = 'vivecuet_cuet';
	//private static $password = 'V1v3cu3tz4l4n2014';
	//private static $database = 'vivecuet_vive';

	private static $host = 'localhost';
	private static $user = 'root';
	private static $password = '';
	private static $database = 'vivecuet';

	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return ConnectionProperty::$user;
	}

	public static function getPassword(){
		return ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return ConnectionProperty::$database;
	}
}
?>