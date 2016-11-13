

<?php
include_once('../class/class_conexion.php');
$conexion = new Conexion();


switch ($_GET['accion']) {
	case '1':

		echo 

		"<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> BALANZA DE COMPROBACION</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
				"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."No."."</td>".
					"<td align='center'> "."Cuentas"."</td>".
					"<td colspan='2' align='center'> "."Movimientos"."</td>".
					"<td  colspan='2' align='center'> "."Saldos"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> ".""."</td>".
					"<td> "." "."</td>".
					"<td> "."Deudor"."</td>".
					"<td> "."Acreedor"."</td>".
					"<td> "."Deudor"."</td>".
					"<td> "."Acreedor"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
				
		break;
	case '2':
	echo 
		"<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> BALANCE GENERAL</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
				"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"." "."</td>".
					"<td align='center'>"."Concepto"."</td>".
					"<td align='center'> "." "."</td>".
					"<td align='center'> "." "."</td>".
					"<td  align='center'> "." "."</td>".
					"<td  align='center'> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."0"."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."TOTAL:"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
		break;
		case '3':
		echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> ESTADO DE RESULTADO</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='6'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
				"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"." "."</td>".
					"<td align='center'>"."Concepto"."</td>".
					"<td align='center'> "." "."</td>".
					"<td align='center'> "." "."</td>".
					"<td  align='center'> "." "."</td>".
					"<td  align='center'> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."0"."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."TOTAL:"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
		break;
		case '4':
		echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td>Articulo: </td><td>X</td><td>Cantidad Maxima:</td><td>X</td><td colspan='7'> TARJETA DE ALMACEN</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td>Articulo: </td><td>X</td><td>Cantidad Maxima:</td><td>X</td><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
				"<tr class='active' style='color: #D6A80C;' align='center'>".
					"<td >"."Fecha"."</td>".
					"<td '>"."Concepto"."</td>".
					"<td colspan='3'> "."Entrada"."</td>".
					"<td colspan='3'> "."Salidas"."</td>".
					"<td  colspan='3'> "."Existencias"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." Unidades"."</td>".
					"<td> "." Costo Unitario"."</td>".
					"<td> "." Total"."</td>".
					"<td> "." Unidades"."</td>".
					"<td> "." Costo Unitario"."</td>".
					"<td> "." Total"."</td>".
					"<td> "." Unidades"."</td>".
					"<td> "." Costo Unitario"."</td>".
					"<td> "." Total"."</td>".

				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."TOTAL:"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
		break;
		case '5':
		echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='13'> PLANILLA DE EMPLEADOS</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='13'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
				"<tr class='active' style='color: #D6A80C;' align='center'>".
					"<td >"."No."."</td>".
					"<td >"."Cargo"."</td>".
					"<td > "."Nombre"."</td>".
					"<td colspan='2'> "."Sueldos"."</td>".
					"<td colspan='6' > "."Deducciones"."</td>".
					"<td > "."Total Deducciones"."</td>".
					"<td > "."Sueldo Neto"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." Ventas"."</td>".
					"<td> "."Administrador"."</td>".
					"<td colspan='2'> "."IHSS"."</td>".
					"<td colspan='2'> "."RAP"."</td>".
					"<td colspan='2'> "."INFOP"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				
					
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> ".""."</td>".
					"<td> "." "."</td>".
					"<td> "."TOTAL: "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
		break;

	case '6':

		echo 

		"<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO DIARIO</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='left' style='color:#000000'>
		<strong>
		<td>Fecha <input type='text' name='re-fecha' id='re-fecha' placeholder='12/12/16'></td>
		<td>Descripción: <input type='text' name='txt-descripcion' id='txt-descripcion'></td>
		<td></td>
		<td>SubCuenta: <br><input type='checkbox' name='ch-subcuenta' id='ch-subcuenta'>FICOHSA S.A.</input><br>"."<input type='checkbox' name='ch-subcuenta' id='ch-subcuenta'>FERRETERIA EL TITO S.A</input><br>"."<input type='checkbox' name='ch-subcuenta' id='ch-subcuenta'>UTILES DE HONDURAS S.A</input><br>"."<input type='checkbox' name='ch-subcuenta' id='ch-subcuenta'>DISTRIBUIDORA DINAN S. de R. L.</input></td>".

		"<td>Cuenta Cargada: <select  name='cta-cargada' id='cta-cargada'><option>Bancos</option><option>Proveedores</option></select></td>
		<td colspan='2'>Cuenta Acreditada: <select  name='cta-acreditada' id='cta-acreditada'><option>Bancos</option><option>Proveedores</option></select></td>
		</strong>
		</tr>".
				"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."No."."</td>".
					"<td  align='center'> "."Parcial"."</td>".
					"<td align='center'> "."Debe"."</td>".
					"<td  align='center'> "."Haber"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
				
		break;
	case '7':
	
	?>

	<table class='table table-bordered contenedor' align='center'>
		<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO DIARIO</td></strong></tr><br>
		<tr align='center' style='color:#000000'><strong>
		<td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>
				<tr class='active' style='color: #D6A80C;' align='center'>
					<td >Fecha</td>
					<td colspan="2"> Concepto</td>
					
					<td > No.</td>
					<td > Parcial</td>
					<td > Debe</td>
					<td > Haber</td>
				</tr>
				
				<?php
				$libro = $conexion->ejecutarInstruccion(
					'SELECT 
					codigo_partida, 
					fecha_partida, 
					descripcion
					FROM tbl_libro_diario'
					);

		
					while($fila = $conexion->obtenerFila($libro)){

								echo "<tr align='center'>;
										<td>".$fila['fecha_partida']."</td>";
					

										$cargadas = $conexion->ejecutarInstruccion(sprintf(
											'SELECT 
													codigo_partida, 
													codigo_cuenta,
													monto, 
													 facturaX
												FROM tbl_libro_diario_x_tbl_cuenta_cargada

												WHERE codigo_partida = "%s"',
										stripslashes($fila['codigo_partida']))
											);
					

										while ($filacargada=$conexion->obtenerFila($cargadas)){
									
													$cuentas = $conexion->ejecutarInstruccion(
																	'SELECT codigo_cuenta , nombre
																	FROM tbl_cuenta'
																	);
															
												
													while ($filaNombre = $conexion->obtenerFila($cuentas)) {

																if($filacargada['codigo_cuenta']==$filaNombre['codigo_cuenta']){

																		echo "<td>".$filaNombre['nombre']."</td><td></td>";

																}
													
													}
											
													echo  "<td>".$fila['codigo_partida']."</td>
													<td> </td>
													<td>".$filacargada['monto']."</td>
													<td> </td>";
													echo "<tr>";


										}
						
							
										$acreditadas = $conexion->ejecutarInstruccion(sprintf(
											'SELECT 
													codigo_partida, 
													codigo_cuenta,
													monto, 
													 facturaX
												FROM tbl_libro_diario_x_tbl_cuenta_acreditada

												WHERE codigo_partida = "%s"',
										stripslashes($fila['codigo_partida']))
											);
					

										while ($filaacreditada=$conexion->obtenerFila($acreditadas)){
														echo "<tr align='center'>
															<td></td>";
													$cuentas = $conexion->ejecutarInstruccion(
																	'SELECT codigo_cuenta , nombre
																	FROM tbl_cuenta'
																	);
												
													while ($filaNombre = $conexion->obtenerFila($cuentas)) {

																if($filaacreditada['codigo_cuenta']==$filaNombre['codigo_cuenta']){

																		echo "<td></td><td>".$filaNombre['nombre']."</td>";

																}
													
													}
											
													echo  "<td >".$fila['codigo_partida']."</td>
													<td> </td>
													<td></td>
													<td >".$filaacreditada['monto']."</td>";
													echo "</tr>";



										}

						echo "<tr align='left'>
						<td ></td>
						<td colspan='2' style='color: #143882'>Descripcion: ".$fila['descripcion']."</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						</tr>";				

				}

				?>
				
					
					
					
					
				


			</table>;

	<?php
		
				



		break;
	case '8':

	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Bancos</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '9':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Caja</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '10':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Acreedores Varios</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '11':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Proveedores</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '12':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Utilidaad del Ejercicio</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '13':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Docuementos por cobrar</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '14':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Documentos por pagar</td></strong></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '15':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR AUXILIAR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Banco-FICOHSA S.A.</td></strong></tr>".

"<tr  style='color: #E46B25;'> <td colspan='3'>  Direccion: Col. Miramontes</td></tr>"."<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";

	break;
	case '16':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR AUXILIAR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Proveedores-FERRETERIA EL TITO S. de R. L. .</td></strong></tr>".

"<tr  style='color:#E46B25;'> <td colspan='3'>  Direccion: Col. Centro America Oeste</td></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '17':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR AUXILIAR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Proveedores-UTILES DE HONDURAS S. A.</td></strong></tr>".

"<tr style='color: #E46B25;'> <td colspan='3'>  Direccion: Col. Arturo Quezada</td></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '18':
	echo "<table class='table table-bordered contenedor' align='center'>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> LIBRO MAYOR AUXILIAR</td></strong></tr><br>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Del 23 de Enero del 2016 al 30 de Septiembre del 2016</td></strong></tr>".
		"<tr align='center' style='color:#000000'><strong><td colspan='7'> Proveedores-DISTRIBUIDORA DINAN S. de R. L.</td></strong></tr>".

"<tr  style='color: #E46B25;'> <td colspan='3'>  Direccion: Col. Los Higos</td></tr>".
"<tr class='active' style='color: #D6A80C;'>".
					"<td align='center'>"."Fecha."."</td>".
					"<td align='center'> "."Concepto"."</td>".
					"<td align='center'> "."Pda."."</td>".
					"<td  align='center'> "."Debe"."</td>".
					"<td align='center'> "."Haber"."</td>".
					"<td  align='center'> "."Saldo"."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
					"<td> ".""."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."1"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
					"<tr align='center'>".
					"<td> "."2"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."3"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."4"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".

				"<tr align='center'>".
					"<td> "."5"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>"."</tr>".

				"<tr align='center'>".
					"<td> "."6"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."7"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."8"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."9"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".
				"<tr align='center'>".
					"<td> "."10"."</td>".
					"<td> "."SUMAS"."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
					"<td> "." "."</td>".
				"</tr>".






			"</table>";
	break;
	case '19':
	break;
	default:
		# code...
		break;
}

?>

