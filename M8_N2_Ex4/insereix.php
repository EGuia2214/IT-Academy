<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";
?>

<!DOCTYPE html>
<html>

<?php include "header.php"?>
<body>

<?php
	if(!ISSET($_POST["submit"]))
	{

?>	

	<h1>Ingresar nuevo producto</h1>
	<form action="insereix.php" method="POST">
	<label>Nombre</label>
	<p></p>
	<input type="text" name="txtNombre">
	<p></p>
	<label>Cantidad</label>
	<p></p>
	<input type="text" name="intCantidad">
	<p></p>
	<label>Precio</label>
	<p></p>
	<input type="text" name="floPrecio">
	<p></p>
	
	<br />
	<input type="submit" name="submit" value="Agregar" class="btn btn-outline-primary">
	</form>


<?php	
	}else{
		echo "hola";
		$nombre=$_POST['txtNombre'];
		$cantidad=$_POST['intCantidad'];
		$precio=$_POST['floPrecio'];

		$obj= new Taula();
		
		$resultado=$obj->insertarDatos($nombre, $cantidad, $precio);

			if($resultado==1){
				header("location:index.php");
			}else{
				echo "fallo al agregar";
		}
	}	

 ?>
 </body>
