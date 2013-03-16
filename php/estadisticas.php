<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

	$sql="SELECT cant FROM `est_ventas` WHERE nombre='".$var."' LIMIT 0, 30";

	include('consultar.php');

	if($row = @mysql_fetch_assoc($result)) {
		echo $row['cant'];
		mysql_free_result($result);
	}
?>