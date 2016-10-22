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
	  <li><a href="usuarios.php">Usuarios</a></li>
	  <li class="active"><a href="#">Registrar Usuario</a></li>
	  <li><a href="menu_administrador.php">Salir</a></li>
	</ul>
    </nav> 
  </div> 
</header>

	<h2 align="center" style="color: green">Registre un nuevo usuario</h2>

	<form>
		<table class="table table-hover" style="auto;">
			<tr>
				<td style="padding-left: auto;" width="250px">Tipo Usuario:</td>
				<td><select class="form-control" style="width: 250px">Tipo usuario</select></td>
			</tr>
			<tr>
				<td style="padding-left: auto;" width="250px">Nombre Usuario:</td>
				<td><input type="text" name="txt-usuario" id="txt-usuario" class="form-control" style="width: 250px"></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="txt-password" id="txt-password" class="form-control" style="width: 250px"></td>
			</tr>
			<tr>
				<td>Confirmar Contraseña:</td>
				<td><input type="password" name="txt-password-confirm" id="txt-password-confirm" class="form-control" style="width: 250px"></td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" style="width: 200px;">Registrar</button>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>