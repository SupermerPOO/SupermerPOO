<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Personal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
   <header>
      <div>
    	<img  class="logo img-responsive" src="img/titulo4.png" align="center" width="500px" height="100px" hspace="450px">
      </div> 
      <div class="container"> 
    	<div class="navbar-header"> 
      		<button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
        		<img src="img/icono-menu.png" style="width: 25px; height: 25px">
      		</button> 
      		<a href="lista_proveedores.php" class="navbar-brand"><label style="color: white; font-family: 'Trebuchet MS'">Inicio</label></a> 
    	</div> 
    	<nav class="navbar-collapse collapse" id="bs-navbar" aria-expanded="false" style="height: 1px;"> 
      		<ul class="nav navbar-nav"> 
        		<li class="texto-contenedor-1">
	            	<a href="#" data-toggle="modal" data-target="#myModal">Salir</a>
					<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  		<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Desea salir al menu?</h4>
				      			</div>
					      			<div class="modal-body">
								        <p>Esta a punto de salir de Personal, para confirmar precione Confirmar, sino presione cancelar</p>
				    	  			</div>
				      				<div class="modal-footer">
				        			<form method="link" action="menu_administrador.php"><input type="submit" name="btn-confirmar" value="Confirmar" class="btn btn-default elemento_izquierda"></form>
				        			<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>
	          	</li>
      		</ul> 
    	</nav> 
  	  </div> 
    </header> 


<h2 style="color: green" align="center">Lista de empleados</h2>

<!--Barra de busqueda-->
<div>
	<input type="search" id="buscar_personal" placeholder="Buscar" class="form-control input-lg input-search">
</div><br>
	<div class="container table-responsive">
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
 						Sucursal
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
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
		</table>
	</div>
	<div class="container table-responsive">
	<table class="table tabl-responsive table-condensed">
		<tr>
			<td colspan="4" align="right" style="padding-right: 50px">
				<a href="" data-toggle="modal" data-target="#myModal"><button class="btn btn-warning">Nuevo Registro</button></a>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" align="center">Registrar Empleado</h4>
				      </div>
				      <div class="modal-body">
				      <div align="center">
				      	<img src="img/perfil.png" style="width: 150px; height: 150px"><br><br>
				      	<button class="btn btn-warning btn-sm">Capturar Foto</button>
				      </div><br><br>
				        
				        <div class="table-responsive">
				        	<table class="table table-responsive table-hover" cellpadding="1px" cellspacing="1px" style="width: 500px">
				        		<tr>
				        			<td style="width: 30px">Nombre:</td>
				        			<td><input type="text" id="txt-nombre" class="form-control" style="width: 180px"></td>
				        		</tr>
				        		<tr>
				        			<td>Apellido:</td>
				        			<td><input type="text" id="txt-apellido" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Identidad:</td>
				        			<td><input type="text" id="txt-identidad" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Area:</td>
				        			<td><select id="slc-area" class="form-control" style="width: 180px" required></select></td>
				        		</tr>
				        		<tr>
				        			<td>Cargo:</td>
				        			<td><select id="slc-cargo" class="form-control" style="width: 180px" required></select></td>
				        		</tr>
				        		<tr>
				        			<td>Sucursal:</td>
				        			<td><select id="slc-sucursal" class="form-control" style="width: 180px" required></select></td>
				        		</tr>
				        		<tr>
				        			<td>Domicilio:</td>
				        			<td><input type="text" id="txt-domicilio" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Telefono:</td>
				        			<td><input type="text" id="txt-telefono" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Correo:</td>
				        			<td><input type="text" id="txt-correo" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Fecha Ingreso:</td>
				        			<td><input type="text" id="txt-fecha-ingreso" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Sueldo:</td>
				        			<td><input type="text" id="txt-sueldo" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        	</table>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button id="btn-agregar-empleado" type="button" class="btn btn-success">Guardar</button>
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				      </div>
				    </div>
				  </div>
				</div>
				<button id="btn-actualizar-empleado" class="btn btn-success" style="width: 100px">Actualizar</button>
				<button id="btn-eliminar-empleado" class="btn btn-danger" style="width: 100px">Eliminar</button>
			</td>
		</tr>
	</table>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
			$("#btn-agregar-empleado").click(function(){
				$("#btn-agregar-empleado").button("loading");
				var parametros = "txt-nombre="+$("#txt-nombre").val()+"&"+"txt-apellido="+$("#txt-apellido").val()+"&"+"txt-identidad="+$("#txt-identidad").val()+"&"+"slc-area="+$("#slc-area").val()+"&"+"slc-cargo="+$("#slc-cargo").val()+"&"+"slc-sucursal="+$("#slc-sucursal").val()+"&"+"txt-domicilio="+$("#txt-domicilio").val()+"&"+"txt-telefono="+$("#txt-telefono").val()+"&"+"txt-correo="+$("#txt-correo").val()+"&"+"txt-fecha-ingreso="+$("#txt-fecha-ingreso").val()+"&"+"txt-sueldo="+$("#txt-sueldo").val();
				
				$.ajax({
					url:"ajax/procesar_empleados.php?accion=1",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#btn-agregar-empleado").button("reset");

					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});	

			$("#btn-actualizar-empleado").click(function(){
				$("#btn-actualizar-empleado").button("loading");
				
				$.ajax({
					url:"ajax/procesar_empleados.php?accion=2",
					method:"POST",
					data: //datos de la base de datos,
					success:function(respuesta){
						$("#btn-actualizar-empleado").button("reset");
						
				
				});	
			});

			$("#btn-eliminar-empleado").click(function(){
				$("#btn-eliminar-empleado").button("loading");

				$.ajax({
					url:"ajax/procesar_empleados.php?accion=3",
					method:"POST",
					data: //data a eliminar
					success:function(respuesta){
						$("#btn-eliminar-empleado").button("reset");
						
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});
		});
</script>
</body>
</html>

 