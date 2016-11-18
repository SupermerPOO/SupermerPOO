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
      		<a href="#" class="navbar-brand"><label style="color: white; font-family: 'Trebuchet MS'">Inicio</label></a> 
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
  	  <div id="div-error" style="display: none; color: red"> 
  	  	
  	  </div>
    </header> 


<h2 style="color: green" align="center">Lista de empleados</h2>

<!--Barra de busqueda-->
<br>
	<div class="container table-responsive" id="div-tabla-personal">
		
	</div>
	<div class="container table-responsive">
	<table class="table tabl-responsive table-condensed">
		<tr>
			<td colspan="4" align="right" style="padding-right: 50px">
				<button id="btn-editar-empleado" class="btn btn-danger" href="#" data-toggle="modal" data-target="#myModal0">Modificar Empleado</button>
				 <div id="myModal0" class="modal fade" tabindex="-1" role="dialog">
  					<div class="modal-dialog" role="document">
    					<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title">Modificar Empleado</h4>
      					</div>
      					<div class="modal-body" id="cuerpo-empleado">
        					<table>
        						<tr>
        							<td colspan="2" class="elemento_izquierda"><label>Codigo Empleado: </label><input type="text" id="txt-codigo-empleado"> </td>
        						</tr>
        					</table>
     					 </div>
     					 <div class="modal-footer">
     					  <button type="button" class="btn btn-primary" id="btn-cargar-empleado">Cargar</button>
     					  <button type="button" class="btn btn-danger" id="btn-actualizar-empleado" data-dismiss="modal">Actualizar</button>
      					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     					 </div>
 					  	</div>
 					 </div>
					</div>
				<a href="" data-toggle="modal" data-target="#myModal2"><button class="btn btn-warning">Nuevo Registro</button></a>
				<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" align="center">Registrar Empleado</h4>
				      </div>
				      <div class="modal-body">
				      <div align="center">
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
				        			<td><input type="text" id="txt-area" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Cargo:</td>
				        			<td><input type="text" id="txt-cargo" class="form-control" style="width: 180px" required></td>
				        		</tr>
				        		<tr>
				        			<td>Usuario:</td>
				        			<td><input type="text" id="txt-usuario" class="form-control" style="width: 180px" required></td>
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
				        			<td>
				        				Fecha de Nacimiento:
				        			</td>
				        			<td>
				        				<input type="text" id="txt-fecha-nacimiento" class="form-control" style="width: 180px" required>
				        			</td>
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
				      <div id="validacionPersonal" style="color: #D40A18; display: none;padding: 0px 0px 0px 10px"> Hay campos vacios</div>
				      <div class="modal-footer">
				        <button id="btn-agregar-empleado" type="button" class="btn btn-success" data-dismiss='modal'>Guardar</button>
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				      </div>
				    </div>
				  </div>
				</div>
			</td>
		</tr>
	</table>


	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/controlador_personal.js"></script>
</body>
</html>

 