<?php
	include_once('class/validaciones_sucursales.php');
	session_start(); 
  	if(!isset($_SESSION['codigo_usuario']))
    	header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Sucursales</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/index_style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
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
      		<a href="sucursales.php" class="navbar-brand"><label style="color: white; font-family: 'Trebuchet MS'">Inicio</label></a> 
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
								        <p>Esta a punto de salir de la Lista de Sucursales, para confirmar precione Aceptar, sino presione cancelar</p>
				    	  			</div>
				      				<div class="modal-footer">
				        			<form method="link" action="menu_administrador.php"><button name="btn-confirmar" class="btn btn-default elemento_izquierda">Confirmar</button></form>
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
	

	      <div>
				<input type="search" id="buscar" placeholder="Buscar" class="form-control input-lg input-search ">
	      </div>
	      <br>


	      <div class="container table-responsive" id="div-tabla-sucursal">
	      	
 					
	      </div>
	     
	      <div id="div-botones">
			   <button id="btn-nuevo" class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal2">Nuevo</button>
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
			   <button id="btn-actualizar" class="btn btn-info elemento_izquierda" href="#" data-toggle="modal" data-target="#myModal3">Actualizar</button>
					<div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
				  		<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Actualizar Sucursal</h4>
				      			</div>
					      			<div class="modal-body">
								        <div id="div-registro-sucursal" class="container table-responsive">
	      								<table>
	      									<tr>
	      										<td>
	      		       							 <label id="label-numero-sucursal"><b>Codigo Sucursal:</b></label>
	      		       							 </td>
												 <td>
												 		<input id="input-codigo" type="text" name="casilla" placeholder="# de Sucursal" class="form-control" style="width:200px" required/> 
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
				        			<button id="btn-actualizar-sucursal" class="btn btn-default elemento_izquierda">Actualizar</button>
				        			<button class="btn btn-primary" data-dismiss="modal">Cerrar</button>
				      				</div>
				    		</div>
				  		</div>
				  	</div>
			   <button id="btn-eliminar-sucursal" class="btn btn-warning" href="#" data-toggle="modal" data-target="#myModal4">Eliminar</button>
					<div id="myModal4" class="modal fade" tabindex="-1" role="dialog">
				  		<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Eliminar</h4>
				      			</div>
					      			<div class="modal-body">
								        <div id="div-registro-sucursal" class="container table-responsive">
	      								<table>
	      									<tr>
	      										<td>
	      		       							 <label id="label-numero-sucursal"><b>Codigo Sucursal:</b></label>
	      		       							 </td>
												 <td>
												 		<input id="input-eliminar" type="text" placeholder="# de Sucursal" class="form-control" style="width:200px" required/> 
												</td>	
											</tr>
	      								</table>			
	      							</div>
				    	  		</div>
				      				<div class="modal-footer">
				        			<button id="btn-eliminar" class="btn btn-default elemento_izquierda">Eliminar</button>
				        			<button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>
			  	
		  </div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/controlador_sucursal.js"></script>

</body>
</html>


   