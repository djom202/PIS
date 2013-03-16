<?php
/*
 * @script      Sistema de conexion a la base de datos
 * @version     0.3.b
 * @date        07/06/2011
 * @copyright   Copyright (c) 2011 - www.altiviaot.webs.com - All Rights Reserved.
 * @author      Jonathan Olier
 * @license     MIT ( http://es.wikipedia.org/wiki/Licencia_MIT )
*/

if (isset($_REQUEST['regis']) == 1){
if ($_REQUEST['regis'] == "registrar" ){
	if(isset($_REQUEST['ced']) ==1){
		$ced = $_REQUEST['ced'];
	}
	if(isset($_REQUEST['nom']) ==1){
		$nom = $_REQUEST['nom'];
	}
	if(isset($_REQUEST['nom2']) ==1){
		$nom2 = $_REQUEST['nom2'];
		if ($nom2 == ''){
			$nom2='NULL';
		}
	}
	if(isset($_REQUEST['ape']) ==1){
		$ape = $_REQUEST['ape'];
	}
	if(isset($_REQUEST['ape2']) ==1){
		$ape2 = $_REQUEST['ape2'];
	}
	if(isset($_REQUEST['correo']) ==1){
		$correo = $_REQUEST['correo'];
	}
	if(isset($_REQUEST['pass']) ==1){
		$pass = $_REQUEST['pass'];
	}
	if(isset($_GET['foto']) ==1){
		$foto = $_REQUEST['foto'];
	}

	include('subir_imagen.php');
echo '1--';
SESSION_START();
echo '2--';
include("conexion.php");
echo '3--';
	$sql='INSERT INTO `personas`(`ced`, `nom`, `nom2`, `ape`, `ape2`, `correo`) VALUES ('.$ced.',"'.$nom.'",'.$nom2.',"'.$ape.'","'.$ape2.'","'.$correo.'")';
	//echo $sql;
	include('error_insertar.php');
echo '4--';
	$sql='INSERT INTO `usuarios`(`id`, `user`, `pass`, `pass_b`, `imaurl`) VALUES (NULL,'.$ced.',"'.md5($pass).'","'.$pass.'","'.$file.'")';
	//echo $sql;
	include('error_insertar.php');
echo '5--';
	header("Location: ../index.php?con=1");
}
}
?>