<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");

  include_once("class/class_conexion.php");
  $conexion = new Conexion();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Poblacion', 'Datos'],

          <?php  

            $resultado = $conexion->ejecutarInstruccion("SELECT count(nombre_cliente) AS count FROM tbl_clientes");
              while($fila = $conexion->obtenerFila($resultado)){
                echo "['"."Clientes"."',".$fila['count']."],";
              }

            $resultado1 = $conexion->ejecutarInstruccion("SELECT count(nombre) AS count FROM tbl_empleados");
              while($fila1 = $conexion->obtenerFila($resultado1)){
                echo "['"."Empleados"."',".$fila1['count']."],";
              }

            $resultado2 = $conexion->ejecutarInstruccion("SELECT count(nombre_producto) AS count FROM tbl_productos");
              while($fila2 = $conexion->obtenerFila($resultado2)){
                echo "['"."Productos"."',".$fila2['count']."],";
              }

            $resultado3 = $conexion->ejecutarInstruccion("SELECT count(nombre_sucursal) AS count FROM tbl_sucursales");
              while($fila3 = $conexion->obtenerFila($resultado3)){
                echo "['"."Sucursales"."',".$fila3['count']."],";
              }

            $resultado4 = $conexion->ejecutarInstruccion("SELECT count(nombre) AS count FROM tbl_proveedor");
              while($fila4 = $conexion->obtenerFila($resultado4)){
                echo "['"."Proveedores"."',".$fila4['count']."]";
              }

          ?>
        ]);


        var options = {
          title: 'Estadisticas Generales',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
	  <li class="active"><a href="#">Inicio</a></li>
	  <li><a href="menu_administrador.php">Regresar</a></li>
	</ul>
    </nav> 
  </div> 
</header>

<div align="center">
<div id="piechart" style="width: 900px; height: 500px;"></div>
</div>
</body>
</html>