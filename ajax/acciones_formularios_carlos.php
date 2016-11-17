<?php

	include_once("../class/class_conexion.php");

	$conexion = new Conexion();

	switch ($_GET["accion"]) {
		case '1':
			$resultado = $conexion->ejecutarInstruccion(sprintf(
				'SELECT 
				codigo_proveedor, 
				codigo_empresa, 
				RTN, direccion, 
				correo_electronico,
				 telefono,
				  registro_sanitario 
				  FROM tbl_proveedor'));

			?>
		
			<table id="tabla-sucursal" class="table-striped table-bordered table-responsive" style="font color: black">
 				<tr>
 					<td width="90px">
 						Codigo Proveedor
 					</td>
 					<td width="140px">
 						Nombre Proveedor
 					</td>
 					<td width="140px">
 						RTN
 					</td>
 					<td width="70px">
 						Direccion
 					</td>
 					<td width="70px">
 						Correo Electronico
 					</td>
 					<td width="70px">
 						Telefono
 					</td>
 					<td width="70px">
 						Producto
 					</td>
 					<td width="70px">
 						Registro Sanitario
 					</td>
 					
 				</tr>
	<?php
			while ($fila = $conexion->obtenerFila($resultado)) {
				$empresa = $conexion->ejecutarInstruccion(sprintf(
					'SELECT 
		 					codigo_empresa,
		 					nombre,
		 					codigo_producto
		 					FROM tbl_empresas
		 					WHERE codigo_empresa="%s" ',
		 					stripslashes($fila['codigo_empresa'])
					));
				$filaEmpresa = $conexion->obtenerFila($empresa);
				echo'
 				<tr>
 					<td>'.$fila["codigo_proveedor"].'</td>
 					<td>'.$filaEmpresa["nombre"].'</td>
 					<td>'.$fila["RTN"].'</td>
 					<td>'.$fila["direccion"].'</td>
 					<td>'.$fila["correo_electronico"].'</td>
 					<td>'.$fila["telefono"].'</td>
 					<td>'.$filaEmpresa["codigo_producto"].'</td>
 					<td>'.$fila["registro_sanitario"].'</td>
 					
 				</tr>
				';
			}
	?>
		</table>
	<?php
		$conexion->liberarResultado($resultado);
		$conexion->cerrarConexion();
		break;

		case '2':
			$resultado = $conexion->ejecutarInstruccion("
				 SELECT codigo_sucursal, nombre_sucursal, direccion, telefono 
				 FROM tbl_sucursales WHERE codigo_sucursal
				");
	?>

	<table id="tabla-sucursal" class="table table-striped table-hover table-bordered table-responsive">
 				<tr>
 					<td width="100px">
 						Numero de Tienda
 					</td>
 					<td width="140px">
 						Nombre
 					</td>
 					<td width="220px">
 						Direccion
 					</td>
 					<td width="70px">
 						Telefono
 					</td>
 				</tr>
 		<?php

 		while ($fila = $conexion->obtenerFila($resultado)) {
 			echo '
 				<tr>
 					<td>'.$fila["codigo_sucursal"].'</td>
 					<td>'.$fila["nombre_sucursal"].'</td>
 					<td>'.$fila["direccion"].'</td>
 					<td>'.$fila["telefono"].'</td>
 				</tr>';
 		}

 		?>
 		</table>
 		<?php

 		$conexion->liberarResultado($resultado);
 		$conexion->cerrarConexion();
		break;

		case '3':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					INSERT INTO tbl_sucursales(codigo_sucursal, nombre_sucursal, direccion, telefono) VALUES (NULL, '%s', '%s' ,'%s')
				",
				stripslashes($_POST['input-nombre']),
				stripslashes($_POST['input-direccion']),
				stripslashes($_POST['input-telefono'])
				));
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '4':
		
		break;

		case '5':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					UPDATE tbl_sucursales SET  nombre_sucursal=['%s'],direccion=['%s'],telefono=['%s'] WHERE codigo_sucursal = '%s'
				",
				stripslashes($_POST['input-nombre']),
				stripslashes($_POST['input-direccion']),
				stripslashes($_POST['input-telefono']),
				stripslashes($_POST['input-codigo'])
				));
			$conexion->liberarResultado($resultado);  
			$conexion->cerrarConexion();
		break;

		case '6':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					DELETE FROM tbl_sucursales WHERE codigo_sucursal = '%s'
				",
				stripcslashes($_POST['input-eliminar'])
				));	
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		default:
			# code...
		break;
	}
?>