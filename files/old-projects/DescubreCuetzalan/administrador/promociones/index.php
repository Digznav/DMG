<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../admon.css" type="text/css" />
<script type="text/javascript">
function valida_infor(){
	var enter = "\n";
	var caracteres = 'abcdefghijklmnopqrstuvwxyzñ1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZÑáéíóúÁÉÍÓÚ-_!¡()$%.,–' + String.fromCharCode(13) + enter;   
	var ubicacion;      
	var contador=0;
	var i=0;

	/*validar titulo*/
	if (document.editainfo.titulo.value.length < 3 || document.editainfo.titulo.value.length > 101) {
		alert("Inserte un Título correcto (menos de 101 caracteres).");
		document.editainfo.titulo.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.titulo.value.length; i++) {   
    	ubicacion = document.editainfo.titulo.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el Título."); 
			document.editainfo.titulo.focus();  
      		return 0; 
		}   
	}   
	/*termina validar titulo*/
	/*validar dirigido*/
	if (document.editainfo.promocion.value.length < 3) {
		alert("Describa la promoción.");
		document.editainfo.promocion.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.promocion.value.length; i++) {   
    	ubicacion = document.editainfo.promocion.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en la promoción"); 
			document.editainfo.promocion.focus();  
      		return 0; 
		}   
	}   
	/*termina validar promocion*/
document.editainfo.submit(); //Submit al form
}
</script>
</head>
        
<body>
<?php include("../menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Promociones <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">PROMOCIONES</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {
		/*estoy en seccion info general*/		
?>
  <form action="creainfo.php" method="post" name="editainfo">
        <TABLE width="730" border="0" cellpadding="0" align="center">
            <TR>
                <TD align="right">Título:</TD>
                <TD align="left"><input type="text" name="titulo" size="100" maxlength="100"/></TD>
            </TR>
            <TR>
                <TD align="right" valign="top">Promoción:</TD>
                <TD align="left"><textarea name="promocion" rows="8" cols="80"></textarea></TD>
            </TR>
        </TABLE>
        <input type="button" onclick="valida_infor()" value="Editar" />
    </form>		
    <br>
    <br>
    <a href="../home.php">Regresar</a><br>
    <a href="../logout.php">Salir del administrador</a>
<?php    
}else{
?>
	Favor de ingresar al sistema: <p><a href="../index.php">Login</a></p>
<?php
}
?>
</body>
</html>
