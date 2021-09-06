<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

///recibe id por GET
    $id= $_GET['id'];

    $obj= new Taula();
	$datos=$obj->buscarRegistro($id);



?>

<!DOCTYPE html>
<html>

<?php include "header.php"?>
<body>


<h1>Modificar producto</h1>
	<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $datos['id']?>"><!-- el ID lo  paso por hidden-->

	<label>Nom</label>
	<p></p>
	<input type="text" name="txtNombre" value="<?php echo $datos['nom']?>">
	<p></p>
	<label>Cantidad</label>
	<p></p>
	<input type="text" name="intCantidad" value="<?php echo $datos['quantitat'] ?>">
	<p></p>
	<label>Precio</label>
	<p></p>
	<input type="text" name="floPrecio" value="<?php echo $datos['preu'] ?>">
	<p></p>
	
	<br />
	<input type="submit" name="submit" value="Modificar" class="btn btn-outline-primary">
	</form>