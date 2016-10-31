$(document).ready(function(){
$('#e-modal').click(function(){

	/*$.ajax({
			url:"ajax/validacion_contador.php?accion=2",
			method: "POST",
			success:function(resultado){

				$("#myModal").html(resultado);
	
				
			},
			error:function(){

			}
		});*/
});


$("#guardarModal").click(function(){

			
		if($("#txt-nombre").val()!=""){
				var parametros=
			"txt-nombre="+$("#txt-nombre").val()+
			"&slc-naturaleza="+$("#slc-naturaleza").val();
						
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
	
$("#btn-cemodal1").click(function(){

		
						
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

$("#btn-eliminar").click(function(evento){

		evento.preventDefault();
						
				$.ajax({
					url:"ajax/validacion_contador.php?accion=2",
					method: "POST",

					success:function(resultado){

						$("#my-Modal").html(resultado);

				

						
					},
					error:function(){
						

					}
				});




		
	});
	

 $("#btn-agregar").click(function(){
   $("#btn-agregar").button("loading");
        $("#img-carga").fadeIn(200);

  var parametros = "txt-proveedor="+$("#txt-proveedor").val()+"&"+"txt-rtn="+$("#txt-rtn").val()+"&"+"txt-empresa="+$("#txt-empresa").val()+"&"+"txt-direccion="+$("#txt-direccion").val()+"&"+"txt-telefono="+$("#txt-telefono").val()+"&"+"txt-correo="+$("#txt-correo").val()+"&"+"txt-producto="+$("#txt-producto").val()+"&"+"txt-registro="+$("#txt-registro").val()+"&"+"txt-fecha="+$("#txt-fecha").val();
  

  $.ajax({
    url:"ajax/procesar.php",
          method:"POST",
          data: parametros,

          success:function(respuesta){
             $("#img-carga").fadeOut(200);
            $("#btn-agregar").button("reset");
            $("#div-respuesta").html(respuesta);
          }

     });

  });




  $("#btn-registrar").click(function(){
    $("#btn-registrar").button("loading");
        $("#img-carga").fadeIn(200);


  var parametro = "txt-producto1="+$("#txt-producto1").val()+"&"+"txt-marca="+$("#txt-marca").val()+"&"+"txt-categoria="+$("#txt-categoria").val()+"&"+"txt-distribucion="+$("#txt-distribucion").val()+"&"+"txt-cantidad="+$("#txt-cantidad").val()+"&"+"txt-codigo="+$("#txt-codigo").val();

  $.ajax({
    url:"ajax/proceso.php",
          method:"POST",
          data: parametro,

          success:function(respuesta1){
            $("#img-carga").fadeOut(200);
            $("#btn-registrar").button("reset");
            $("#div-respuesta1").html(respuesta1);
          }

      });

   });
});