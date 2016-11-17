$(document).ready(function(){

	$.ajax({
			url:"ajax/procesar_usuarios.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#div-tabla-usuarios").html(resultado);
			},
			error:function(){

			}
	});


	$("#btn-registrar").click(function(){
				var parametros = "cbo-privilegio="+$("#cbo-privilegio").val()+
								 "&txt-usuario="+$("#txt-usuario").val()+
								 "&txt-password="+$("#txt-password").val()+
								 "&txt-password-confirm="+$("#txt-password-confirm").val();


			var errores="";
			if($("#txt-usuario").val()==""){
				errores += "Ingrese un nombre de usuario, ";
			}

			if($("#txt-password").val()==""){
				errores += "Ingrese una contraseña, ";
			}

			if($("#txt-password-confirm").val()==""){
				errores += "Ingrese una contraseña de confirmacion";
			}
			
			alert(errores); 


				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=2",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#btn-registrar").button("reset");
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			
			
	});

	$("#btn-actualizar").click(function(){
				var parametros = "input-codigo="+$("#input-codigo").val()+
								 "&input-privilegio="+$("#input-privilegio").val()+
								 "&input-nombre="+$("#input-nombre").val()+
								 "&input-password="+$("#input-password").val();
			
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=3",
					method:"POST",
					data: parametros,
					success:function(respuesta2){
						$("#btn-actualizar").button("reset");
						//cargarTabla();
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
	});

	$("#btn-eliminar").click(function(){
				var parametros = "cbo-usuario2="+$("#cbo-usuario2").val();
			
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=4",
					method:"POST",
					data: parametros,
					success:function(respuesta1){
						$("#btn-eliminar").button("reset");
						//cargarTabla();
						//$("#cbo-usuario").val(' ');
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
	});

});

/*function cargarTabla(){
	$.ajax({
			url:"ajax/procesar_usuarios.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#div-tabla-usuarios").html(resultado);
			},
			error:function(){

			}
	});
}*/