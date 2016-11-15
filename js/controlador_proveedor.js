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

});

