<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

SESSION_START();

include("conexion.php");

if(isset($_REQUEST['id'])==1){
	$sql='DELETE FROM `admins`.`facturas` WHERE `facturas`.`id`='.$_REQUEST['id'];
	include('error_insertar.php');
	header("location: ../compras.php");
}
?>