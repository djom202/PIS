<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

	mysql_query($sql, $_SESSION['link']);
	$my_error = @mysql_error($_SESSION['link']);
	if(!empty($my_error)) {
		echo "Ha habido un error al insertar los valores. $my_error"; 
	}
?>