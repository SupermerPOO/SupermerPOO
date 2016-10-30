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


	      <div class="container table-responsive">
	      	<table id="tabla-sucursal" class="table table-striped table-bordered table-responsive">
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
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				<tr>
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
 				</tr>
 				<tr>
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
 				</tr>
 				<tr>
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
 				</tr>
 				<tr>
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
 				</tr>
 				<tr>
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
 				</tr>
			</table>
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
	      		       							 <label id="label-numero-sucursal"><b>Numero de Tienda:</b></label>
	      		       							 </td>
												 <td>
													 <input class="form-control" id="input-plus" type="button" value="+" onClick="add(-1);" style="width: 40px">
													<input id="input-casilla" type="text" name="casilla" placeholder="Numero" class="form-control" style="width:200px"> 
													<input class="form-control" id="input-menos" type="button" value="-" onClick="add(1);" style="width: 40px">
												</td>
											</tr>
											<tr>
												<td>
													<label id="label-nombre-sucursal"><b>Nombre:</b></label>
													<td>
													<input id="input-nombre" type="text" placeholder="Nombre de Sucursal" style="margin-left: 5px" class="form-control" style="width:200px">
													</td>
												</td>
											</tr>
											<tr>
												<td>
													<label id="label-direccion-sucursal"><b>Direccion:</b></label>
													<td>
													<input id="input-direccion" type="text" placeholder="Direccion" style="width:200px" style="margin-left: 5px" class="form-control"> 
													</td>
												</td>
											</tr>
											<tr>
												<td>
													<label id="label-telefono-sucursal"><b>Telefono:</b></label>
													<td>
													<input id="input-telefono" type="text" placeholder="Telefono" style="margin-left: 5px" style="width: 200px" class="form-control">
													</td>
												</td>
	      									</tr>
	      								</table>			
	      							</div>
				    	  		</div>
				      				<div class="modal-footer">
				        			<button id="btn-guardar" name="btn-guardar" class="btn btn-default elemento_izquierda">Guardar</button>
				        			<button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>
			   <button id="btn-actualizar" class="btn btn-info elemento_izquierda">Actualizar</button>
			   <button id="btn-eliminar" class="btn btn-warning elemento_izquierda">Eliminar</button>
		  </div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


   