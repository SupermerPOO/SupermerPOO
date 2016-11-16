

<?php
include_once('../class/class_conexion.php');
$conexion = new Conexion();



switch ($_GET['accion']) {



	case '1':
					
											

				

?>


		<table class='table table-bordered contenedor' align='center'>
		<tr align='center' style='color:#000000'><strong><td colspan='6'> BALANZA DE COMPROBACION</td></strong></tr><br>
		<tr align='center' style='color:#000000'><strong><td colspan='6'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>
				<tr class='active' style='color: #D6A80C;' align='center'>
					<td >No.</td>
					<td > Cuentas</td>
					<td colspan='2' > Movimientos</td>
					<td  colspan='2' > Saldos</td>
				</tr>


				<tr align='center'>
					<td> </td>
					<td> </td>
					<td> Deudor</td>
					<td> Acreedor</td>
					<td> Deudor</td>
					<td> Acreedor</td>
				</tr>
<?php
				$cuentas = $conexion->ejecutarInstruccion(sprintf("
											SELECT
											codigo_cuenta, nombre
											FROM tbl_cuenta" 
											));
							

							
						while($fila= $conexion->obtenerFila($cuentas)){
					echo "<tr align='center'>
							<td> ".$fila['codigo_cuenta']."</td>
							<td>".$fila['nombre']."</td>";
							
					
					
							

						
												$valor1=0;
												$suma = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_cargada
													WHERE codigo_cuenta="%s"',
													stripslashes($fila['codigo_cuenta']))
													
													);
												$total = $conexion->obtenerFila($suma);

									
												echo "<td>".$total['Total']."</td>";

												$valor1=(int)$total['Total'];
							
												$valor2=0;
								
												$suma1 = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_acreditada
													WHERE codigo_cuenta="%s"',
													stripslashes($fila['codigo_cuenta']))
													
													);
												$total1 = $conexion->obtenerFila($suma1);

												echo "<td>".$total1['Total']."</td>";
									
												$valor2=(int)$total1['Total'];

												if($valor1-$valor2<0){
												echo 	
														"<td> </td>
														<td> ".($valor1-$valor2)."</td>
													</tr>";
												}else{
														echo 
														"<td>".($valor1-$valor2)." </td>
														<td> </td>
													</tr>";

												}



											

							}
							
				
		break;
	
		break;
		case '5':

		?>
		<table class='table table-bordered contenedor' align='center'>
		<tr align='center' style='color:#000000'><strong><td colspan='13'> PLANILLA DE EMPLEADOS</td></strong></tr><br>
		<tr align='center' style='color:#000000'><strong><td colspan='13'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>
				<tr class='active' style='color: #D6A80C;' align='center'>
					<td >No.</td>
					<td >Cargo</td>
					<td > Nombre</td>
					<td colspan='2'> Sueldos</td>
					<td colspan='6' > Deducciones</td>
					<td > Total Deducciones</td>
					<td > Sueldo Neto</td>
				</tr>
				<tr align='center'>
					<td> </td>
					<td> </td>
					<td> </td>
					<td>  Ventas</td>
					<td> Administrador</td>
					<td colspan='2'> IHSS</td>
					<td colspan='2'> RAP</td>
					<td colspan='2'> INFOP</td>
					<td> </td>
					<td> </td>
				</tr>

				<?php

				$listaEmpleados = $conexion->ejecutarInstruccion(sprintf(
					'SELECT 
					codigo_empleado, 
					codigo_privilegio, 
					codigo_usuario, 
					codigo_area_trabajo, 
					nombre, 
					apellido, 
					sueldo 
					FROM tbl_empleados'
					));
				while ($lis=$conexion->obtenerFila($listaEmpleados)) {

				echo "<tr align='center'>
					<td> ".$lis['codigo_empleado']."</td>";

				$privi = $conexion->ejecutarInstruccion(sprintf(
						'SELECT 
						codigo_privilegio, 
						nombre_cargo 
						FROM tbl_privilegio 
						WHERE codigo_privilegio="%s"',
					stripslashes($lis['codigo_privilegio'])));

					$privilegio=$conexion->obtenerFila($privi);

					echo "<td>".$privilegio['nombre_cargo']." </td>
						<td> ".$lis['nombre']." ".$lis['apellido']."</td>";

						if($lis["codigo_area_trabajo"]=="1"){
							echo "<td>".$lis['sueldo']." </td>
									<td> </td>";
					$sueldo=(int)$lis['sueldo'];

					$IHSS=0;
					$IHSS=$sueldo*0.075;
					echo "<td>".$IHSS." </td>
							<td> </td>";
					$RAP=0;
					$RAP=$sueldo*0.035;
					echo "<td>".$RAP." </td>
							<td> </td>";
					$INFOP=0;
					$INFOP=$sueldo*0.01;
					echo "<td> ".$INFOP."</td>
						<td> </td>";
					$Deducciones=$IHSS+$RAP+$INFOP;
					$TotalSueldo=$sueldo-$Deducciones;
					
					
					echo "<td> ".$Deducciones."</td>
							<td>".$TotalSueldo." </td>
							</tr>";
				
					
				

						}else{
							echo "<td> </td>
									<td> ".$lis['sueldo']."</td>";
									$IHSS=0;
					$sueldo = (int)$lis['sueldo'];
					$IHSS=$sueldo*0.075;
					echo "<td> </td>
							<td>".$IHSS." </td>";
					$RAP=0;
					$RAP=$sueldo*0.035;
					echo "<td> </td>
							<td>".$RAP." </td>";
					$INFOP=0;
					$INFOP=$sueldo*0.01;
					echo "<td> </td>
							<td> ".$INFOP."</td>";
					
					$Deducciones=$IHSS+$RAP+$INFOP;
					$TotalSueldo=$sueldo-$Deducciones;
					
					
					echo "<td> ".$Deducciones."</td>
							<td>".$TotalSueldo." </td>
							</tr>";
					
				
						}
					
					
				}
				
				?>



</table>


			<?php
		break;

	
	case '7':
	
	?>

	<table class='table table-bordered contenedor' align='center'>
		<tr align='center' style='color:#000000'><td colspan='7'><strong>LIBRO DIARIO</strong></td></tr><br>
		<tr align='center' style='color:#000000'>
		<td colspan='7'><strong> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</strong></td></tr>
				<tr class='active' style='color: #BBA24E;' align='center'>
					<td ><strong>Fecha</strong></td>
					<td colspan="2"> <strong>Concepto</strong></td>
					
					<td ><strong> No.</strong></td>
					<td ><strong> Parcial</strong></td>
					<td > <strong>Debe</strong></td>
					<td ><strong> Haber</strong></td>
				</tr>
				
				<?php
				$libro = $conexion->ejecutarInstruccion(
					'SELECT 
					codigo_partida, 
					fecha_partida, 
					descripcion
					FROM tbl_libro_diario'
					);

		
					while($fila = $conexion->obtenerFila($libro)){
						echo "<tr align='center'>
								<td>".$fila['fecha_partida']." </td>
								<td style='color: #0B7360' colspan='2'><strong>#Pda: ".$fila['codigo_partida']."</strong></td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td> </td>
							<tr>";


										echo "<tr align='center'>
												<td></td>";

										$cargadas = $conexion->ejecutarInstruccion(sprintf(
											'SELECT 
													codigo_partida, 
													codigo_cuenta,
													monto, 
													 facturaX
												FROM tbl_libro_diario_x_tbl_cuenta_cargada

												WHERE codigo_partida = "%s"',
										stripslashes($fila['codigo_partida']))
											);
					

										while ($filacargada=$conexion->obtenerFila($cargadas)){
									
													$cuentas = $conexion->ejecutarInstruccion(
																	'SELECT codigo_cuenta , nombre
																	FROM tbl_cuenta'
																	);
															
												
													while ($filaNombre = $conexion->obtenerFila($cuentas)) {

																if($filacargada['codigo_cuenta']==$filaNombre['codigo_cuenta']){

																		echo "<td>".$filaNombre['nombre']."</td><td></td>";

																}
													
													}
											
													echo  "<td>".$fila['codigo_partida']."</td>
													<td> </td>
													<td>".$filacargada['monto']."</td>
													<td> </td>";
													echo "<tr>";


										}
						
							
										$acreditadas = $conexion->ejecutarInstruccion(sprintf(
											'SELECT 
													codigo_partida, 
													codigo_cuenta,
													monto, 
													 facturaX
												FROM tbl_libro_diario_x_tbl_cuenta_acreditada

												WHERE codigo_partida = "%s"',
										stripslashes($fila['codigo_partida']))
											);
					

										while ($filaacreditada=$conexion->obtenerFila($acreditadas)){
														echo "<tr align='center'>
															<td></td>";
													$cuentas = $conexion->ejecutarInstruccion(
																	'SELECT codigo_cuenta , nombre
																	FROM tbl_cuenta'
																	);
												
													while ($filaNombre = $conexion->obtenerFila($cuentas)) {

																if($filaacreditada['codigo_cuenta']==$filaNombre['codigo_cuenta']){

																		echo "<td></td><td>".$filaNombre['nombre']."</td>";

																}
													
													}
											
													echo  "<td >".$fila['codigo_partida']."</td>
													<td> </td>
													<td></td>
													<td >".$filaacreditada['monto']."</td>";
													echo "</tr>";



										}

						echo "<tr align='left'>
						<td ></td>
						<td colspan='2' style='color: #143882'>Descripcion: ".$fila['descripcion']."</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						</tr>";				

				}

				?>
				
					
					
					
					
				


			</table>

	<?php
		
				



		break;
	case '8':
	$libros=$conexion->ejecutarInstruccion(sprintf(
		'SELECT 
		codigo_partida, 
		monto_cargado, 
		monto_acreditado, 
		fecha_partida, 
		descripcion 
		FROM tbl_libro_diario')
		
		);
	$cuentas = $conexion->ejecutarInstruccion(sprintf("
		SELECT
		codigo_cuenta, nombre
		FROM tbl_cuenta 
		WHERE codigo_cuenta='%s'",
		stripslashes($_POST['codigo_cuenta'])));
	$cuentaOb= $conexion->obtenerFila($cuentas);

	
	

	?>

	<table class='table table-bordered contenedor' align='center'>
		<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>
		<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>
		<tr align='center' style='color:#000000'><strong><td colspan='7'><?php echo $cuentaOb['nombre']; ?></td></strong></tr>
<tr class='active' style='color: #D6A80C;' align='center'>
					<td >Fecha</td>
					<td > Concepto</td>
					<td > Pda.</td>
					<td  > Debe</td>
					<td > Haber</td>
					<td  > Saldo</td>
				</tr>


<?php
							$valor1=0;
						while($fila= $conexion->obtenerFila($libros)){
							$cargadas = $conexion->ejecutarInstruccion(sprintf(
												'SELECT 
												codigo_partida , 
												codigo_cuenta , 
												monto , 
												FacturaX
												FROM tbl_libro_diario_x_tbl_cuenta_cargada
												WHERE codigo_cuenta ="%s"',
												stripslashes($_POST['codigo_cuenta']))
												);
							
								while($filacargada = $conexion->obtenerFila($cargadas)){
									if($fila['codigo_partida']==$filacargada['codigo_partida']){
												$suma = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_cargada
													WHERE codigo_cuenta="%s"',
													stripslashes($_POST['codigo_cuenta']))
													
													);
												$total = $conexion->obtenerFila($suma);

										echo'<tr align="center">
												<td>'.$fila['fecha_partida'].'</td>
												<td> '.$fila['descripcion']." con factura #: ".$filacargada['FacturaX'].'</td>
												<td> '.$filacargada['codigo_partida'].'</td>
												<td> '.$filacargada['monto'].'</td>
												<td> </td>

												<td>'.$total['Total'].'</td>
											</tr>';
									
									$valor1=(int)$total['Total'];
										
									}


									

								}

							}
							

			$libros1=$conexion->ejecutarInstruccion(sprintf(
						'SELECT 
						codigo_partida, 
						monto_cargado, 
						monto_acreditado, 
						fecha_partida, 
						descripcion 
						FROM tbl_libro_diario')
						
						);
			$valor2=0;
							while($fila1= $conexion->obtenerFila($libros1)){
							$acreditadas = $conexion->ejecutarInstruccion(sprintf(
								'SELECT 
											codigo_partida,
											codigo_cuenta, 
											monto, 
											facturaX 
											FROM tbl_libro_diario_x_tbl_cuenta_acreditada 
											WHERE codigo_cuenta="%s"',
											stripslashes($_POST['codigo_cuenta']))
											);

								
								while($filaacreditada = $conexion->obtenerFila($acreditadas)){
									if($fila1['codigo_partida']==$filaacreditada['codigo_partida']){
												$suma1 = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_acreditada
													WHERE codigo_cuenta="%s"',
													stripslashes($_POST['codigo_cuenta']))
													
													);
												$total1 = $conexion->obtenerFila($suma1);

										echo'<tr align="center">
												<td>'.$fila1['fecha_partida'].'</td>
												<td> '.$fila1['descripcion']." con factura #: ".$filaacreditada['facturaX'].'</td>
												<td> '.$filaacreditada['codigo_partida'].'</td>
												<td> </td>
												<td> '.$filaacreditada['monto'].'</td>

												<td>'.$total1['Total'].'</td>
											</tr>';
									
									$valor2=(int)$total1['Total'];
										
									}


									

								}

							}
							

		
?>
						<tr align="center">
												<td></td>
												<td>Total: </td>
												<td> </td>
												<td> </td>
												<td> </td>

												<td><?php echo $valor1-$valor2;?></td>
											</tr>
					</table>


			
				

<?php

			
	break;
	case '9':




	?>

<div>
<div style="color: #637231; padding: 10px 10px 10px 10px;"><strong><h4>LISTA DE CUENTAS</h4></strong>
<select name="slc-cuentas" id="slc-cuentas" class="form-control">

	<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>
				                      			</select>
</div>
	<?php
	break;
	
	case '11':
		/*$cuentas = $conexion->ejecutarInstruccion(sprintf("
											SELECT
											codigo_cuenta, nombre
											FROM tbl_cuenta" 
											));
							
	$libros=$conexion->ejecutarInstruccion(sprintf(
		'SELECT last_insert_id as id')
		);
	$ultima = $conexion->obtenerFila($libros);
	$libros1 = $conexion->ejecutarInstruccion(sprintf(
		'SELECT fecha_partida
		FROM tbl_libro_diario
		WHERE codigo_partida="%s"',
		stripslashes($ultima['id'])
		)
		);
	$fecha= $conexion->obtenerFila($libros1);
	
							
						while($fila= $conexion->obtenerFila($cuentas)){
							

							/*$cargadas = $conexion->ejecutarInstruccion(sprintf(
												'SELECT 
												codigo_partida , 
												codigo_cuenta , 
												monto , 
												FacturaX
												FROM tbl_libro_diario_x_tbl_cuenta_cargada
												WHERE codigo_cuenta ="%s"',
												stripslashes($fila['codigo_cuenta'])
												));
							
								while($filacargada = $conexion->obtenerFila($cargadas)){
									//if($fila['codigo_partida']==$filacargada['codigo_partida']){*/
											/*	$valor1=0;
												$suma = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_cargada
													WHERE codigo_cuenta="%s"',
													stripslashes($fila['codigo_cuenta']))
													
													);
												$total = $conexion->obtenerFila($suma);

									
									
												$valor1=(int)$total['Total'];
										
									//}


									

								//}
								$valor2=0;
								/*$acreditadas = $conexion->ejecutarInstruccion(sprintf(
								'SELECT 
											codigo_partida,
											codigo_cuenta, 
											monto, 
											facturaX 
											FROM tbl_libro_diario_x_tbl_cuenta_acreditada 
											WHERE codigo_cuenta="%s"',
											stripslashes($fila['codigo_cuenta']))
											);*/

								
								// while($filaacreditada = $conexion->obtenerFila($acreditadas)){
									// if($fila1['codigo_partida']==$filaacreditada['codigo_partida']){
												/*$suma1 = $conexion->ejecutarInstruccion(sprintf(
													'SELECT SUM(monto) as Total
													FROM tbl_libro_diario_x_tbl_cuenta_acreditada
													WHERE codigo_cuenta="%s"',
													stripslashes($fila['codigo_cuenta']))
													
													);
												$total1 = $conexion->obtenerFila($suma1);
									
												$valor2=(int)$total1['Total'];

							$registrarMayor = $conexion->ejecutarInstruccion(sprintf(
									'INSERT INTO tbl_libro_mayor
									(codigo_mayor, concepto, fecha_concepto, monto_cargado, monto_acreditado, saldo_mayor) VALUES 
									(NULL,"%s","%s","%s","%s","%s")',
									stripslashes($fila['nombre']),
									stripslashes($fecha['fecha_partida']),
									stripslashes($valor1),
									stripslashes($valor2),
									stripslashes($valor1-$valor2))
									
									);

										
									// }


									

								// }
								/*$cuentas = $conexion->ejecutarInstruccion(sprintf("
											SELECT
											codigo_cuenta, nombre
											FROM tbl_cuenta 
											WHERE codigo_cuenta='%s'",
											stripslashes($fila['codigo_cuenta'])));

								$cuentaNombre = $conexion->obtenerFila($cuentas);*/
							
						//	}
							

			



	break;
	
	case '19':

     	$libro= $conexion->ejecutarInstruccion(
     		'SELECT 
     			codigo_partida
     		FROM tbl_libro_diario
     		'
     		);
     	
     	while($fila = $conexion->obtenerFila($libro)){
			$partida=0;
     				if($partida<$fila['codigo_partida']){
     					$partida = $fila['codigo_partida'];
     				}
     	}
     	$partida=$partida+1;


	?>
	<!-- ESTO ES HTML  -->

<!-- <div id='num-deudor' value=<?php //echo $_POST['txt-numero-deudor']?>></div> -->
<!-- <div id='num-acreedor' value=<?php //echo $_POST['txt-numero-acreditada']?>></div> -->



							<div class="modal-body" id="cuerpo-modal">
                          <div style="padding: 50px 50px 50px 50px;">
                            <table class="table table-hover" align="center"> 
                            <tr>
                              <td >
                                 Fecha:
                        </td>
                        <td colspan="2">
                        <input type="text" name="txt-fecha" id='txt-fecha' placeholder="Año-mes-dia" class="form-control" >
                          
                        </td>
                        <td></td>


                      </tr>
                          <tr>
                        <td>
                        Nº PDA:
                          
                        </td>
                        <td colspan="2">
                      <input disabled="disabled" type="text" name="txt-partida" value=

						     		<?php 
						     		echo $partida; 
						     		?>
						     		class="form-control">
                          
                        </td>
                        <td></td>


                      </tr>
                      <tr>
                      	<td>
                      		Descripcion:
                      	</td>
                      	<td colspan="2">
                      		<input type="text" name="txt-descripcion" id='txt-descripcion' placeholder="" class="form-control">
                      	</td>
                      	<td></td>
                      </tr>

                       <tr>
                      	<td style="color: #637231">
                      	<strong>Cuenta Cargadas:</strong>
                      		
                      	</td>
                      	<td></td>

                      			
                      				<tr>
                      					<td>
                      				<select name="slc-cargada-1" id="slc-cargada-1" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-cargada-1" id="txt-cargada-1" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      			



                      					<tr>
                      					<td>
                      				<select name="slc-cargada-2" id="slc-cargada-2" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-cargada-2" id="txt-cargada-2" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      			


                      					<tr>
                      					<td>

                      				<select name="slc-cargada-3" id="slc-cargada-3" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-cargada-3" id="txt-cargada-3" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      					<tr>
                      					<td>
                      	
       
                      
                    <tr>
                      	<td style="color: #637231">
                      	<strong>Cuentas Acreditadas:</strong>
                      		
                      	</td>
                      	<td></td>
                      	
                      			
                      				<tr>
                      					<td>
                      				<select name="slc-acreditada-1" id="slc-acreditada-1" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-acreditada-1" id="txt-acreditada-1" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      			



                      					<tr>
                      					<td>
                      				<select name="slc-acreditada-2" id="slc-acreditada-2" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-acreditada-2" id="txt-acreditada-2" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      			


                      					<tr>
                      					<td>

                      				<select name="slc-acreditada-3" id="slc-acreditada-3" class="form-control">
                      						<?php
                      		      
                      						$nombreCuentas= $conexion->ejecutarInstruccion(
                      										'SELECT codigo_cuenta , nombre
																FROM tbl_cuenta'
                      										);

				                      			while($filaCuenta = $conexion->obtenerFila($nombreCuentas)){
							                      		echo 	'
														        	<option value="'.$filaCuenta['codigo_cuenta'].'">'.$filaCuenta['nombre'].'</option>
														                      		
														                 	';
				                      			}
				                      			?>

                      			</select>
					                     </td>
					                      <td>
		                      				<input type="text" name="txt-acreditada-3" id="txt-acreditada-3" placeholder="" class="form-control">
		                      			</td>
                      			</tr>
                      					<tr>
                      					<td>

                      					<tr>
                      						<td>No. Factura:</td>
                      						<td><input type="text" name="txt-factura"  id="txt-factura" class="form-control"></td>
                      					</tr>
                      	

                     
                      
                      <tr style="width: 150px" > <td id="td-natu" colspan="2"></td> <td></td></tr>

                      </table>
                      <div id='Cantidades' style="color: #F3015B; display: none;"><strong>El total de las cuentas acreditadas no es igual a el de las cuentas cargadas</strong></div>
                          </div>
							

<?php
	break;

	case '20':
	
	?>
	   				 

	<?php
	break;
	case '21':
	$libro = $conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_libro_diario
		(codigo_partida, monto_cargado, monto_acreditado, fecha_partida, descripcion)
		 VALUES 
		 (NULL,"%s","%s","%s","%s")',
			 stripslashes($_POST['totalCargadas']),
		 	stripslashes($_POST['totalAcreditadas']),
		 	stripslashes($_POST['txt-fecha']),
			stripslashes($_POST['txt-descripcion'])
		 	));

	$filaUltima = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
		$ultima = $conexion->obtenerFila($filaUltima);
	
			if($_POST['txt-acreditada-1']!=''){
			$cuentasAcreditadas =$conexion->ejecutarInstruccion(sprintf(
				'INSERT INTO tbl_libro_diario_x_tbl_cuenta_acreditada
				(codigo_partida, codigo_cuenta, monto, facturaX) 

				VALUES 
				("%s","%s","%s","%s")',
				stripslashes($ultima['id']),
				stripslashes($_POST['slc-acreditada-1']),
				stripslashes($_POST['txt-acreditada-1']),
				stripslashes($_POST['txt-factura'])
				));


				}

				if($_POST['txt-acreditada-2']!=''){
			$cuentasAcreditadas =$conexion->ejecutarInstruccion(sprintf(
				'INSERT INTO tbl_libro_diario_x_tbl_cuenta_acreditada
				(codigo_partida, codigo_cuenta, monto, facturaX) 

				VALUES 
				("%s","%s","%s","%s")',
				stripslashes($ultima['id']),
				stripslashes($_POST['slc-acreditada-2']),
				stripslashes($_POST['txt-acreditada-2']),
				stripslashes($_POST['txt-factura'])
				));

			
				}

			if($_POST['txt-acreditada-3']!=''){
	$cuentaAcreditadass= $conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_libro_diario_x_tbl_cuenta_acreditada
		(codigo_partida, codigo_cuenta, monto, facturaX) 

		VALUES 
		("%s","%s","%s","%s")',
		stripslashes($ultima['id']),
		stripslashes($_POST['slc-acreditada-3']),
		stripslashes($_POST['txt-acreditada-3']),
		stripslashes($_POST['txt-factura'])
		));

	
			}

				if($_POST['txt-cargada-1']!=''){
	$cuentasCargadas =$conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_libro_diario_x_tbl_cuenta_cargada
		(codigo_partida, codigo_cuenta, monto, facturaX) 

		VALUES 
		("%s","%s","%s","%s")',
		stripslashes($ultima['id']),
		stripslashes($_POST['slc-cargada-1']),
		stripslashes($_POST['txt-cargada-1']),
		stripslashes($_POST['txt-factura'])
		));

	
		}

			if($_POST['txt-cargada-2']!=''){
	$cuentasCargadas =$conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_libro_diario_x_tbl_cuenta_cargada
		(codigo_partida, codigo_cuenta, monto, facturaX) 

		VALUES 
		("%s","%s","%s","%s")',
		stripslashes($ultima['id']),
		stripslashes($_POST['slc-cargada-2']),
		stripslashes($_POST['txt-cargada-2']),
		stripslashes($_POST['txt-factura'])
		));

	
}

				if($_POST['txt-cargada-3']!=''){
	$cuentasCargadas= $conexion->ejecutarInstruccion(sprintf(
		'INSERT INTO tbl_libro_diario_x_tbl_cuenta_cargada
		(codigo_partida, codigo_cuenta, monto, facturaX) 

		VALUES 
		("%s","%s","%s","%s")',
		stripslashes($ultima['id']),
		stripslashes($_POST['slc-cargada-3']),
		stripslashes($_POST['txt-cargada-3']),
		stripslashes($_POST['txt-factura'])
		));

	
}




	 ?>

     	          

	 <?php
                      	
	break;


	

	default:
		# code...
		break;
}
$conexion->cerrarConexion();

?>

