<?php
	
	include_once("class_conexion.php");

	class Usuario{

		private $codigoUsuario;
		private $codigoPrivilegio;
		private $nombreUsuario;
		private $password;

		public function __construct($codigoUsuario, $codigoPrivilegio, $nombreUsuario, $password){
			$this->codigoUsuario = $codigoUsuario;
			$this->codigoPrivilegio = $codigoPrivilegio;
			$this->nombreUsuario = $nombreUsuario;
			$this->password = $password;
		}

		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getCodigoPrivilegio(){
			return $this->codigoPrivilegio;
		}
		public function setCodigoPrivilegio($codigoPrivilegio){
			$this->codigoPrivilegio = $codigoPrivilegio;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function toString(){
			return $this->codigoUsuario." ".$this->codigoPrivilegio." ".$this->nombreUsuario." ".$this->password;
		}

		public static function verificarUsuario($conexion, $nombreUsuario, $password){

				$resultado = $conexion->ejecutarInstruccion(
					sprintf("SELECT codigo_usuario, codigo_privilegio, nombre_usuario, password  FROM tbl_usuarios 
					WHERE nombre_usuario = '%s'
					AND password = sha1('%s')",
					stripslashes($nombreUsuario),
					stripslashes($password)
				));
				$respuesta = array();

				if($conexion->cantidadRegistros($resultado) >0){
					$fila = $conexion->obtenerFila($resultado);
					$respuesta["codigo_resultado"] = 1;
					$respuesta["resultado"] = "Usuario Existe";
					$respuesta["codigo_usuario"] = $fila["codigo_usuario"];
					$respuesta["nombre_usuario"] = $fila["nombre_usuario"];
					$respuesta["codigo_privilegio"] = $fila["codigo_privilegio"];
				}
				else {
					$respuesta["codigo_resultado"] = 0;
					$respuesta["resultado"] = "Usuario no Existe";
				}
				return $respuesta;

		}


		public static function mostrarPrivilegio($conexion){
			$resultado = $conexion->ejecutarInstruccion("SELECT codigo_privilegio, nombre_cargo FROM tbl_privilegio");

			while($fila = $conexion->obtenerFila($resultado)){
				echo "<option value=".$fila["codigo_privilegio"]." >";
				echo $fila["nombre_cargo"];
				echo "</option>";
			}

		}

		public static function mostrarUsuario($conexion){
			$resultado = $conexion->ejecutarInstruccion("SELECT codigo_usuario, nombre_usuario FROM tbl_usuarios");
			while($fila = $conexion->obtenerFila($resultado)){
				echo "<option value=".$fila["codigo_usuario"]." >";
				echo $fila["nombre_usuario"];
				echo "</option>";
			} 
		}

		public function registrarUsuario($conexion){
			$sql = sprintf(
				"INSERT INTO tbl_usuarios(codigo_usuario, codigo_privilegio, nombre_usuario, password) VALUES (NULL,'%s','%s', sha1('%s'))",
						stripslashes($this->codigoPrivilegio),
						stripslashes($this->nombreUsuario),
						stripslashes($this->password)
				);

			if($resultado){
				echo "<b>Registro almacenado con exito</b>";
			}else{
				echo "Error al guardar el registro";
				exit;
			}
		}

	}
	
?>