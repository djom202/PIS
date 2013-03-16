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


$photo = '../jpg/perfiles/dp1005.jpg';  
$photo_data = addslashes(fread(fopen($photo, "r"), filesize($photo)));    

$sql="UPDATE `usuarios` SET `photo`='.$photo.' WHERE `id`=1";
mysql_query($sql, $_SESSION['link']);
$my_error = @mysql_error($_SESSION['link']);
if(!empty($my_error)) {
	echo "Ha habido un error al insertar los valores. $sql"; 
}


$sql="SELECT `photo` FROM `usuarios` WHERE `id`=1";
	
	$result =  @mysql_query($sql, $_SESSION['link']);
	if (!$result) {
		header("Location: no-conecto-base.php");
		exit();
	}
	if (@mysql_num_rows($result) == 0) {
		header("Location: no-consulta.php");
		exit();
	}
	
	if($row = @mysql_fetch_assoc($result)) {				
			echo '<img src="'.$row["photo"].'"/>';
			mysql_free_result($result);
		}
?>