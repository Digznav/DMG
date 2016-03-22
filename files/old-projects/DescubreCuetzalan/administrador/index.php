<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="admon.css" type="text/css" />
        <title>.::Descubre Cuetzalan, Administrador::.</title>
    </head>
	<body>
    <?php include("menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INICIAR SESIÓN</td>
    </tr>
</table> 

	  <form action="validar_usuario.php" method="post">
			<TABLE align="center">
				<TR>
    				<TD>Usuario:</TD>
					<TD><input type="text" name="usuario" size="20" maxlength="10" /></TD>
    			</TR>
    			<TR>
    				<TD>Password:</TD>
        			<TD><input type="password" name="password" size="20" maxlength="10" /></TD>
				</TR>
				<TR>
    				<TD colspan="2" align="center"><input type="submit" value="Ingresar" /></TD>
			    </TR>
			</TABLE>
		</form>
	</body>
</html>
