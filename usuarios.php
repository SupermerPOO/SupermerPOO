<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
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
	  <li class="active"><a href="#">Usuarios</a></li>
	  <li><a href="registro_usuarios.php">Registrar Usuario</a></li>
	  <li><a href="menu_administrador.php">Salir</a></li>
	</ul>
    </nav> 
  </div> 
</header>

<h2 style="color: green" align="center">Lista de usuarios registrados</h2>
	
	<div class="container table-responsive" id="div-tabla-usuarios"></div>


	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/controlador_usuarios.js"></script>
</body>
</html>