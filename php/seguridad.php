<?
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if(isset($_SESSION['autentificado']) == 1){
	if($_SESSION['auten'] == 0){ // NO AUTENTIFICADO
		header("index.php");
   	}else{
		header("inicio.php");
	}
}else{
	header("index.php");
}
?>