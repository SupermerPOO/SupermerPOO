$(document).ready(function(){
	cargarTabla();

	$("#btn-guardar").click(function(){
				$("#btn-guardar").button("loading");
				var parametros = "input-casilla="+$("#input-casilla").val()+
								 "&input-nombre="+$("#input-nombre").val()+
								 "&input-direccion="+$("#input-direccion").val()+
								 "&input-telefono="+$("#input-telefono").val();
				$.ajax({
					url:"ajax/acciones_formularios_carlos.php?accion=3",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						$("#btn-guardar").button("reset");
						cargarTabla();
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
	});

	$("#buscar").keypress(function(e) {
       if(e.which == 13) {
          $.ajax({
					url:"ajax/acciones_formularios_carlos.php?accion=4",
					method:"POST",
					success:function(respuesta){
						$("#div-botones").html(resultado);
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
       }
    });
});


function cargarTabla(){
	$.ajax({
			url:"ajax/acciones_formularios_carlos.php?accion=2",
			method: "POST",
			success:function(resultado){
				$("#div-tabla-sucursal").html(resultado);
			},
			error:function(){

			}
	});
}