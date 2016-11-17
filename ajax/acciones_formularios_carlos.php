<?php

	include_once("../class/class_conexion.php");

	$conexion = new Conexion();

	switch ($_GET["accion"]) {
		case '1':

			$resultado = $conexion->ejecutarInstruccion(
				'SELECT 
				codigo_proveedor, 
				codigo_empresa, 
				RTN, 
				direccion, 
				correo_electronico,
				 telefono,
				  registro_sanitario 
				  FROM tbl_proveedor');

			

			?>
		
			<table id="tabla-sucursal" class="table-striped table-bordered table-responsive">
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

				$nombreProducto = $conexion->ejecutarInstruccion(sprintf(
					'
					SELECT 
					codigo_producto, 
					nombre_producto
				 FROM tbl_productos
				  WHERE codigo_producto="%s"',
				  stripslashes($filaEmpresa['codigo_producto'])
				  ));


				$filaProducto = $conexion->obtenerFila($nombreProducto);
				echo'
 				<tr>
 					<td>'.$fila["codigo_proveedor"].'</td>
 					<td>'.$filaEmpresa["nombre"].'</td>
 					<td>'.$fila["RTN"].'</td>
 					<td>'.$fila["direccion"].'</td>
 					<td>'.$fila["correo_electronico"].'</td>
 					<td>'.$fila["telefono"].'</td>
 					<td>'.$filaProducto["nombre_producto"].'</td>
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
		$resultado = $conexion->ejecutarInstruccion("
					SELECT codigo_empleado, codigo_privilegio, codigo_usuario, codigo_area_trabajo, nombre, apellido, no_identidad, fecha_nacimiento, domicilio, telefono, email, fecha_de_ingreso, sueldo FROM tbl_empleados
					WHERE codigo_empleado
				");
		?>
			<table class="table table-responsive table-hover table-bordered table-striped" style="width: 150%">
				<tr>
 					<td>
 						Codigo Empleado
 					</td>
 					<td>
 						Nombre Empleado
 					</td>
 					<td>
 						Numero Identidad
 					</td>
 					<td>
 						Area
 					</td>
 					<td>
 						Cargo
 					</td>
 					<td>
 						Domicilio
 					</td>
 					<td>
 						Telefono
 					</td>
 					<td>
 						Correo Electronico
 					</td>
 					<td>
 						Fecha de Ingreso
 					</td>
 					<td>
 						Sueldo
 					</td>
 				</tr>
		<?php
			while ($fila = $conexion->obtenerFila($resultado)) {
				
						echo '<tr>
 								<td>'.$fila["codigo_empleado"].'</td>
 								<td>'.$fila["nombre"]." ".$fila["apellido"].'</td>
 								<td>'.$fila["no_identidad"].'</td>
 								<td>'.$fila["codigo_area_trabajo"].'</td>
 								<td>'.$fila["codigo_privilegio"].'</td>
 								<td>'.$fila["domicilio"].'</td>
 								<td>'.$fila["telefono"].'</td>
 								<td>'.$fila["email"].'</td>
 								<td>'.$fila["fecha_de_ingreso"].'</td>
 								<td>'.$fila["sueldo"].'</td>
 							</tr>';
					}
		?>
		</table>
		<?php
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '5':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					UPDATE tbl_sucursales SET nombre_sucursal= '%s' ,direccion= '%s' ,telefono= '%s' WHERE codigo_sucursal = '%s'
				", 
				stripslashes($_POST['input-nombre-sucursal']),
				stripslashes($_POST['input-direccion-sucursal']),
				stripslashes($_POST['input-telefono-sucursal']),
				stripslashes($_POST['input-codigo-sucursal'])
				));

			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '6':			
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					DELETE FROM tbl_sucursales WHERE codigo_sucursal = '%s'
				", 
					stripslashes($_POST["input-eliminar"])
				));
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '7':
			$resultado = $conexion->ejecutarInstruccion("
					SELECT codigo_empleado, codigo_privilegio, codigo_usuario, codigo_area_trabajo, nombre, apellido, no_identidad, foto, fecha_nacimiento, domicilio, telefono, email, fecha_de_ingreso, sueldo 
					FROM tbl_empleados 
					WHERE codigo_empleado
				");
		
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '8':

			$resultado = $conexion->ejecutarInstruccion(sprintf("
					UPDATE tbl_empleados 
					SET nombre= '%s', no_identidad= '%s', codigo_area_trabajo= '%s', codigo_privilegio= '%s', domicilio= '%s' ,telefono= '%s',email= '%s',fecha_de_ingreso= '%s',sueldo= '%s'
					WHERE codigo_empleado = '%s'
				", stripslashes($_POST["txt-nombre-empleado"]),
				   stripslashes($_POST["txt-no_identidad"]),
				   stripslashes($_POST["txt-codigo_area_trabajo"]),
				   stripslashes($_POST["txt-codigo_privilegio"]),
				   stripslashes($_POST["txt-domicilio"]),
				   stripslashes($_POST["txt-telefono"]),
				   stripslashes($_POST["txt-email"]),
				   stripslashes($_POST["txt-telefono"]),
				   stripslashes($_POST["txt-fecha_de_ingreso"]),
				   stripslashes($_POST["txt-sueldo"])
				));	

			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '9':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					SELECT codigo_empleado, codigo_privilegio, codigo_usuario, codigo_area_trabajo, nombre, apellido, no_identidad, fecha_nacimiento, domicilio, telefono, email, fecha_de_ingreso, sueldo FROM tbl_empleados
					WHERE codigo_empleado = '%s'
				",
				stripslashes($_POST["txt-codigo-empleado"])	
				));

			$resul = $conexion->obtenerFila($resultado);
			
			?>
			 <table class="elemento_izquierda">
        						<tr>
        							<td>
        								 <input type="hidden" value=<?php echo "'".$resul['codigo_empleado']."'";?> id="txt-codigo-empleado" > 
        							</td>
        						</tr>
        						<tr>
        							<td class="elemento_izquierda">
        								<label>Nombre:</label>
        							</td>
        							<td>
        								 <input type="text" value=<?php echo "'".$resul['nombre']."'";?> id="txt-nombre-empleado"> 
        							</td>
        						</tr>
        						<tr>
        							<td class="elemento_izquierda">
        								<label>Apellido:</label>
        							</td>
        							<td>
        								 <input type="text" value=<?php echo "'".$resul['apellido']."'";?> id="txt-apellido-empleado"> 
        							</td>
        						</tr>
        						<tr>
        							<td>
        								<label>Numero Identidad: </label>
        							</td>
        							<td>
        								 <input type="text" id="txt-no-identidad" value=<?php echo "'".$resul['no_identidad']."'";?>>
        							</td>
        						</tr>
        						<tr>
        							<td>
        								<label>Area:</label>
        							</td>
        							<td>
        								 <input type="text" id="txt-area" value=<?php echo "'".$resul['codigo_area_trabajo']."'";?>>
        							</td>
        						</tr>
        						<tr>
        							<td>
        								<label>Cargo: </label>
        							</td>
        							<td>
        								<input type="text" txt="txt-cargo" value=<?php echo "'".$resul['codigo_privilegio']."'";?>>
        							</td>
        						</tr>	
        						<tr>
        							<td>
        								<label>Domicilio</label>
        							</td>
        							<td>
        								<input type="text" id="txt-domicilio" value=<?php echo "'".$resul['domicilio']."'";?>>
        							</td>
        						</tr>	
        						<tr>
        							<td>
        								<label>
        									Telefono
        								</label>
        							</td>
        							<td>
        								<input type="text" id="txt-telefono" value=<?php echo "'".$resul['telefono']."'";?>>
        							</td>
        						</tr>
        						<tr>
        							<td>
        								Correo Electronico: 
        							</td>
        							<td>
        								<input type="text" id="txt-email" value=<?php echo "'".$resul['email']."'";?>>
        							</td>
        						</tr>
        						<tr>
        							<td>
        								<label>Fecha de Ingreso: </label>
        							</td>
        							<td>
        								<input type="text" id="txt-fecha-ingreso" value=<?php echo "'".$resul['fecha_de_ingreso']."'";?>>
        							</td>
        						</tr>
        						<tr>
        							<td>
        								<label>Sueldo: </label>
        							</td>
        							<td>
        								<input type="text" id="txt-sueldo" value=<?php echo "'".$resul['sueldo']."'";?>>
        							</td>
        						</tr>
        					</table>
			<?php

		break;

		case '10':
			$nombre=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  nombre =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-nombre-empleado']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$apellido=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  apellido =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-apellido-empleado']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$identidad=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  no_identidad =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-no-identidad']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$area=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  codigo_area_trabajo =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-area']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$cargo=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  codigo_privilegio =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-cargo']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$domicilio=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  domicilio =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-domicilio']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$telefono=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  telefono =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-telefono']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$email=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  email =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-email']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$fecha=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  fecha_de_ingreso =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-fecha-ingreso']),
				stripslashes($_POST['txt-codigo-empleado'])
				));

			$sueldo=$conexion->ejecutarInstruccion(sprintf(
				'UPDATE  tbl_empleados 
				SET  sueldo =  "%s" 
				WHERE  codigo_empleado ="%s"',
				stripslashes($_POST['txt-sueldo']),
				stripslashes($_POST['txt-codigo-empleado'])
				));


		$conexion->liberarResultado($nombre);
		$conexion->liberarResultado($apellido);
		$conexion->liberarResultado($identidad);
		$conexion->liberarResultado($area);
		$conexion->liberarResultado($cargo);
		$conexion->liberarResultado($domicilio);
		$conexion->liberarResultado($telefono);
		$conexion->liberarResultado($email);
		$conexion->liberarResultado($fecha);
		$conexion->liberarResultado($sueldo);
		$conexion->liberarResultado($resultado);
		$conexion->liberarResultado($resul);
		$conexion->cerrarConexion();
		break;

		case '11':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
				INSERT INTO tbl_empleados(codigo_empleado, codigo_privilegio, codigo_usuario, codigo_area_trabajo, nombre, apellido, no_identidad,  domicilio, telefono, email, fecha_nacimiento, fecha_de_ingreso, sueldo)
				VALUES (null , '%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s', '%s','%s', '%s')
				",
					stripslashes($_POST["txt-cargo"]),
					stripslashes($_POST["txt-usuario"]),
					stripslashes($_POST["txt-area"]),
					stripslashes($_POST["txt-nombre"]),
					stripslashes($_POST["txt-apellido"]),
					stripslashes($_POST["txt-identidad"]),
					stripslashes($_POST["txt-domicilio"]),
					stripslashes($_POST["txt-telefono"]),
					stripslashes($_POST["txt-correo"]),
					stripslashes($_POST["txt-fecha-nacimiento"]),
					stripslashes($_POST["txt-fecha-ingreso"]),
					stripslashes($_POST["txt-sueldo"])
				));
		$conexion->liberarResultado($resultado);
		$conexion->cerrarConexion();
		break;

		case '12':
			$resultado = $conexion->ejecutarInstruccion("
					SELECT codigo_sucursal, nombre_sucursal, direccion, telefono FROM tbl_sucursales WHERE codigo_sucursal
				");	
			while ($fila = $conexion->obtenerFila($resultado)) {
				echo '<div class="row">
 						 <div class="col-sm-6">
 
 				<div class="ih-item square effect3 bottom_to_top"><a href="#">
       			 <div class="img"><img src="img/supermercado.png" alt="img"></div>
       			 <div class="info">
         		 <h3>'.$fila["nombre_sucursal"].'</h3>
         		 <p>'.$fila["direccion"]." ".$fila["telefono"].'</p>
       			 </div></a></div>
    	
 
  				</div>'	;
			}
		break;

		default:
			# code...
		break;
	}
?>