<?php
include_once("../class/class_conexion.php");
$conexion = new Conexion();

switch ($_GET['accion']) {
	case '1':
	$marca = $conexion->ejecutarInstruccion(sprintf(
		"INSERT INTO tbl_marca
		(codigo_marca, nombre_marca) 
		VALUES 
		(NULL,'%s')",
		stripslashes($_POST['Marca'])
		));
		
		break;

	case '2':

	$categoria = $conexion->ejecutarInstruccion(sprintf(
		"INSERT INTO tbl_categorias
		(codigo_categoria, descripcion) 
		VALUES 
		(NULL,'%s')",
		stripslashes($_POST['Categoria'])
		));

	break;


	case '3':
	
		?>
		<select name="slc-marca" id="slc-marca" class="form-control" style="width: 250px">
								<?php
							$marcas = $conexion->ejecutarInstruccion(sprintf(
									'SELECT 
									codigo_marca, 
									nombre_marca 
									FROM tbl_marca 
									'
									));

								
									while ($fila=$conexion->obtenerFila($marcas)) {
										echo "<option value='".$fila['codigo_marca']."'>".$fila['nombre_marca']."</option>";
									}
									
								?>

                                 
                                 
        </select>
		<?php
	break;
	case '4':
	
	$categorias = $conexion->ejecutarInstruccion(sprintf(
		"INSERT INTO tbl_categorias
		(codigo_categoria, descripcion) 
		VALUES 
		(NULL,'%s')",
		stripslashes($_POST['Categoria'])
		));

	break;
	case '5':

	?>
		 <select name="slc-categoria" id="slc-categoria" class="form-control" style="width: 250px">
								<?php
							$categorias = $conexion->ejecutarInstruccion(sprintf(
									'SELECT 
									codigo_categoria, 
									descripcion
									FROM tbl_categorias 
									'
									));

								
									while ($fila=$conexion->obtenerFila($categorias)) {
										echo "<option value='".$fila['codigo_categoria']."'>".$fila['descripcion']."</option>";
									}
									
								?>

                                 
                                 
        </select>
		<?php
	break;
	case '6':
	
		$producto = $conexion->ejecutarInstruccion(sprintf(
			'INSERT INTO tbl_productos
			(codigo_producto, codigo_categoria, codigo_marca, nombre_producto, fecha_elaboracion, fecha_expiracion, precio_venta, precio_compra)
			 VALUES (NULL,"%s","%s","%s","%s","%s","%s","%s")',
				stripslashes($_POST['categoria']),
				stripslashes($_POST['marca']),
				stripslashes($_POST['nombreProducto']),
				stripslashes($_POST['elaboracion']),
				stripslashes($_POST['vence']),
				stripslashes($_POST['venta']),			 
				stripslashes($_POST['compra'])			
				));


	break;
	
	default:
		# code...
		break;
}

?>