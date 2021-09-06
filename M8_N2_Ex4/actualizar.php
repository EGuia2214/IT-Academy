<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

	$id=$_POST['id'];
	$nom=$_POST['txtNombre'];
	$quantitat=$_POST['intCantidad'];
	$preu=$_POST['floPrecio'];

	$obj= new Taula();
	$resultado=$obj->actualizaDatos($nom, $quantitat, $preu, $id);

	if($resultado==1){
		header("location:index.php?actualizar=true");
	}else{
		echo "fallo al actualizar";
	}
 ?>