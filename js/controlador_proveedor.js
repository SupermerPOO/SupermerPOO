$(document).ready(function(){
	$.ajax({
			url:"ajax/acciones_proveedor.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#div-tabla-proveedores").html(resultado);
			},
			error:function(){

			}
	});

});

