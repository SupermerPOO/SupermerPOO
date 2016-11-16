<?php  
	include_once("class/class_conexion.php");
	include_once("class/class_sucursal.php");
	include_once("class/class_producto.php");
	$conexion = new Conexion();

	session_start(); 
  	if(!isset($_SESSION['codigo_usuario']))
    	header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ventas</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
      <a href="menu_cajero.php" class="navbar-brand"><label style="color: white; font-family: 'Trebuchet MS'">Inicio</label></a> 
    </div> 
    <nav class="navbar-collapse collapse" id="bs-navbar" aria-expanded="false" style="height: 1px;"> 
      <ul class="nav navbar-nav">  
        <li> 
          <a href="menu_cajero.php">Salir</a> 
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
    </nav> 
  </div> 
</header>

<h3 align="center" style="color: green">Ventas</h3>
<div class="table-responsive">
	<table class="table table-hover table-bordered">
		<tr>
			<td width="80px"># Factura</td>
			<td width="150px"><input type="text" id="txt-codigo" class="form-control" style="width: 50px"></td>
			<td width="250px" align="center"><input type="date" id="txt-fecha" class="form-control" placeholder="Fecha" style="width: 200px"></td>
			<td width="250px" align="center"> <?php Sucursal::mostrarSucursal($conexion); ?> </td>
			<td width="250px" align="center">
				<select class="form-control" style="width: 100px">
					<option value="1">Caja 1</option>
					<option value="2">Caja 2</option>
					<option value="3">Caja 3</option>
					<option value="4">Caja 4</option>
					<option value="5">Caja 5</option>
				</select>
			</td>
			<td align="center"><label>Nombre cajero</label></td>
		</tr>
	</table>
</div>

<div class="table-responsive" id="tabla">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td width="150px" align="center">Codigo Producto</td>
				<td align="center">Nombre Producto</td>
				<td align="center">Unidades</td>
				<td align="center">Precio</td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</div>

<div class="table-responsive">
	<table class="table table-hover table-hover" style="margin-top: 50px">
		<tr>
			<td width="50px"> 
				<select id="cbo-producto" class="form-control" style="width: 250px">
					<?php Producto::mostrarProducto($conexion); ?>
				</select>
			</td>
			<td width="50px"><input type="text" id="txt-unidades" class="form-control" style="width: 50px" placeholder="#"></td>
			<td><button class="btn btn-primary" id="btn-agregar" style="width: 40px; height: 35px" onclick="seleccionarProducto()">></button></td>
			<td width="119px">Nombre Cliente:</td>
			<td width="250px"><input type="text" id="txt-cliente" class="form-control" style="width: 200px"></td>
			<td width="80px">Identidad:</td>
			<td width="260px"><input type="text" id="txt-identidad" class="form-control" style="width: 200px"></td>
			<td width="120px">Total Productos:</td>
			<td><label># Productos</label></td>
		</tr>
		</table>
		<table class="table table-responsive">
		<tr>
			<td style="padding-left: 1000px; width: 50px">Descuentos(%):</td>
			<td><input type="text" id="txt-descuento" class="form-control" style="width: 250px"></td>
		</tr>
		<tr>
			<td style="padding-left: 1000px;">ISV:</td>
			<td><input type="text" id="txt-isv" style="width: 250px; " class="form-control"></td>
		</tr>
		<tr>
			<td style="padding-left: 1000px;">Total:</td>
			<td><input type="text" id="txt-total" disabled="disabled" style="width: 250px" class="form-control"></td>
		</tr>
		<tr>
			<td style="padding-left: 1000px;">
				<button class="btn btn-warning" id="btn-pago"><a href="#" data-toggle="modal" data-target="#myModal">Efectuar Pago</a></button>
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
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				      </div>
				    </div>
				  </div>
				</div>
			</td>
		</tr>	
	</table>
</div>


<script>
	
	$(document).ready(function(){
			$("#btn-pago").click(function(){
				var parametros = "txt-codigo=" + $("#txt-codigo").val() + "&" + "txt-fecha=" + $("#txt-fecha").val() + "&" + "txt-unidades=" + $("#txt-unidades").val() + "&" + "txt-cliente=" + $("#txt-cliente").val() + "&" + "txt-identidad=" + $("#txt-identidad").val() + "&" + "txt-descuento=" + $("#txt-descuento").val() + "&" + "txt-isv=" + $("#txt-isv").val();

				$.ajax({
					url:"ajax/validaciones_ventas.php?accion=1",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#btn-pago").button("reset");
						$("#div-respuesta").html(respuesta)
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});	
		});

	function seleccionarProducto(){
		//alert("Codigo: " + codigoUsuario + ", Nombre: " + nombreUsuario);
		$("#cbo-producto").val();

		var parametros = "codigoProducto="+$("#cbo-producto").val();
		
		$.ajax({
			url:"ajax/validaciones_ventas.php?accion=2",
			method: "POST",
			data:parametros,
			success:function(resultado){
				$("#tabla tbody").html(resultado);
			},
			error:function(){
				alert(parametros);
			}
		});
	}

	/*$(document).ready(function(){
	$("#btn-agregar").click(function(){
			var parametros = "cbo-producto=" +$("#cbo-producto").val() + "&txt-unidades="+$("#txt-unidades").val();
			//alert(parametros);
			$.ajax({
				url:"ajax/validaciones_ventas.php?accion=2",
				method: "POST",
				data: parametros,
				dataType: 'json	',
				success:function(productos){
					$("#tabla tbody").html(productos);
				},
				error:function(){

				}
		});
	});	
});*/

	/*$(document).ready(function(){
		$("#btn-agregar").click(function(){
			var parametros = "cbo-producto=" + $("#cbo-producto").val() + "&" + "txt-unidades=" + $("#txt-unidades").val();
			
			$.ajax({
					url:"ajax/validaciones_ventas.php?accion=2",
					method:"POST",
					data: parametros,
					success:function(resultado){
						$("#tabla").html(resultado)
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	

			var url = "class/class_producto.php";
			$("#tabla tbody").html("");
			$.getJSON(url, function(productos){
				$.each(productos, function(i, producto){
					var fila = 
					"<tr>"
						+"<td>"+producto.codigo+"</td>"
						+"<td>"+producto.nombre+"</td>"
						+"<td>"+ $("#txt-unidades").val() +"</td>"
						+"<td>"+producto.precio+"</td>"
				+"</tr>";
				$(fila).appendTo("#tabla tbody");
				});
			});
		});
	});*/

</script>

</body>
</html>