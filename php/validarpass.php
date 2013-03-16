<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if ($_REQUEST['ok'] == "Entrar" ){
	if(isset($_REQUEST['user']) ==1){
		$user = $_REQUEST['user'];
	}

	if(isset($_REQUEST['pass2']) ==1){
		$pass=md5($_REQUEST['pass2']);
	}

SESSION_START();

	$_SESSION['servidor'] = "localhost";
    $_SESSION['db'] = "admins";
	$_SESSION['usu_db'] = "root";
    $_SESSION['pass_db'] = "";

include("conexion.php");

	$sql="SELECT `personas`.`nom`, `personas`.`ape`, `usuarios`.`priv`FROM personas, usuarios WHERE ((`usuarios`.`user` = '".  $user ."') AND (`usuarios`.`pass` = '". $pass ."') AND (`personas`.`ced` = '".  $user ."') AND (`usuarios`.`est` = 1))";
	include('consultar.php');
	
	if($row = mysql_fetch_assoc($result)) {
		$_SESSION['priv'] = $row["priv"];
		$_SESSION['auten']="0";
		$_SESSION['nom']=$row["nom"].' '.$row["ape"];
		$_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;

		mysql_free_result($result);
		include('id_compras.php');
		header("Location: ../inicio.php");
	}else{
		header("Location: ../index.php?errorusuario=1"); /*Usuario No Registrado*/
	}		
}
?>