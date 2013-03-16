<?
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

	session_unset(); /*borra todas las variables que esten dentro de la secion anterior*/
	session_destroy(); /*cierra la seccion en caso de estar abierta*/
	header("location:  ../index.php");
?>