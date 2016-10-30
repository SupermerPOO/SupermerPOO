<?php 
	
	if($_POST["txt-codigo"]==""){
		echo "# Facturas esta vacio<br>";
	}

	if($_POST["txt-fecha"]==""){
		echo "Agregue una fecha<br>";	
	}

	if($_POST["txt-codigo-producto"] ==""){
		echo "Codigo de producto vacio<br>";
	}

	if($_POST["txt-unidades"]==""){
		echo "No hay numero de unidades<br>";
	}

	if($_POST["txt-cliente"]==""){
		echo "Ingrese un nombre de cliente<br>";
	}
	
	if($_POST["txt-identidad"]==""){
		echo "No hay numero identidad<br>";	
	}
	if($_POST["txt-descuento"]==""){
		echo "No hay descuento<br>";	
	}
	
	if($_POST["txt-isv"]==""){
		echo "No hay ISV<br>";
	}
	
?>