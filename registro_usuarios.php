<?php 
	 session_start(); 
  		if(!isset($_SESSION['codigo_usuario']))
    	header("Location: index.php");

	include_once("class/class_conexion.php");
	include_once("class/class_usuario.php");

	$conexion = new Conexion();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<header class="bs-docs-nav navbar navbar-static-top" id="top">
    <div>
      <img  class="logo img-responsive" src="img/titulo4.png" align="center" width="500px" height="100px" hspace="450px">
    </div> 
  <div class="container"> 
    <div class="navbar-header"> 
      <button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
        
        <img src="img/icono-menu.png" style="width: 25px; height: 25px">
      </button> 
    </div> 
    <nav class="navbar-collapse collapse" id="bs-navbar" aria-expanded="false" style="height: 1px;"> 
	 <ul class="nav nav-tabs">
	  <li><a href="usuarios.php">Usuarios</a></li>
	  <li class="active"><a href="#">Registrar Usuario</a></li>
	  <li><a href="menu_administrador.php">Salir</a></li>
	</ul>
    </nav> 
  </div> 
</header>

	<h2 align="center" style="color: green">Registre un nuevo usuario</h2>

		<div class="container row">
		<table class="table table-responsive" style="margin-top: 5%;">
			<tr>
				<td style="padding-left: auto;" width="250px">Tipo Usuario:</td>
				<td><select class="form-control" style="width: 250px" id="cbo-privilegio"><?php Usuario::mostrarPrivilegio($conexion); ?></select></td>
			</tr>
			<tr>
				<td style="padding-left: auto;" width="250px">Nombre Usuario:</td>
				<td><input type="text" name="txt-usuario" id="txt-usuario" class="form-control" style="width: 250px" required></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="txt-password" id="txt-password" class="form-control" style="width: 250px"></td>
			</tr>
			<tr>
				<td>Confirmar Contraseña:</td>
				<td><input type="password" name="txt-password-confirm" id="txt-password-confirm" class="form-control" style="width: 250px"></td>
			</tr>

			<div id="errorCampo2" style="display: none; color: #BC2F27">El campo esta vacio </div>
			<tr>
				<td>

					<button class="btn btn-warning" id="btn-registrar">Registrar</button>

				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" align="center">Campos Vacios</h4>
				      </div>
				      <div class="modal-body">
				      <div align="center" id="div-respuesta">

				      </div><br><br>
				        
				        <div class="table-responsive">
				        	
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" id='btn-cancelar' data-dismiss="modal">Cancelar</button>
				      </div>
				    </div>
				  </div>
				</div>
				</td>
			</tr>
		</table>
		</div>

		<div id="div-respuesta2" style="visibility: hidden"></div>


	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/controlador_usuarios.js"></script>
</body>
</html>