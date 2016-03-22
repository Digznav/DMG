<?php
					if (isset($_POST['submit'])) {
						if (isset($_POST['eDate']) && $_POST['eDate'] != "" ){ $fecha = $_POST['eDate']; }
						else { $fecha = date("d") .'/'. date("m") .'/'. date("Y"); }
						if (isset($_POST['eGuest'])){ $invitado = $_POST['eGuest']; }
						else { $invitado = 0; }
						if (isset($_POST['ePackage'])){ $package = $_POST['ePackage']; }
						else { $package = 'none'; }
						if (isset($_POST['ePackage_companions'])){ $acompaniantes = $_POST['ePackage_companions']; }
						else { $acompaniantes = 'none'; }
						//upload photo
						if ($_FILES['ePhoto']['name'] != "" ){
							$var = rand(1,10) . date('d') . rand(1,10) . $_FILES['ePhoto']['size'] . date('is');
							$allowedExts = array('jpg', 'jpeg', 'gif', 'png');
							$ext = explode( '.', $_FILES['ePhoto']['name'] );
							$extension = end($ext);
							//Image validation
							/*application/illustrator*/
							if ((($_FILES['ePhoto']['type'] == 'image/gif') || ($_FILES['ePhoto']['type'] == 'image/jpeg') || ($_FILES['ePhoto']['type'] == 'image/png') || ($_FILES['ePhoto']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
								if ( $_FILES['ePhoto']['error'] == 0 ) {
									$uploadfile = 'imgs/players/p' . $var .'.'. $extension;
									if ( !file_exists($uploadfile) ) {
										$upload = move_uploaded_file( $_FILES['ePhoto']['tmp_name'] , $uploadfile );
										if ($upload) {
											$photo_name = 'p' . $var .'.'. $extension;
											$photo_url = '/imgs/players/p' . $var .'.'. $extension;
											$photo_name_crop = 'p' . $var . '-crop.' . $extension;
											$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
										}
									}
									else {
										echo '<script>alert ("The file already exists");</script>';
										$photo_name = 'p' . $var .'.'. $extension;
										$photo_url= '/imgs/players/p' . $var .'.'. $extension;
										$photo_name_crop = 'p' . $var . '-crop.' . $extension;
										$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
									}
								}
								else {
									echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Impossible to upload the image, try again"); setTimeout ("redireccionar()", 100);</script>';
									return false;
								}
							}
							else {
								echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Invalid file, try again"); setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
						else {
							$photo_name = 'profile-dommy.png';
							$photo_url= '/imgs/players/profile-dommy.png';
							$photo_name_crop = 'profile-dommy-crop.png';
							$photo_url_crop= '/imgs/players/profile-dommy-crop.png';
						}
						//Save data in database
						$escritura = "INSERT INTO members (NAME,AGE,CLUBNAME,CATEGORY,TIME_PLAY,ACHIV,REG_ASSOCIATION,HANDICAP,NUMBER,SHIRT_SIZE,EMAIL,PHONE,DATE,GUEST,PHOTO_URL,CROP_URL,PACKAGE,PACKAGE_COMP)";
						$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $_POST['eMember'] . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";
						if (!mysql_query($escritura)) {
							die('Registro no válido' . mysql_error());}
						else {
							//Send email
							$email = 'golf2pp@mayanpalace.com.mx' . ', ';
							$email .= 'multimedia@vmasideas.com' . ', ';
							$email .= 'multimedia2@vmasideas.com';
							/*$email = 'digznav@hotmail.com' . ', ';
							$email .= 'multimedia2@vmasideas.com';*/
							$subject = "Registration";
							$mensaje= 'Name: ' . $_POST['eName'] . "\n";
							$mensaje.= 'Age: ' . $_POST['eAge'] . "\n";
							$mensaje.= 'Club name: ' . $_POST['eClubName'] . "\n";
							$mensaje.= 'Category: ' . $_POST['eCategory'] . "\n";
							$mensaje.= 'Years playing Golf: ' . $_POST['eYears'] . "\n";
							$mensaje.= 'Achievements in golf: ' . $_POST['eAchiv'] . "\n";
							$mensaje.= 'State or Regional Golf Association: ' . $_POST['eRegAssociation'] . "\n";
							$mensaje.= 'USGA Handicap index: ' . $_POST['eHandicap'] . "\n";
							$mensaje.= 'Member / GHIN #: ' . $_POST['eMember'] . "\n";
							$mensaje.= 'Shirt size: ' . $_POST['eShirt'] . "\n";
							$mensaje.= 'Email: ' . $_POST['eEmail'] . "\n";
							$mensaje.= 'Phone number: ' . $_POST['ePhone'] . "\n";
							$mensaje.= 'Date: ' . $fecha . "\n";
							$mensaje.= 'Guest: ' . $invitado . "\n";
							$mensaje.= 'Photo: ' . $photo_url . "\n";
							$mensaje.= 'Photo crop: ' . $photo_url_crop . "\n";
							$mensaje.= 'Package: ' . $package . "\n";
							$mensaje.= 'Package companions: ' . $acompaniantes . "\n";
							/*echo $mensaje;*/
							$headers = 'From: '.$_POST['eName'];
							if (mail($email, $subject, $mensaje, $headers)) {
								echo '<script>function redireccionar() { document.location.href="entry.php" };';
								echo 'alert ("Sent");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
							}
							else {
								echo '<script>function redireccionar() { document.location.href="entry.php" };';
								echo 'alert ("The email could not be sent");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
					}
					else { ?>
					<?php } ?>