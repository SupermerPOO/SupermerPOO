<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Lista de Proveedores</title>
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
								        <p>Esta a punto de salir de la Lista de Proveedores, para confirmar precione Aceptar, sino presione cancelar</p>
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

	      <div>
				<input id="buscador" type="search" name="nombre" placeholder="Buscar" class="form-control input-lg input-search">
	      </div>
	      <br>

	      <div class="container table-responsive" id="div-tabla-proveedores">
	      		
		  </div>

		  <div id="div-botones-lista-empleados" class="btn btn-group">
		  		<a href="registro_proveedor.php" class="btn btn-default">Agregar Proveedor</a>
		  		<a href="registro_proveedor.php" id="btn-editar-empleado" class="btn btn-primary" style="margin-left: 5px">Editar Proveedor</a>
		  </div>


		  <div id="my-Modal" class="modal fade" tabindex="-1" role="dialog">
		    
         </div><!-- /.modal -->


	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/controlador_proveedor.js"></script>

</body>
</html>