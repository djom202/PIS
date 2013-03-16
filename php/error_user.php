<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if(isset($_REQUEST['errorusuario'])==1){
	if($_REQUEST['errorusuario']==1){
		$_error='Usuario No Registrado';
		echo '<td style="text-align:center; color:#C00; background:#000;" width="50">'. $_error .'</td>';
	}
}else{	
	if(isset($_REQUEST['con'])==1){
		if($_REQUEST['con']==1){
			$con='Usuario Registrado.';
			echo '<td style="text-align:center; color:#0F0; background:#000;" width="50"><strong>'. $con .'</strong></td>';
		}
	}else{
		echo '<td></td>';
	}
}
?>
