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

if(isset($_SESSION['venta'])==1){
	$sql='DELETE FROM `admins`.`facturas` WHERE `facturas`.`id_venta`='.$_SESSION['venta'];
	include('error_insertar.php');
	include('id_compras.php');

	header("location: ../compras.php");
}
//recordatorio, el inventario se debe disminuir despues de la venta, no antes.
//lo msmo en los valores de la grafias.

//si se acepta la compra, se agregan los valores correspondientes 
//a la tabla de ventas



?>