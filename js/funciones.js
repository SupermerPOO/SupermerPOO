$(document).ready(function(){
$('#e-modal').click(function(){

	$.ajax({
			url:"ajax/validacion_contador.php?accion=2",
			method: "POST",
			success:function(resultado){

				$("#myModal").html(resultado);
	
				
			},
			error:function(){

			}
		});
});


$("#guardarModal").click(function(){
	alert("Que paso aqui");
			
		if($("#txt-nombre").val()!=""){
				var parametros=
			"txt-nombre="+$("#txt-nombre").val()+
			"&slc-naturaleza="+$("#slc-naturaleza").val();
		alert(parametros);
				$.ajax({
					url:"ajax/validacion_contador.php?accion=1",
					method: "POST",
					data: parametros,
					success:function(resultado){

						$("#myModal").html(resultado);

				

						
					},
					error:function(){

					}
				});
		}else{
			$("#td-natu").html("El nombre esta vacio");
		
		}



		
	});
	

/*function clickAqui(){
	alert("Ejecutando funcion"); 
	$(".texto-cool").html("Texto cambiado desde jquery");
}

mostrarValor = function(){
	//alert("Valor: "+document.getElementById("txt-texto").value); 
	alert("Valor: "+ $("#txt-texto").val()); 
}

asignarValor = function(){
	//document.getElementById("txt-texto").value="Valor asignado desde javascript";
	$("#txt-texto").val("Valor asignado utilizando jquery");
}

llenarDiv = function(){
	$("#div-contenido").html("<h1>Hola mundo, este contenido se asigno dinamicamente</h1>");
}

mostrarMensaje = function(){
	alert($("#span-mensaje").html());
}

mostrarImagen = function(){
	$("#vegeta").fadeIn(3000);
}

ocultarImagen = function(){
	$("#vegeta").fadeOut(3000);
	$(".texto-cool").fadeOut(3000);
}*/
});