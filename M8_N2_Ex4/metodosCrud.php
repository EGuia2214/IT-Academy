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

			$result=mysqli_query($conexion,$sql);
			
			$c->desconexion($conexion);
			return $result;

			
		}

		public function buscarRegistro($pId){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="SELECT * from compra where id=$pId";

			$result=mysqli_query($conexion,$sql);

			$row = mysqli_fetch_assoc($result);
	
			$c->desconexion($conexion);

			return $row;
			

		}


		public function actualizaDatos($par1, $par2, $par3, $id){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE compra set nom='$par1', quantitat=$par2, preu=$par3
								where id=$id";
			
			$result=mysqli_query($conexion,$sql);	

			$c->desconexion($conexion);

			return $result;

			

		}

		public function eliminar($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from compra where id=$id";

			$result=mysqli_query($conexion,$sql);

			$c->desconexion($conexion);

			return $result;


		}

	}
 ?>