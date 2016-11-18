<?php
include_once("../class/class_conexion.php");

$conexion = new Conexion();

switch ($_GET['accion']) {
	case '1':

	$empresa = $conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_empresas
		(codigo_empresa, codigo_producto, nombre) 
		VALUES
		(NULL,"%s","%s")',
		stripcslashes($_POST['nombre-producto']),
		stripcslashes($_POST['nombre-empresa'])
		));

		
		break;

	case '2':

	?>
		 <select name="slc-producto" id="slc-producto" class="form-control" style="width: 250px">
		 			<?php
		 				$productos = $conexion->ejecutarInstruccion(sprintf(
		 					'SELECT 
		 					codigo_producto,
		 					nombre_producto
		 					FROM tbl_productos '
		 					));
		 				while($fila = $conexion->obtenerFila($productos)){
		 					 echo "<option value='".$fila['codigo_producto']."'>".$fila['nombre_producto']."</option>";

		 				}

                         
                     ?>

        </select>

      <?php
		break;
	case '3':
		
		?>

 <select name="slc-empresa" id="slc-empresa" class="form-control" style="width: 250px">
             <?php
             	$empresas = $conexion->ejecutarInstruccion(sprintf(
		 					'SELECT 
		 					codigo_empresa,
		 					nombre
		 					FROM tbl_empresas '
		 					));
		 				while($fila = $conexion->obtenerFila($empresas)){
		 					 echo "<option value='".$fila['codigo_empresa']."'>".$fila['nombre']."</option>";

		 				}


             ?>
    </select>

		<?php
		break;
	case '4':
	

	$proveedores = $conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_proveedor
		(codigo_proveedor, codigo_empresa, RTN, direccion, correo_electronico, telefono, registro_sanitario) 
		VALUES 
		(NULL,"%s","%s","%s","%s","%s","%s")',
		stripslashes($_POST['codigo-empresa']),
		stripslashes($_POST['rtn']),
		stripslashes($_POST['direccion']),
		stripslashes($_POST['correo']),
		stripslashes($_POST['telefono']),
		stripslashes($_POST['registro'])
		));

	

	break;
	case '5':

		$pro = $conexion->ejecutarInstruccion(sprintf(
			'SELECT 
			codigo_proveedor, 
			codigo_empresa, 
			RTN, 
			direccion,
			 correo_electronico,
			  telefono,
			   registro_sanitario
			    FROM tbl_proveedor 
			    WHERE codigo_proveedor="%s"',
			    stripslashes($_POST['codigo'])
			));

		$proveedores = $conexion->obtenerFila($pro);

	?>
	<table class="table table-striped table-hover">
	<tr>
		<td>
			Codigo_Empresa:
		</td>
		<td>
		<select name="slc-empresa" id="slc-empresa" class="form-control" style="width: 250px">
             <?php
             	$empresas = $conexion->ejecutarInstruccion(sprintf(
		 					'SELECT 
		 					codigo_empresa,
		 					nombre
		 					FROM tbl_empresas '
		 					));
		 				while($fila = $conexion->obtenerFila($empresas)){
		 					 echo "<option value='".$fila['codigo_empresa']."'>".$fila['nombre']."</option>";

		 				}


             ?>
    </select>
			

		</td>
	</tr>
	<tr>
	<td>
		RTN:
	</td>
	<td>
		
		<input type="text" name="txt-rtn" class="form-control" style="width: 250px" id="txt-rtn" value=<?php echo '"'.$proveedores['RTN'].'"';?>>
	</td>
		
		 
		
	</tr>
	<tr>
		<td> Direccion:
		</td>
		<td>
			<input type="text" name="txt-direccion" class="form-control" style="width: 250px" id="txt-direccion" value=<?php echo '"'.$proveedores['direccion'].'"';?>>
		</td>
	</tr>
	<tr>
		<td>
			Correo Electronico:
		</td>
		<td>
			<input type="text" name="txt-correo" class="form-control" style="width: 250px" id='txt-correo' value=<?php echo '"'.$proveedores['correo_electronico'].'"';?>>
		</td>
	</tr>
	<tr>
		<td>
			Telefono:
		</td>
		<td>
			<input type="text" name="txt-telefono" class="form-control" style="width: 250px" id='txt-telefono' value=<?php echo '"'.$proveedores['telefono'].'"';?>>
		</td>
	</tr>
	<tr>
		<td>
			Registro Sanitario:
		</td>
		<td>
			<input type="text" name="txt-registro" class="form-control" style="width: 250px" id='txt-registro' value=<?php echo '"'.$proveedores['registro_sanitario'].'"';?>>
		</td>
	</tr>
	

		<tr>
		<td>
			Codigo del Proveedor:
		</td>
		<td>
			<input type="text" disabled="disabled" class="form-control" style="width: 250px" name="txt-codigo" id='txt-codigo' value=<?php echo '"'.$proveedores['codigo_proveedor'].'"';?>>
		</td>
	</tr>

	</table>

	<?php



	break;


	case '6':



	$empresa=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  codigo_empresa =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['empresa']),
		stripslashes($_POST['codigo'])
		));

	$rtn=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  RTN =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['rtn']),
		stripslashes($_POST['codigo'])
		));
	$direccion=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  direccion =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['direccion']),
		stripslashes($_POST['codigo'])
		));
	$correo=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  correo_electronico =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['correo']),
		stripslashes($_POST['codigo'])
		));

	$telefono=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  telefono =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['telefono']),
		stripslashes($_POST['codigo'])
		));
	$registro=$conexion->ejecutarInstruccion(sprintf(
		'UPDATE  tbl_proveedor 
		SET  registro_sanitario =  "%s" 
		WHERE codigo_proveedor ="%s"',
		stripslashes($_POST['registro']),
		stripslashes($_POST['codigo'])
		));
	break;
	
	default:
		# code...
		break;
}


?>