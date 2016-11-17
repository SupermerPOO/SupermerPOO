<?php

	include_once("../class/class_conexion.php");
	include_once("../class/class_usuario.php");

	$conexion = new Conexion();

	switch ($_GET["accion"]) {
		case '1':
			$resultado = $conexion->ejecutarInstruccion("SELECT A.codigo_usuario, B.nombre_cargo, A.nombre_usuario FROM tbl_usuarios A INNER JOIN  tbl_privilegio B ON(A.codigo_privilegio = B.codigo_privilegio) WHERE codigo_usuario");
?>
		
			
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
			$nombre = $conexion->ejecutarInstruccion(sprintf(
				'UPDATE tbl_usuarios 
				SET  nombre_usuario =  "%s" 
				WHERE  codigo_usuario ="%s"',
				stripslashes($_POST['nombre']),
				stripslashes($_POST['codigo'])
				));

			$privilegio = $conexion->ejecutarInstruccion(sprintf(
				'UPDATE tbl_usuarios 
				SET  codigo_privilegio =  "%s" 
				WHERE  codigo_usuario ="%s"',
				stripslashes($_POST['privilegio']),
				stripslashes($_POST['codigo'])
				));

			$password = $conexion->ejecutarInstruccion(sprintf(
				'UPDATE tbl_usuarios 
				SET  password =  sha1("%s") 
				WHERE  codigo_usuario ="%s"',
				stripslashes($_POST['password']),
				stripslashes($_POST['codigo'])
				));


			
				
				
			
			$conexion->liberarResultado($nombre); 
			$conexion->liberarResultado($privilegio);  
			$conexion->liberarResultado($password);   
			$conexion->cerrarConexion();
		break;

		case '4':
			$resultado = $conexion->ejecutarInstruccion(sprintf(
				"
					DELETE FROM tbl_usuarios WHERE codigo_usuario = '%s'
				",
				stripslashes($_POST['codigo'])
				));	
			//$conexion->liberarResultado($resultado);
			$conexion->cerrarConexion();
		break;
		case '5':

		$usuarios = $conexion->ejecutarInstruccion(sprintf(
			'SELECT 
			codigo_usuario, 
			codigo_privilegio,
			 nombre_usuario, 
			 password 
			 FROM tbl_usuarios 
			 WHERE codigo_usuario="%s"',
			 stripslashes($_POST['codigo'])
			));
		$filaUsuario = $conexion->obtenerFila($usuarios);



		?>
	
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Codigo Usuario:</td>
                      <td><input type="text" id="txt-codigoUsuario" disabled="diseable" value= <?php echo "'".$_POST['codigo']."'";?> class="form-control" style="width: 250px" placeholder="Ingrese el Codigo de Usuario"></td>
                    </tr>
                   <tr>
                   	 <td style="width: 30px"> Privilegio:</td>
                    <td> <select name="slc-privi" id="slc-privi" class="form-control" style="width: 250px">
								<?php
															
										$privilegio = $conexion->ejecutarInstruccion(sprintf( 
											'SELECT 
											codigo_privilegio, 
											nombre_cargo 
											FROM tbl_privilegio 
											'
											));

								
									while ($fila=$conexion->obtenerFila($privilegio)) {
										echo "<option value='".$fila['codigo_privilegio']."'>".$fila['nombre_cargo']."</option>";
									}
									
								?>

                                 
                                 
				        </select>
				        </td>
				      </tr>

                    <tr>
                      <td style="width: 30px">Nombre Usuario:</td>
                      <td><input type="text" id="txt-nombre-usuario"  value= <?php echo "'".$filaUsuario['nombre_usuario']."'";?> class="form-control" style="width: 250px" placeholder="Ingrese su Nombre de Usuaruio"></td>
                    </tr>

                    <tr>
                      <td style="width: 30px">Password Usuario:</td>
                      <td><input type="text" id="txt-password" class="form-control" style="width: 250px" placeholder="Ingrese su clave"></td>
                    </tr>
                   
                  </table>
                
		<?php
		break;
		case '6':

		?>
		 <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Codigo Usuario:</td>
                      <td><input type="text" id="txt-codigo-usuario" class="form-control" style="width: 250px" placeholder="Ingrese el Codigo de Usuario"></td>
                    </tr>
                   
         </table>
		<?php
		break;

	}
?>

