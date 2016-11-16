<?php
	
	include_once("class_conexion.php");
	$conexion = new Conexion();

	class Sucursal{

		private $codigoSucursal;
		private $nombreSucursal;
		private $direccion;
		private $telefono;

		public function __construct($codigoSucursal,
					$nombreSucursal,
					$direccion,
					$telefono){
			$this->codigoSucursal = $codigoSucursal;
			$this->nombreSucursal = $nombreSucursal;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
		}
		public function getCodigoSucursal(){
			return $this->codigoSucursal;
		}
		public function setCodigoSucursal($codigoSucursal){
			$this->codigoSucursal = $codigoSucursal;
		}
		public function getNombreSucursal(){
			return $this->nombreSucursal;
		}
		public function setNombreSucursal($nombreSucursal){
			$this->nombreSucursal = $nombreSucursal;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function toString(){
			return "CodigoSucursal: " . $this->codigoSucursal . 
				" NombreSucursal: " . $this->nombreSucursal . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono;
		}

		public static function mostrarSucursal($conexion){
			$resultado = $conexion->ejecutarInstruccion("SELECT codigo_sucursal, nombre_sucursal FROM tbl_sucursales");
			
			echo "<select class=form-control style=width: 200px>";
			while($fila = $conexion->obtenerFila($resultado)){
				echo "<option value=".$fila["codigo_sucursal"].">";
				echo $fila["nombre_sucursal"];
				echo "</option>";				
			}
			echo "</select>";
		}
	}

?>