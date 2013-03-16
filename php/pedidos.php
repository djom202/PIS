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
	include('conexion.php');

	if(isset($_REQUEST['prod']) == 1 && isset($_REQUEST['seccion']) == 1){
		//sacar la id del usuario
		$sql='SELECT  `usuarios`.`id` FROM `usuarios` WHERE  ((`usuarios`.`user`='.$_SESSION['user'].') AND (`pass`="'.$_SESSION['pass'].'"))';
		include('consultar.php');

		if($row = @mysql_fetch_assoc($result)) {					
			$id_user=$row['id'];
			mysql_free_result($result);
		}

		//en facturas agregar el producto, valor y la cantidad a vender del producto.
		$sql='SELECT `precio` FROM `productos`WHERE `id`='.$_REQUEST['prod'];
		include('consultar.php');

		if($row = @mysql_fetch_assoc($result)) {
			$sql='INSERT INTO `facturas`(`id_venta`, `id_producto`, `id_user`, `valor_producto`, `cantidad_producto`) VALUES ('.$_SESSION['venta'].','.$_REQUEST['prod'].','.$id_user.','.$row['precio'].',1)';

			include('error_insertar.php');
			mysql_free_result($result);
		}
		//redireccionar a la paguina anterior
		header("Location: ../productos.php?seccion=".$_REQUEST['seccion']."#");
		exit();
	}
?>