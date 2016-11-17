$(document).ready(function(){
	$.ajax({
			url:"ajax/acciones_formularios_carlos.php?accion=1",
			method: "POST",
			success:function(resultado1){
				$("#div-tabla-proveedores").html(resultado1);
			},
			error:function(){

			}
	});
	$('#actualizar').click(function(e){
		e.preventDefault();
		var parametros="empresa="+$("#slc-empresa").val()+
		                "&rtn="+$("#txt-rtn").val()+
		                "&direccion="+$("#txt-direccion").val()+
		                "&correo="+$("#txt-correo").val()+
		                "&telefono="+$("#txt-telefono").val()+
		                "&registro="+$("#txt-registro").val()+
		                "&codigo="+$("#txt-codigo").val();
		


		$.ajax({
			url:"ajax/control_proveedores.php?accion=6",
			method: "POST",
			data:parametros,
			success:function(resultado1){
					$.ajax({
			url:"ajax/acciones_formularios_carlos.php?accion=1",
			method: "POST",
			success:function(resultado1){
				$("#div-tabla-proveedores").html(resultado1);
			},
			error:function(){

			}
	});
			},
			error:function(){

			}
	});


	});





	$('#btn-enviarCodigo').click(function(e){
		e.preventDefault();
		
		

		 if($('#txt-codigoProveedor').val()!='' ){
		 	$('#validarCampo').css('display', 'none');

		 	var parametros = "codigo="+$('#txt-codigoProveedor').val();
		 
		 	
						$.ajax({
							url:"ajax/control_proveedores.php?accion=5",
							method: "POST",
							data: parametros,
							success:function(resultado1){
								$("#cuerpoModal").html(resultado1);
								$('#actualizar').css('display', 'inline');
								$('#btn-enviarCodigo').css('display','none');
							},
							error:function(){

							}
					});
	   }else{
	   $('#validarCampo').css('display', 'none');
}

	});



});

