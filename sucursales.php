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
				        			<form method="link" action="menu_administrador.php"><input type="submit" name="btn-confirmar" value="Confirmar" class="btn btn-default"></form>
				        			<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div><!-- /.modal-content -->
				  		</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
	          	</li>
      		</ul> 
    	</nav> 
  	  </div> 
    </header>   
	
	      <!--Barra de busqueda-->
	      <div>
	      		<form action="">
					<input type="search" name="nombre" placeholder="Buscar" class="form-control input-lg input-search">
				</form>
	      </div>
	      <br>
	      <div>
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
	      <div id="div-registro-sucursal">
						<label id="label-numero-sucursal"><b>Numero de Tienda:</label>
						<input id="input-casilla" type="text" name="casilla" value="Numero">
						<input id="input-plus" type="button" value="-" onClick="add(-1);">
						<input id="input-menos" type="button" value="+" onClick="add(1);">

						<label id="label-nombre-sucursal"><b>Nombre:</label>
						<input id="input-nombre" type="text" placeholder="Nombre de Sucursal">
						<label id="label-direccion-sucursal"><b>Direccion:</label>
						<input id="input-direccion" type="text" placeholder="Direccion"><br><br>
	      			
	      				<label id="label-telefono-sucursal"><b>Telefono:</label>
						<input id="input-telefono" type="text" placeholder="Telefono"><br><br>
	      </div>
	      <div id="div-botones" class="btn-group">
						<button id="btn-nuevo" class="btn btn-default">Nuevo</button>
						<button id="btn-guardar" class="btn btn-primary">Guardar</button>
						<button id="btn-actualizar" class="btn btn-info">Actualizar</button>
						<button id="btn-eliminar" class="btn btn-warning">Eliminar</button>
		  </div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


   