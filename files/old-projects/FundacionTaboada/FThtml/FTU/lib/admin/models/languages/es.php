<?php

/*

UserCake Version: 2.0.2

http://usercake.com

*/



/*

%m1% - Dymamic markers which are replaced at run time by the relevant index.

*/



$lang = array();



//Account

$lang = array_merge($lang,array(

	"ACCOUNT_SPECIFY_USERNAME" 			=> "Por favor ingresa tu nombre de usuario",

	"ACCOUNT_SPECIFY_PASSWORD" 			=> "Por favor ingresa tu contrase&ntilde;a",

	"ACCOUNT_SPECIFY_EMAIL"				=> "Por favor ingresa tu correo electr&oacute;nico",

	"ACCOUNT_INVALID_EMAIL"				=> "Correo electr&oacute;nico invalido",

	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "Usuario o correo son inv&aacute;lidos",

	"ACCOUNT_USER_OR_PASS_INVALID"		=> "Usuario o contrase&ntilde;a son inv&aacute;lidos",

	"ACCOUNT_ALREADY_ACTIVE"			=> "Tu cuenta ya fu&eacute; previamente activada",

	"ACCOUNT_INACTIVE"					=> "Tu cuenta se encuentra inactiva. Verifica tu carpeta de correo spam para instrucciones de activaci&oacute;n",

	"ACCOUNT_USER_CHAR_LIMIT"			=> "Tu usuario debe tener entre %m1% y %m2% caracteres de longitud",

	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "Tu Nombre a debe tener entre %m1% y %m2% caracteres de longitud",

	"ACCOUNT_PASS_CHAR_LIMIT"			=> "Tu contrase&ntilde;a debe tener entre %m1% y %m2% caracteres de longitud",

	"ACCOUNT_TITLE_CHAR_LIMIT"			=> "El titulo debe tener entre %m1% y %m2% caracteres de longitud",

	"ACCOUNT_PASS_MISMATCH"				=> "Tu contrase&ntilde;a y la confirmacion deben coincidir",

	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "El Nombre debe incuir un&iacute;camente caracteres alfanumericos",

	"ACCOUNT_USERNAME_IN_USE"			=> "Nombre de usuario %m1% ya se encuentra en uso",

	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "Nombre %m1% ya se encuentra en uso",

	"ACCOUNT_EMAIL_IN_USE"				=> "Cuenta de correo %m1% ya se encuentra en uso",

	"ACCOUNT_LINK_ALREADY_SENT"			=> "Un correo de activaci&oacute;n ha sido enviado a tu cuenta de correo en la(s) &uacute;ltima(s) %m1% hora(s)",

	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "Te hemos enviado una nueva liga de activaci&oacute;n, por favor revisa tu cuenta de correo",

	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "Por favor ingresa tu nueva contrase&ntilde;a",	

	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "Por favor confirma tu nueva contrase&ntilde;a",

	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "Tu nueva contrase&ntilde;a debe tener entre %m1% y %m2% caracteres de longitud",	

	"ACCOUNT_PASSWORD_INVALID"			=> "La contrase&ntilde;a actual no debe coincidir con la anterior",	

	"ACCOUNT_DETAILS_UPDATED"			=> "Detalles de la cuenta han sido actualizados",

	"ACCOUNT_ACTIVATION_MESSAGE"		=> "Necesitas activar tu cuenta antes de poder ingresar. Por favor utiliza la liga para poder activar tu cuenta. \n\n %m1%activate-account.php?token=%m2%",							

	"ACCOUNT_ACTIVATION_COMPLETE"		=> "Has activado exitosamente tu cuenta. Ahora puedes ingresar <a href=\"login.php\">aqui</a>.",

	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "Has sido registrado con &eacute;xito. Ahora puedes acceder <a href=\"login.php\">aqui</a>.",

	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "Has sido registrado con &eacute;xito. En breve recibiras un correo de activaci&oacute;n. Debes activar tu cuenta antes de poder ingresar.",

	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "No puedes actualizar usando tu misma contrase&ntilde;a",

	"ACCOUNT_PASSWORD_UPDATED"			=> "Contrase&ntilde;a actualizada",

	"ACCOUNT_EMAIL_UPDATED"				=> "Cuenta de correo actualizada",

	"ACCOUNT_TOKEN_NOT_FOUND"			=> "Token no existe / La cuenta ya fue previamente activada",

	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "El nombre de usuario solamente puede contener caracteres alfanum&eacute;ricos",

	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "%m1% usuarios han sido borrados",

	"ACCOUNT_MANUALLY_ACTIVATED"		=> "%m1% cuentas de usuario han sido activadas manualmente",

	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "Nombre ha sido actializado a %m1%",

	"ACCOUNT_TITLE_UPDATED"				=> "El t&iacute;tulo %m1% ha sido cambiado a %m2%",

	"ACCOUNT_PERMISSION_ADDED"			=> "Han sido agregados %m1% niveles de acceso",

	"ACCOUNT_PERMISSION_REMOVED"		=> "Han sido removidos %m1% niveles de acceso",

	"ACCOUNT_INVALID_USERNAME"			=> "Nombre de usuario inv&aacute;lido",

	));



//Configuration

$lang = array_merge($lang,array(

	"CONFIG_NAME_CHAR_LIMIT"			=> "El nombre del sitio debe tener entre %m1% y %m2% caracteres de longitud",

	"CONFIG_URL_CHAR_LIMIT"				=> "El URL del sitio debe tener entre %m1% y %m2% caracteres de longitud",

	"CONFIG_EMAIL_CHAR_LIMIT"			=> "El correo debe tener entre %m1% y %m2% caracteres de longitud",

	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "La activaci&oacute;n de correo debe ser `true` o `false`",

	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Vigencia de la activaci&oacute;n debe ser entre %m1% y %m2% horas",

	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "La ruta del archivo de lenguage debe ser entre %m1% y %m2% de longitud",

	"CONFIG_LANGUAGE_INVALID"			=> "No existe archivo para la clave de lenguaje `%m1%`",

	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "La ruta de la plantilla debe tener entre %m1% y %m2% caracteres de longitud",

	"CONFIG_TEMPLATE_INVALID"			=> "No existe archivo para la clave `%m1%`",

	"CONFIG_EMAIL_INVALID"				=> "El correo que ingresaste no es v&aacute;lido",

	"CONFIG_INVALID_URL_END"			=> "Por favor incluir `/` en el URL de tu sitio",

	"CONFIG_UPDATE_SUCCESSFUL"			=> "La configuraci&oacute;n de tu sitio ha sido actualizada. Posiblemebte necesites ejecutar nuevamente algunas p&aacute;ginas para que los cambios tengan efecto",

	));



//Forgot Password

$lang = array_merge($lang,array(

	"FORGOTPASS_INVALID_TOKEN"			=> "Tu token de activaci&oacute;n es inv&aacute;lido",

	"FORGOTPASS_NEW_PASS_EMAIL"			=> "Se te ha enviado por correo tu nueva contrase&ntilde;a",

	"FORGOTPASS_REQUEST_CANNED"			=> "Solicitud de contrase&ntilde;a perdida ha sido cancelada",

	"FORGOTPASS_REQUEST_EXISTS"			=> "Ya existe una solicitud de contrase&ntilde;a perdida para esta cuenta",

	"FORGOTPASS_REQUEST_SUCCESS"		=> "Has sido notificado por correo de las instrucciones para obtener nuevamente acceso a tu cuenta",

	));



//Mail

$lang = array_merge($lang,array(

	"MAIL_ERROR"						=> "Error fatal al enviar correo, contacte a su administrador",

	"MAIL_TEMPLATE_BUILD_ERROR"			=> "Error construyendo plantilla de correo",

	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "No se puede abrir el directorio de plantillas de correo. Intente estableciendo el directorio con %m1%",

	"MAIL_TEMPLATE_FILE_EMPTY"			=> "Archivo plantilla se encuentra vac&iacute;o... nada que enviar",

	));



//Miscellaneous

$lang = array_merge($lang,array(

	"CAPTCHA_FAIL"						=> "C&oacute;digo de seguridad no coincide",

	"CONFIRM"							=> "Confirme",

	"DENY"								=> "Negar",

	"SUCCESS"							=> "&Eacute;xito",

	"ERROR"								=> "Error",

	"NOTHING_TO_UPDATE"					=> "Nada que actualizar",

	"SQL_ERROR"							=> "Error fatal de SQL",

	"FEATURE_DISABLED"					=> "Esta opci&oacute;n se encuentra desactivada",

	"PAGE_PRIVATE_TOGGLED"				=> "&Eacute;sta p&aacute;gina actualmente es %m1%",

	"PAGE_ACCESS_REMOVED"				=> "Acceso a la p&aacute;gina ha sido removido para %m1%",

	"PAGE_ACCESS_ADDED"					=> "Acceso a la p&aacute;gina ha sido otorgado para %m1%",

	));



//Permissions

$lang = array_merge($lang,array(

	"PERMISSION_CHAR_LIMIT"				=> "El nombre de permiso deben tener entre %m1% y %m2% caracteres de longitud",

	"PERMISSION_NAME_IN_USE"			=> "Nombre de permiso %m1% ya se encuentra en uso",

	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "Ha(n) sido eliminado(s) %m1% permiso(s)",

	"PERMISSION_CREATION_SUCCESSFUL"	=> "Ha sido creado con &eacute;xito el permiso `%m1%`",

	"PERMISSION_NAME_UPDATE"			=> "El permiso ha sido actualizado `%m1%`",

	"PERMISSION_REMOVE_PAGES"			=> "Ha sido removido el acceso a %m1% p&aacute;gina(s)",

	"PERMISSION_ADD_PAGES"				=> "Ha sido otorgado el acceso a %m1% p&aacute;gina(s)",

	"PERMISSION_REMOVE_USERS"			=> "A %m1% usuarios se les elimin&oacute; el permiso",

	"PERMISSION_ADD_USERS"				=> "A %m1% usuarios se les asign&oacute; el permiso",

	"CANNOT_DELETE_NEWUSERS"			=> "Grupo 'new user' no puede ser eliminado",

	"CANNOT_DELETE_ADMIN"				=> "Grupo 'admin' no puede ser eliminado",

	));

?>