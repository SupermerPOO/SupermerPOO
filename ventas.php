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
			<td width="250px" align="center"><select class="form-control" style="width: 200px"><option>Sucursal</option></select></td>
			<td width="250px" align="center"><select class="form-control" style="width: 100px"><option># Caja</option></select></td>
			<td align="center"><label>Nombre cajero</label></td>
		</tr>
	</table>
</div>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<td width="150px" align="center">Codigo Producto</td>
			<td align="center">Nombre Producto</td>
			<td align="center">Unidades</td>
			<td align="center">Precio</td>
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
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</div>

<div class="table-responsive">
	<table class="table table-hover table-hover">
		<tr>
			<td width="50px"><input type="text" id="txt-codigo-producto" class="form-control" style="width: 200px" placeholder="Codigo Producto"></td>
			<td width="50px"><input type="text" id="txt-unidades" class="form-control" style="width: 50px" placeholder="#"></td>
			<td><button class="btn btn-primary">></button></td>
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
			<td><input type="text" id="txt-total" style="width: 250px" class="form-control"></td>
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
				var parametros = "txt-codigo=" + $("#txt-codigo").val() + "&" + "txt-fecha=" + $("#txt-fecha").val() + "&" + "txt-codigo-producto=" + $("#txt-codigo-producto").val() + "&" + "txt-unidades=" + $("#txt-unidades").val() + "&" + "txt-cliente=" + $("#txt-cliente").val() + "&" + "txt-identidad=" + $("#txt-identidad").val() + "&" + "txt-descuento=" + $("#txt-descuento").val() + "&" + "txt-isv=" + $("#txt-isv").val();

				$.ajax({
					url:"ajax/validaciones_ventas.php",
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
</script>

</body>
</html>