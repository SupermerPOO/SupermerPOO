<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="css/ihover.min.css">
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
	            	<a href="index.php">Volver</a>
	          	</li>
      		</ul> 
    	</nav> 
  	  </div> 
    </header>   
	

	      <div>
				<input type="search" id="buscar" placeholder="Buscar" class="form-control input-lg input-search ">
	      </div>
	      <br>

	  <div style="margin-left: 15%" class="table-responsive container">
	  	  <div class="row" id="tarjetas">
          
      </div>
	  </div>
	   

	      


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/controlador_sucursal.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  cargarTarjeta();

});


function cargarTarjeta(){
  $.ajax({
      url:"ajax/acciones_formularios_carlos.php?accion=12",
      method: "POST",
      success:function(resultado){
        $("#tarjetas").html(resultado);
      },
      error:function(){

      }
  });
}
</script>
</body>
</html>