<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

	$result =  @mysql_query($sql, $_SESSION['link']);
	if(!$result) {
		//header("Location: no-conecto-base.php");
		//exit();
	}
	if(@mysql_num_rows($result) == 0) {
		//header("Location: no-consulta.php");
		//exit();
	}
?>