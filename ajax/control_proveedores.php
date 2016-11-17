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
	


	break;
	
	default:
		# code...
		break;
}


?>