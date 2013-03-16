<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if(isset($_REQUEST['pass_db']) == 0){
	if (!($link=mysql_connect($_SESSION['servidor'],$_SESSION['usu_db'],$_SESSION['pass_db'] ))){
		header("Location: no-conecto-base.php");
        		exit();
	}
	if (!mysql_select_db($_SESSION['db'] ,$link)){
		header("Location: no-conecto-base.php");
		exit();
	}

	$_SESSION['link'] = $link;
}else{
	header("Location: ../index.php");
}
?>