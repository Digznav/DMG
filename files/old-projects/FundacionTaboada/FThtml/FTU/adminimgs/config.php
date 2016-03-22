<?php 

// Base de Datos
define('DB_NAME', 'fundacio_site');
define('DB_DEFAULT', 'fundacio_site' );
define('DB_USER', 'fundacio');
define('DB_PASS', 'vm4s0nl1n32013*');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');

// Directorios
define('APP_DIR', '/adminimgs/');
define('ABS_DIR', $_SERVER["DOCUMENT_ROOT"] . APP_DIR );

define('IMAGES_DIR', ABS_DIR . 'imagenes/');

// SIMPL Directorios
define('FS_SIMPL', ABS_DIR . 'libs/simpl/');
define('FS_CACHE', ABS_DIR . 'cache/');

// WIDEIMAGE Directorios
define('FS_WIDEIMAGE', ABS_DIR . 'libs/wideimage/');

// Información Base 
define('URL', 'http://' . $_SERVER['SERVER_NAME'] . APP_DIR );
define('ADMIN_URL', URL . 'admin/');
define('TITLE', 'Tú Información - Portal de Noticias');

define('LOGGING', true);
define('DEBUG', false);
define('DEBUG_QUERY', false);
define('DEBUG_LOG', true);
define('USE_CACHE', true);
define('USE_ENUM', true);
define('QUERY_CACHE', false);
define('DB_SESSIONS', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
?>