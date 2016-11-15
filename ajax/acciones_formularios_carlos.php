<?php

	include_once("../class/class_conexion.php");

	$conexion = new Conexion();

	switch ($_GET["accion"]) {
		case '1':
			$resultado = $conexion->ejecutarInstruccion("
				SELECT codigo_proveedor , codigo_producto, nombre, RTN, direccion, correo_electronico, telefono, registro_sanitario, fecha_entrega
				FROM tbl_proveedor
				WHERE codigo_producto
				");

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
 					<td width="70px">
 						Fecha de Entrega
 					</td>
 				</tr>
	<?php
			while ($fila = $conexion->obtenerFila($resultado)) {
				echo'
 				<tr>
 					<td>'.$fila["codigo_producto"].'</td>
 					<td>'.$fila["nombre"].'</td>
 					<td>'.$fila["RTN"].'</td>
 					<td>'.$fila["direccion"].'</td>
 					<td>'.$fila["correo_electronico"].'</td>
 					<td>'.$fila["telefono"].'</td>
 					<td>'.$fila["codigo_producto"].'</td>
 					<td>'.$fila["registro_sanitario"].'</td>
 					<td>'.$fila["fecha_entrega"].'</td>
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
		?>

		<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
				  		<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Nueva Sucursal</h4>
				      			</div>
					      			<div class="modal-body">
								        <div id="div-registro-sucursal" class="container table-responsive">
	      								<table>
	      									<tr>
	      										<td>
	      		       							 <label id="label-numero-sucursal"><b>Numero de Tienda:</b></label>
	      		       							 </td>
												 <td>
												 		<input id="input-casilla" type="text" name="casilla" placeholder="# de Sucursal" class="form-control" style="width:200px" required/> 
												</td>	
											</tr>
											<tr>
												<td>
													<label id="label-nombre-sucursal"><b>Nombre:</b></label>
													<td>
														<input id="input-nombre" type="text" placeholder="Nombre de Sucursal" class="form-control" style="width:200px" required/>
													</div>
													</td>
												</td>
											</tr>
											<tr>
												<td>
													<label id="label-direccion-sucursal"><b>Direccion:</b></label>
													<td>
													<input id="input-direccion" type="text" placeholder="Direccion" style="width:200px" style="margin-left: 5px" class="form-control" required/> 
													</td>
												</td>
											</tr>
											<tr>
												<td>
													<label id="label-telefono-sucursal"><b>Telefono:</b></label>
													<td>
													<input id="input-telefono" type="text" placeholder="Telefono" style="width: 200px" class="form-control" required/> 
													</td>
												</td>
	      									</tr>
	      								</table>			
	      							</div>
				    	  		</div>
				      				<div class="modal-footer">
				        			<input id="btn-guardar"  type="submit" name="btn-guardar" class="btn btn-default elemento_izquierda" value="Guardar">
				        			<button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>
		<?php
		break;

		default:
			# code...
		break;
	}
?>