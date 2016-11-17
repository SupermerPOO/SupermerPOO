<?php 

	include_once("../class/class_conexion.php");
	include_once("../class/class_producto.php");
	$conexion = new Conexion();

	switch ($_GET["accion"]) {
	case '1':
	
		if($_POST["txt-codigo"]==""){
			echo "# Facturas esta vacio<br>";
		}

		if($_POST["txt-fecha"]==""){
			echo "Agregue una fecha<br>";	
		}

		if($_POST["txt-unidades"]==""){
			echo "No hay numero de unidades<br>";
		}

		if($_POST["txt-cliente"]==""){
			echo "Ingrese un nombre de cliente<br>";
		}
		
		if($_POST["txt-identidad"]==""){
			echo "No hay numero identidad<br>";	
		}
		if($_POST["txt-descuento"]==""){
			echo "No hay descuento<br>";	
		}
		
		if($_POST["txt-isv"]==""){
			echo "No hay ISV<br>";
		}


		case '2':
			
			$respuesta = $conexion->ejecutarInstruccion("SELECT codigo_producto, nombre_producto, precio_venta FROM tbl_productos WHERE codigo_producto = '%s'");
			while($fila = $conexion->obtenerFila($respuesta)){  ?>
				<tr>
					<td> <?php echo $fila["codigo_producto"] ?> </td>
					<td> <?php echo $fila["nombre_producto"] ?> </td>
					<td> <?php echo $_POST["txt-unidades"] ?> </td>
					<td> <?php echo $fila["precio_venta"] ?> </td>
				</tr>

<?php 
	}
		break;

		case '3':
			$nombreProductos = $conexion->ejecutarInstruccion(sprintf(
				'INSERT INTO tbl_productos(codigo_producto, nombre_producto) 
				VALUES (%s, $s)', 
				stripcslashes($fila["codigo_producto"]),
				stripcslashes($fila["nombre_producto"])
			));
			

			while($fila = $conexion->obtenerFila($nombreProductos)){
			echo '<option value="'.$filaUltima['codigo_producto'].'">'.$filaUltima['nombre_producto'].'</option>';
		}
		break;
	/*

		$respuesta = $conexion->ejecutarInstruccion("SELECT codigo_producto, nombre_producto, precio_venta FROM tbl_productos WHERE codigo_producto ='%s'");

		while($fila = $conexion->obtenerFila($respuesta)){
			echo "<tr>";
			echo "<td>".$fila["codigo_producto"]."</td>";
			echo "<td>".$fila["nombre_producto"]."</td>";
			echo "<td>".$_POST["txt-unidades"]."</td>";
			echo "<td>".$fila["precio_venta"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		break;*/
		default:

			break;
	}
?>