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
	$('#btn-editar-empleado').click(function(e){
		e.preventDefault();
		$.ajax({
			url:"ajax/control_proveedores.php?accion=5",
			method: "POST",
			success:function(resultado1){
				//$("#div-tabla-proveedores").html(resultado1);
			},
			error:function(){

			}
	});


	});





	$('#btn-guardaredicion').click(function(e){
		e.preventDefault();
		$('#validarCampo').css('display', 'none');
		 

		 if($('#txt-codigoProveedor').val()!='' ){
		 	
		$.ajax({
			url:"ajax/control_proveedores.php?accion=5",
			method: "POST",
			success:function(resultado1){
				$("#cuerpoModal").html(resultado1);
			},
			error:function(){

			}
	});
	   }else
	   $('#validarCampo').css('display', 'none');


	});



});

