<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

 ?>

<!DOCTYPE html>
<html>

<?php include "header.php"?>

<body>
<button type="button" class="btn btn-outline-primary"><a href="insereix.php">Insertar nuevo producto</a></button>
<br /><br />

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Producto</th>
			<th class="text-center" scope="col">Cantidad</th>
			<th class="text-right" scope="col">Precio</th>
			<th class="text-right" scope="col">Total</th>
		</tr>
	</thead>
<?php 
	$obj= new Taula();
	$sql="SELECT * from compra";
	$datos=$obj->mostrarDatos($sql);
	$totalAdd = 0;
	foreach ($datos as $key ) {
		
 ?>
	<tr>
		<td><?php echo $key['id']; ?></td>
		<td><?php echo $key['nom']; ?></td>
		<td class="text-center"><?php echo $key['quantitat']; ?></td>
		<td class="text-right"><?php $preu= $key['preu']; 
				  echo get_price($preu);?></td>
				  
		<td class="text-right"><?php $subtotal= $key['quantitat']*$key['preu'];
				  echo get_price($subtotal);//tranformo a €
				  
				 $totalAdd += $subtotal;?></td>
		 
	</tr>

<?php 
	}

/**
* Return price
* @param int $p_format (0 = Decimal Vale, 1= Format with €)
* @return decimal(19,4)
*/
function get_price($p){
        return number_format($p, 2, ",", ".")." €"; // &euro; = €

}

 ?>
 	<tr>
		<th scope="row" colspan=4>Total</th>
		<th class="text-right" scope="row"><?php echo get_price($totalAdd) ?> </th>
		
	</tr>
</table>
</body>
</html>