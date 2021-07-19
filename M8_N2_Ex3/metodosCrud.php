<?php 

	class Taula{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			$c->desconexion($conexion);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}

		public function insertarDatos($par1, $par2, $par3){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into compra (nom, quantitat, preu )
							VALUES ('$par1', $par2, $par3)";

			var_dump($sql);
			$result=mysqli_query($conexion,$sql);
			
			$c->desconexion($conexion);
			return $result;

			
		}

	}
 ?>