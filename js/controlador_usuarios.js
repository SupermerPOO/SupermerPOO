$(document).ready(function(){

	$.ajax({
			url:"ajax/procesar_usuarios.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#tabla-usuarios").html(resultado);
			},
			error:function(){

			}
	});
	$('#actu').click(function(){
			$('#Titulo').html('Actualizar Registro');
			$('#btn-eliminarCodigo').css('display', 'none');
			$('#btn-guardarCodigo').css('display', 'inline');

	});

	$('#eli').click(function(){
			$('#Titulo').html('Eliminar Registro');
			$('#btn-eliminarCodigo').css('display', 'inline');
			$('#btn-guardarCodigo').css('display', 'none');
	});

	$('#btn-eliminarCodigo').click(function(){
	if($("#txt-codigo-usuario").val()!=''){

				var parametros = "codigo="+$("#txt-codigo-usuario").val();
								 

					$('#errorCampo1').css('display','none');
					//$('#btn-guardarCodigo').css('display','none');

		

				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=4",
					method:"POST",
					data: parametros,
					success:function(respuesta){
					
						$('#cuerpoModal').html(respuesta);
							$.ajax({
								url:"ajax/procesar_usuarios.php?accion=1",
								method: "POST",
								success:function(resultado){
									$("#tabla-usuarios").html(resultado);
								},
								error:function(){

							}
						});
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	

		}else{
			$('#errorCampo1').css('display','inline');

		}
			

	});
	$('#btn-guardarCodigo').click(function(){

		if($("#txt-codigo-usuario").val()!=''){

				var parametros = "codigo="+$("#txt-codigo-usuario").val();
								 

					$('#errorCampo1').css('display','none');
					$('#btn-guardarCodigo').css('display','none');

		

				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=5",
					method:"POST",
					data: parametros,
					success:function(respuesta){
					
						$('#cuerpoModal').html(respuesta);
						$("#btn-actualizarCodigo").css('display','inline');
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
				
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=6",
					method:"POST",
					
					success:function(respuesta1){
						$('#cuerpoModal').html(respuesta);
						//cargarTabla();
						//$("#cbo-usuario").val(' ');
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	

		}else{
			$('#errorCampo1').css('display','inline');

		}
			
			
	});


	$("#btn-registrar").click(function(){
		if($("#cbo-privilegio").val()!='' && $("#txt-usuario").val()!='' && $("#txt-password").val()!='' && 
			$("#txt-password-confirm").val()){
			$('#errorCampo2').css('display','none');

			var parametros = "cbo-privilegio="+$("#cbo-privilegio").val()+
								 "&txt-usuario="+$("#txt-usuario").val()+
								 "&txt-password="+$("#txt-password").val()+
								 "&txt-password-confirm="+$("#txt-password-confirm").val();


		


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

		}else{
			$('#errorCampo2').css('display','inline');
		}
				
			
			
	});

	$("#btn-actualizarCodigo").click(function(){


		

				var parametros = "codigo="+$("#txt-codigoUsuario").val()+
								 "&privilegio="+$("#slc-privi").val()+
								 "&nombre="+$("#txt-nombre-usuario").val()+
								 "&password="+$("#txt-password").val();
			
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=3",
					method:"POST",
					data: parametros,
					success:function(respuesta2){
						//$("#btn-actualizar").button("reset");
						$('#btn-guardarCodigo').css('display','inline');
						$("#btn-actualizarCodigo").css('display','none');

							$.ajax({
			url:"ajax/procesar_usuarios.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#tabla-usuarios").html(resultado);
			},
			error:function(){

							}
					});

				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=6",
					method:"POST",
					
					success:function(respuesta1){
						$('#cuerpoModal').html(respuesta);
						//cargarTabla();
						//$("#cbo-usuario").val(' ');
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	


					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
	});

	$("#btn-cancelar").click(function(){
				
			
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=6",
					method:"POST",
					
					success:function(respuesta1){
						$('#cuerpoModal').html(respuesta);
						//cargarTabla();
						//$("#cbo-usuario").val(' ');
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

						
				$.ajax({
					url:"ajax/procesar_usuarios.php?accion=6",
					method:"POST",
					
					success:function(respuesta1){
						$('#cuerpoModal').html(respuesta);
						//cargarTabla();
						//$("#cbo-usuario").val(' ');
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
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