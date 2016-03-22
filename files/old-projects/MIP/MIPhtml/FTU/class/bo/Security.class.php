<?php

class Security{

	static private $passwordLenght = 5;

	public static function registerUser( $mail, $nombre, $role ){
		
		$contrasenia = self::generatePassword( self::$passwordLenght );
		
		//echo "$contrasenia=[".$contrasenia."]";

		$acceso = new Acceso();
		$acceso->usuario = $mail;
		$acceso->contrasenia = md5( $contrasenia );
		$acceso->rol = $role;

		DAOFactory::getAccesoDAO()->insert( $acceso );
		
		self::sendMail( $mail, 
			"Usuario en MIP", 
			"../plantilla/notificaNuevoUsuario.html",  
			array( 
				"[usuario]" => $mail,
				"[nombre]" => $nombre,
				"[contra]" => $contrasenia,
				"[rol]" => $role
			) 
		);
	}


	public static function sendMailNewReport($empresa, $folio)
	{

		$contactos = DAOFactory::getContactoDAO()->queryByIdCliente($empresa);
		$destinatarios = "";
		for ( $i=0; count( $contactos ) > $i ; $i++ ) {
			$contacto = $contactos[$i];
			$destinatarios .= $contacto->email . ",";
		}

		self::sendMail( $destinatarios, 
			"NUEVO reporte en MIP", 
			"../plantilla/notificaNuevoReporte.html",  
			array( 
				"[folio]" => $folio
			) 
		);
	
		
	}

	public static function sendMailChangeReport($empresa, $folio)
	{

		$contactos = DAOFactory::getContactoDAO()->queryByIdCliente($empresa);
		$destinatarios = "";
		for ( $i=0; count( $contactos ) > $i ; $i++ ) {
			$contacto = $contactos[$i];
			$destinatarios .= $contacto->email . ",";
		}

		self::sendMail( $destinatarios, 
			"Actualización en reporte en MIP", 
			"../plantilla/notificaCambioReporte.html",  
			array( 
				"[folio]" => $folio
			) 
		);
	
		
	}


	public static function logout(){

	}

	public static function login( $username, $password ){

		$transaction = new Transaction();
		$acceso = DAOFactory::getAccesoDAO()->load( $username );
		$transaction->commit();

		if ($acceso == null)
			throw new Exception("Usuario no existe!", 1);
		if ( $acceso->contrasenia != md5($password) )
			throw new Exception("Contrase&ntilde;a incorrecta, intente nuevamente.", 1);

		return $acceso;
	}

	static function generatePassword($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}

	static function sendMail( $to, $subject, $template, $params ){
		$message = file_get_contents( $template );

		$message = str_replace( array_keys( $params ), array_values($params), $message );

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'From: Sistema MIP <sistemas@mip.com.mx>' . "\r\n";
//		$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//		$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		mail($to, $subject, $message, $headers);
	}



} //end security class
?>