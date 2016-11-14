<?php  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>LIBRO DIARIO</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body >

<header class=""  id="">

 <div style="color: #FFFFFF; padding-top: 30px" align="center" width="500px" height="100px" hspace="450px">
 <strong>LIBRO DIARIO</strong>
    </div>  
  <div class="container"  > 
    <div class="navbar-header">
   
      <button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
        
       <img src="img/icono-menu.png" style="width: 25px; height: 25px">
      </button> 
     
    </div>
  <a href="menu_contador.php" class="navbar-brand" ><span style="background-color: #22B14C; color:#FFFFFF" class="glyphicon glyphicon-arrow-left"></span></a>
    <nav class="navbar-collapse collapse " id="bsnavbar" aria-expanded="false" style="height: 1px;">
   

      <ul class="nav navbar-nav" id=lista> 

 
        <li id="pes1"> 
          <a href="#" data-toggle="modal" data-target="#myModal" id="a-Agregar">Agregar Partida</a>
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Cuantas clases acreditara y cargara</h4>
                      </div>

                          <div class="modal-body" id="cuerpo-modal">
                          <div style="padding: 50px 50px 0px 50px;">
                            <table class="table table-hover" align="center"> 
                            <tr>
                              <td >
                                 Nº cuentas cargadas:
                          
                        </td>
                        <td>
                        <input type="text" name="txt-numero-deudor" id="txt-numero-deudor" placeholder="" class="form-control">
                          
                        </td>


                      </tr>
                          <tr>
                        <td>
                        Nº cuentas acreditada:
                          
                        </td>
                        <td>
                      <input type="text" name="txt-numero-acreditada" id="txt-numero-acreditada" placeholder="" class="form-control">
                          
                        </td>


                      </tr>
                      <tr style="width: 150px" > <td id="td-natu" colspan="2"></td> <td></td></tr>

                      </table>
                          </div>
                          

                          </div> 
                          <div id='div-camposVacios' align='center' style="color: #D40A18; display: none;padding: 0px 0px 0px 200px"><strong></strong></div>
                           <div class="modal-footer" > <!-- Div botones -->
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                           <button type="button" id="btn-siguiente" class="btn btn-primary">Siguiente</button>
                           <button type="button" style="display: none" id="btn-guardar" class="btn btn-primary">Guardar</button>  

                        </div> 
                   
   

                       
                                  

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

           
     
        </li> 
        <li id="pes2"> 
          <a href="" id="vista1">Vista de Registro</a> 
        </li> 
        <li>
          <a href="index.php">Cerrar Sesión</a> 
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
 
    </nav> 

<div class="alert alert-success" role="alert">
  
  </div>

 
 
  </div> 
</header>
<header>
</header>
<hr>
<body>

<div style="padding: 10px 80px 20px 80px">
  
      <div id="tablas" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >



      </div>

</div>



<script type="text/javascript">
$(document).ready(function(){
  //INICIO DEL FORMULARIO
                            $.ajax({
                                    url:"ajax/procesar.php?accion=7",
                                    method:"POST",
                            
                                    success:function(respuesta){
                                    //  alert(respuesta);
                                      $("#menus").css('background','#FFFFFF');
                                      $("#menus").css('color','#177EE5');
                                      $("#tablas").html(respuesta);
                                    },
                                    error:function(xhr, ajaxOptions, thrownError){
                                      alert("Ocurrio un error.");
                                      //alert(xhr.status);
                                      alert(thrownError);
                                      
                                    }
                                  });




                                  for(var i=0; i< $('txt-numero-deudor').val();i++){
                                    alert("llegue");
                                      $('#slc-cargada-'+i).on('change',function(){
                                        var parametros = "slc-cargada-"+i+$('#slc-cargada-'+i).val()+"&txt-numero-deudor="+$('txt-numero-deudor').val();
                                        alert(parametros);
                                        $.ajax({
                                          url: "ajax/procesar.php?accion=21",
                                          method: "POST",
                                          data: parametros,
                                          success: function(resultado){

                                            $('#div-subCuentas-'+i).html(resultado);

                                          }, error: function(){

                                          } 

                                        });
                                      });
                                  }
//ACCIONES AL DAR CLICK
      $("#btn-siguiente").click(function(e){
        e.preventDefault();

              if($("#txt-numero-acreditada").val()!="" && $("#txt-numero-deudor").val()!=""){

                              var parametros= "txt-numero-acreditada="+$("#txt-numero-acreditada").val()+"&txt-numero-deudor="+$("#txt-numero-deudor").val();

                                  $.ajax({
                                    url:"ajax/procesar.php?accion=19",
                                    method:"POST",
                                    data:parametros,
                                    success:function(respuesta){
                                      $('#btn-siguiente').css('display','none');
                                      $('#btn-guardar').css('display','inline');

                                     $("#div-camposVacios").css('display','none');
                                      $("#cuerpo-modal").html(respuesta);

                                    },
                                    error:function(xhr, ajaxOptions, thrownError){
                                      alert("Ocurrio un error.");
                                      //alert(xhr.status);
                                      alert(thrownError);
                                      
                                    }
                                  });

                      }else{
                        $("#div-camposVacios").html("Hay Campos Vacios");
                        $("#div-camposVacios").css('display','inline');

                      }

       
        });





      $("#vista1").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=7",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
           $("#menus").css('background','#FFFFFF');
            $("#menus").css('color','#177EE5');
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });

      $("#btn-guardar").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=20",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
           // $("#menus").css('background','#FFFFFF');
            // $("#menus").css('color','#177EE5');
            $("#cuerpo-modal").html(respuesta);

            $('#btn-guardar').css('display','none');
            $('#btn-siguiente').css('display','inline');
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });




   
      

      }); 




</script>
   

</body>
<script>
  $(document).ready(function(){
    $("#btn-guardar").click(function(){
      var parametros = "txt-fecha=" + $("#txt-fecha").val() + "&" + "txt-partida=" + $("#txt-partida").val() + "&" + "txt-descripcion=" + $("#txt-descripcion").val() + "&" + "chk-subcuentas=" + $("#chk-subcuentas").val() + "&" + "txt-cuenta-cargada=" + $("#txt-cuenta-cargada").val() + "&" + "txt-debe=" + $("#txt-debe").val() + "&" + "txt-cuenta-acreditada=" + $("#txt-cuenta-acreditada").val()+ "&" + "txt-haber=" + $("#txt-haber").val();
      $.ajax({
        url:"ajax/procesar_diario.php",
        method:"POST",
        data: parametros,
        success:function(respuesta){
          $("#btn-guardar").button("reset");
          $("#div-respuesta").html(respuesta)
        },
        error:function(){
          alert("Error");
        }
      });
    });
  });
</script>
</html>
