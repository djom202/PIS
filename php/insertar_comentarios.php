<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if(isset($_REQUEST['coment']) == 1){
	if($_REQUEST['coment'] != ''){
		$sql = 'INSERT INTO `admins`.`comentarios` (`ced`, `comentario`) VALUES ('.$_SESSION['user'].', '.$_REQUEST['coment'].')';
		include('error_insertar.php');
	}
}
?>