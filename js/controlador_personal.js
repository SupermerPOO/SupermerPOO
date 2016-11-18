$(document).ready(function(){
	$.ajax({
			url:"ajax/acciones_formularios_carlos.php?accion=4",
			method: "POST",
			success:function(resultado){
				$("#btn-actualizar-empleado").hide();
				$("#div-tabla-personal").html(resultado);
			},
			error:function(){

			}
	});


	$("#btn-cargar-empleado").click(function(){
		
		if($('#txt-codigo-empleado').val()!=''){
			$('#div-error').css('display','none');

			var parametro = "txt-codigo-empleado="+$("#txt-codigo-empleado").val();
			$.ajax({
			url: "ajax/acciones_formularios_carlos.php?accion=9",
			method:"POST",
			data: parametro,
			success: function(resultado3){
				$("#btn-actualizar-empleado").show();
				$("#btn-cargar-empleado").hide();
				$("#cuerpo-empleado").html(resultado3);
			}
		})
		}else{
			$('#div-error').css('display','inline');

		}
		
	});

	$("#btn-actualizar-empleado").click(function(){
		
			var parametro = 'txt-codigo-empleado='+$("#txt-codigo-empleado").val()+
							'&txt-nombre-empleado='+$("#txt-nombre-empleado").val()+
							'&txt-apellido-empleado='+$("#txt-apellido-empleado").val()+
							'&txt-no-identidad='+$("#txt-no-identidad").val()+
							'&txt-area='+$("#txt-area").val()+
							'&txt-cargo='+$("#txt-cargo").val()+
							'&txt-domicilio='+$("#txt-domicilio").val()+
							'&txt-telefono='+$("#txt-telefono").val()+
							'&txt-email='+$("#txt-email").val()+
							'&txt-fecha-ingreso='+$("#txt-fecha-ingreso").val()+
							'&txt-sueldo='+$("#txt-sueldo").val();
			$.ajax({
			url: "ajax/acciones_formularios_carlos.php?accion=10",
			method:"POST",
			data: parametro,
			success: function(resultado3){
				$("#btn-actualizar-empleado").hide();
				$("#btn-cargar-empleado").show();
				$.ajax({
			url:"ajax/acciones_formularios_carlos.php?accion=4",
			method: "POST",
			success:function(resultado){
				$("#btn-actualizar-empleado").hide();
				$("#div-tabla-personal").html(resultado);
			},
			error:function(){

			}
	});
			}
		})
	});

	$("#btn-agregar-empleado").click(function(){





		if ($("#txt-nombre").val()!='' && $("#txt-apellido").val()!='' && $("#txt-identidad").val()!='' &&
			$("#txt-area").val()!='' && $("#txt-cargo").val()!='' && $("#txt-usuario").val()!='' && 
			$("#txt-domicilio").val()!='' && $("#txt-telefono").val()!='' && $("#txt-correo").val()!='' &&
			$("#txt-fecha-nacimiento").val()!='' && $("#txt-fecha-ingreso").val()!='' && $("#txt-sueldo").val()!='')
			 {
			 		$("#validacionPersonal").css('display','none');
			 		var parametro = 'txt-nombre='+$("#txt-nombre").val()+
							'&txt-apellido='+$("#txt-apellido").val()+
							'&txt-identidad='+$("#txt-identidad").val()+
							'&txt-area='+$("#txt-area").val()+
							'&txt-cargo='+$("#txt-cargo").val()+
							'&txt-usuario='+$("#txt-usuario").val()+
							'&txt-domicilio='+$("#txt-domicilio").val()+
							'&txt-telefono='+$("#txt-telefono").val()+
							'&txt-correo='+$("#txt-correo").val()+
							'&txt-fecha-nacimiento='+$("#txt-fecha-nacimiento").val()+
							'&txt-fecha-ingreso='+$("#txt-fecha-ingreso").val()+
							'&txt-sueldo='+$("#txt-sueldo").val();
			$.ajax({
			url: "ajax/acciones_formularios_carlos.php?accion=11",
			method:"POST",
			data: parametro,
			success: function(resultado4){
				
				$.ajax({
				url:"ajax/acciones_formularios_carlos.php?accion=4",
				method: "POST",
				success:function(resultado){
					$("#div-tabla-personal").html(resultado);
				},
					error:function(){

				}
			});
			}
		});
			 }else{
			 	$("#validacionPersonal").css('display','inline');
			 }
		
		
	});
});
