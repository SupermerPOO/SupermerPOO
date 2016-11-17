<?php

	include_once("../class/class_conexion.php");
	include_once("../class/class_usuario.php");

	$conexion = new Conexion();

	switch ($_GET["accion"]) {
		case '1':
			$resultado = $conexion->ejecutarInstruccion("SELECT A.codigo_usuario, B.nombre_cargo, A.nombre_usuario FROM tbl_usuarios A INNER JOIN  tbl_privilegio B ON(A.codigo_privilegio = B.codigo_privilegio) WHERE codigo_usuario");
?>
		
			<table id="tabla-usuarios" class="table table-hover table-bordered" style="width: 100%; margin-top: 1%;">
 				<tr>
 					<td width="90px" style="color: green;">
 						<h4>Codigo Usuario</h4>
 					</td>
 					<td width="140px" style="color: green;">
 						<h4>Tipo Usuario</h4>
 					</td>
 					<td width="140px" style="color: green;">
 						<h4>Nombre Usuario</h4>
 					</td>
 				</tr>

<?php
			while ($fila = $conexion->obtenerFila($resultado)) {
				echo'
 				<tr>
 					<td>'.$fila["codigo_usuario"].'</td>
 					<td>'.$fila["nombre_cargo"].'</td>
 					<td>'.$fila["nombre_usuario"].'</td>
 				</tr>
				';
		}
?>
			</table>

			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="width: 120px">Actualizar</button>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel" align="center">Actualizar Registro</h4>
			      </div>
			      <div class="modal-body" style="height: 50%">
			      		<div align="center">
				        	<div>
				        		<input type="text" id="input-codigo" style="width: 250px;" class="form-control" placeholder="Codigo Usuario">
				        	</div>
				        	<div style="margin-top: 1%;">
				        		<select class="form-control" id="input-privilegio" style="width: 250px"><?php Usuario::mostrarPrivilegio($conexion); ?></select>
				        	</div>
				        	<div style="margin-top: 1%;">
				        		<input type="text" id="input-nombre" style="width: 250px;" class="form-control" placeholder="Nombre Usuario">
				        	</div>
				        	<div style="margin-top: 1%;">
				        		<input type="text" id="input-password" style="width: 250px;" class="form-control" placeholder="Contraseña">
				        	</div>
			        	</div>
			      </div>
			      <div class="modal-footer">
			      	<button class="btn btn-success elemento_izquierda" style="width: 120px;">Actualizar</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal" style="width: 120px">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>

			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal2" style="width: 120px">Eliminar</button>
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel" align="center">Eliminar Registro</h4>
			      </div>
			      <div class="modal-body" style="height: 50%">
			      		<div align="center">
				        	<div style="margin-top: 1%;">
				        		<select class="form-control" id="input-usuario" style="width: 250px"><?php Usuario::mostrarUsuario($conexion); ?></select>
				        	</div>
			        	</div>
			      </div>
			      <div class="modal-footer">
			      	<button class="btn btn-danger elemento_izquierda" style="width: 120px;">Eliminar</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal" style="width: 120px">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
		
<?php

		$conexion->liberarResultado($resultado);
		$conexion->cerrarConexion();
		break;

		case '2':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					INSERT INTO tbl_usuarios(codigo_usuario, codigo_privilegio, nombre_usuario, password) VALUES (NULL, '%s', '%s', sha1('%s'))
				",
				stripslashes($_POST['cbo-privilegio']),
				stripslashes($_POST['txt-usuario']),
				stripslashes($_POST['txt-password'])
				));

			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

		case '3':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					UPDATE tbl_usuarios SET  codigo_privilegio=['%s'], nombre_usuario=['%s'], password=[sha1('%s')] WHERE codigo_usuario = '%s'
				",
				stripslashes($_POST['input-privilegio']),
				stripslashes($_POST['input-nombre']),
				stripslashes($_POST['input-password']),
				stripslashes($_POST['input-codigo'])
				));
			$conexion->liberarResultado($resultado);  
			$conexion->cerrarConexion();
		break;

		case '4':
			$resultado = $conexion->ejecutarInstruccion(sprintf("
					DELETE FROM tbl_usuarios WHERE codigo_usuario = '%s'
				",
				stripcslashes($_POST['input-usuario'])
				));	
			$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;

	}
?>

