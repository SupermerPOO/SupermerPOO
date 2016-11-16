<?php

	include_once("class_conexion.php");
	$conexion = new Conexion();

	class Producto{

		private $codigoProducto;
		private $codigoCategoria;
		private $codigoMarca;
		private $nombreProducto;
		private $fechaElaboracion;
		private $fechaExpiracion;
		private $precioVenta;
		private $precioCompra;

		public function __construct($codigoProducto,
					$codigoCategoria,
					$codigoMarca,
					$nombreProducto,
					$fechaElaboracion,
					$fechaExpiracion,
					$precioVenta,
					$precioCompra){
			$this->codigoProducto = $codigoProducto;
			$this->codigoCategoria = $codigoCategoria;
			$this->codigoMarca = $codigoMarca;
			$this->nombreProducto = $nombreProducto;
			$this->fechaElaboracion = $fechaElaboracion;
			$this->fechaExpiracion = $fechaExpiracion;
			$this->precioVenta = $precioVenta;
			$this->precioCompra = $precioCompra;
		}
		public function getCodigoProducto(){
			return $this->codigoProducto;
		}
		public function setCodigoProducto($codigoProducto){
			$this->codigoProducto = $codigoProducto;
		}
		public function getCodigoCategoria(){
			return $this->codigoCategoria;
		}
		public function setCodigoCategoria($codigoCategoria){
			$this->codigoCategoria = $codigoCategoria;
		}
		public function getCodigoMarca(){
			return $this->codigoMarca;
		}
		public function setCodigoMarca($codigoMarca){
			$this->codigoMarca = $codigoMarca;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getFechaElaboracion(){
			return $this->fechaElaboracion;
		}
		public function setFechaElaboracion($fechaElaboracion){
			$this->fechaElaboracion = $fechaElaboracion;
		}
		public function getFechaExpiracion(){
			return $this->fechaExpiracion;
		}
		public function setFechaExpiracion($fechaExpiracion){
			$this->fechaExpiracion = $fechaExpiracion;
		}
		public function getPrecioVenta(){
			return $this->precioVenta;
		}
		public function setPrecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
		public function getPrecioCompra(){
			return $this->precioCompra;
		}
		public function setPrecioCompra($precioCompra){
			$this->precioCompra = $precioCompra;
		}
		public function toString(){
			return "CodigoProducto: " . $this->codigoProducto . 
				" CodigoCategoria: " . $this->codigoCategoria . 
				" CodigoMarca: " . $this->codigoMarca . 
				" NombreProducto: " . $this->nombreProducto . 
				" FechaElaboracion: " . $this->fechaElaboracion . 
				" FechaExpiracion: " . $this->fechaExpiracion . 
				" PrecioVenta: " . $this->precioVenta . 
				" PrecioCompra: " . $this->precioCompra;
		}

		public static function mostrarProducto($conexion){
			$resultado = $conexion->ejecutarInstruccion("SELECT codigo_producto, nombre_producto FROM tbl_productos");
			while($fila = $conexion->obtenerFila($resultado)){
				echo "<option value=".$fila["codigo_producto"]." >";
				echo $fila["nombre_producto"];
				echo "</option>";
			}
		}

		public static function generarTabla($conexion, $codigoProducto){

			$productos = array();

			$resultado = $conexion->ejecutarInstruccion("SELECT codigo_producto, nombre_producto, precio_venta FROM tbl_productos WHERE codigo_producto = '%s'");

			while($fila = $conexion->obtenerFila($resultado)){
				$codigo = $fila["codigo_producto"];
				$nombre = $fila["nombre_producto"];
				$precio = $fila["precio_venta"];

				$productos[] = array('codigo_producto'=> $codigo, 'nombre_producto'=> $nombre, 'precio_venta'=> $precio);
			}
			$dato = json_encode($productos);
			echo $dato;
		}
	}

?>