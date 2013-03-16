<!doctype html>
<html> 
<head>
<?php
	include('php/version.php');
	include('php/seguridad.php');
?> 
<script language="javascript"> 
	function validar_user(){ 
		if (document.login.user.value.length==0){ 
			alert("Tiene que escribir su usuario.")
			document.login.user.focus()
			return 0; 
		}else { 
			if (document.login.pass2.value.length==0){ 
				alert("Tiene que escribir su password.")
				document.login.pass2.focus()
				return 0; 
			}
		} 
		document.login.submit();
	} 
</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<link rel="shortcut icon" href="ico/dde.ico" type="image/x-icon" /> 
<link rel="stylesheet" media="all" href="css/style.css"> 
<title>Muebles Troncoso</title> 
</head> 
<body onLoad="document.login.user.focus()">
	<center><br/><br/><br/><br/><br/><br/>
	<table id="1" border="0" height="50%"> 
		<tr> 
			<td valign="middle" align="center">
<?php
	if (isset($_REQUEST['reg'])==0)
	{
?>
				<embed src="swf/mightyjungle.swf" value="false" bgcolor="black" quality="high" width="553" heigth="257" pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></a> 
<br><br>
				<table id="2" border="0"> 
					 <tbody>
						<form id="1" name="login" action="php/validarpass.php?ok=Entrar" method="POST">	
							<tr> 
								<td>Usuario:</td> 
								<td><input type="text" style="text-align:center" name="user" value="" size="20" tabindex="1" maxlength="10"/></td> 								<td><label><input type="checkbox" name="recor" value="on" checked="checked" tabindex="3"/>Recordarme&#191;</label></td> 
							</tr> 
							<tr> 
								<td>Contase&ntilde;a: </td> 
								<td><input type="password" style="text-align:center" name="pass2" value="" size="20" tabindex="2" maxlength=20/>							</td> 
								<td><input type="submit" value="Entrar" name="ok" class="boton" onClick="javascript:validar_user()" tabindex="4"/></td>
							</tr>
						</form>
							<tr>
								<td></td>
									<?php
										include('php/error_user.php');
									?>
								<td>
									<form id="2" name="registrar" action="index.php?reg=registrar" method="POST"> 
										<input type="submit" name="reg" class="boton" value="registrar" tabindex="5">
									</form>
								</td>
							</tr>
					</tbody>
				</table>
			</td> 
		</tr>
	<?php
		}
	?>
        	<?php
			if (isset($_REQUEST['reg'])==1)
			{
        		if ($_REQUEST['reg']== "registrar"){
		?>
			<form id="3" name="registrar2" action="php/insertar_cliente.php" method="POST" enctype="multipart/form-data"> 
						<table id="3" width="269" border="0">
							<tr><td colspan="2" align="center">Registrarse</td></tr>
							<tr><td colspan="2" align="center">&nbsp;</td></tr>
							<td width="63">Cedula:</td><td width="194"><input type="text" style="text-align:center" name="ced" value="" size="20" tabindex="6" maxlength="10"/></td></tr>
							<tr><td>Nombre:</td><td><input type="text" style="text-align:center" name="nom" value="" size="20" tabindex="7" maxlength="20"/></td></tr>
							<tr><td>2Nombre:</td><td><input type="text" style="text-align:center" name="nom2" value="" size="20" tabindex="8" maxlength="20"/></td></tr>
							<tr><td>Apellido:</td><td><input type="text" style="text-align:center" name="ape" value="" size="20" tabindex="9" maxlength="20"/></td></tr>
							<tr><td>2Apellido:</td><td><input type="text" style="text-align:center" name="ape2" value="" size="20" tabindex="10" maxlength="20"/></td></tr>
							<td>Correo:</td><td><input type="text" style="text-align:center" name="correo" value="" size="20" tabindex="11" maxlength="30"/></td></tr>
							<tr><td>Password:</td><td><input type="password" style="text-align:center" name="pass" value="" size="20" tabindex="12" maxlength=20/></td></tr>
							<tr><td>Avatar:</td><td><input type="file" name="foto" size="20" tabindex="13"/></td></tr>
  <tr><td></td><td align="right"><input type="submit" name="regis" class="boton" value="registrar" tabindex="14"></td></tr>
</table>
					</form>	
					</td>
					</tr>
       	<?php
				}
			}
		?>
			<address> 
				<table id="4" border="0" width="250" height="57"> 
					<tr><td><center>Creada el 25/05/2011 por:</center> 
					<tr><td><marquee scrolldelay= 0>Djom20</marquee> 
				</table> 
			</address>
	</table> 
	</center>  
</body> 
</html> 