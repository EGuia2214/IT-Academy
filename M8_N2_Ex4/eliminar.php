<?php
	require_once "conexion.php";
	require_once "metodosCrud.php";

	$id=$_GET['id'];

    $obj= new Taula();
	$resultado=$obj->eliminar($id);

    if($resultado==true){
		header("location:index.php?eliminar=true");
	}else{
		echo "fallo al eliminar";
	}

?>

