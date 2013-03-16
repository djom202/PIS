<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

	mysql_create_db('admins',$_SESSION['link']);
	mysql_list_dbs($_SESSION['link']);
	mysql_list_tables('admins',$_SESSION['link']);
?>