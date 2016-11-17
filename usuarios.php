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
	
	<div class="container table-responsive" id="div-tabla-usuarios">
   <table id="tabla-usuarios" class="table table-striped table-hover table-bordered" style="width: 100%; margin-top: 1%;">
  </table> 
  </div>
  <div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalusuario" id='actu' style="width: 120px">Actualizar</button>
    

      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalusuario" id='eli' style="width: 120px">Eliminar</button>
  </div>


  <!-- MODAL QUE SIRVE  -->

      <table class="table table-condensed">
    <tr>
      <td colspan="4" align="right" style="padding-right: 50px">
        <div id="myModalusuario" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center"><div id='Titulo' ></div></h4>
              </div>
              <div class="modal-body" id="cuerpoModal">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Codigo Usuario:</td>
                      <td><input type="text" id="txt-codigo-usuario" class="form-control" style="width: 250px" placeholder="Ingrese el Codigo de Usuario"></td>
                    </tr>
                   
                  </table>
                </div>
              </div>
              <div id="errorCampo1" style="display: none; color: #BC2F27">El campo esta vacio </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success"  id="btn-guardarCodigo" style="display: inline;" >Guardar</button>
                 <button type="button" class="btn btn-success"  id="btn-actualizarCodigo" data-dismiss="modal" style="display: none;" >Actualizar</button>
                 <button type="button" class="btn btn-success"  id="btn-eliminarCodigo" data-dismiss="modal" style="display: none;" >Eliminar</button>
                <button  type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>



	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/controlador_usuarios.js"></script>
</body>
</html>