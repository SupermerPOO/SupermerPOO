<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF8">
  <title>Registro de Productos</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>

      

    <header>
      <div>
        <img  class="logo img-responsive" src="img/titulo4.png" align="center" width="500px" height="100px" hspace="450px">
      </div>

    <div class="row">
        <div class="col-xs  col-sm  col-md  col-lg">
            <div class="well">

              <div style="padding: 50px 450px 10px 350px">
     
               <table class = "table table-striped table-hover">

                     <tr>
                         <td style="width: 160px">Producto:</td>
                             <td colspan="2">
                                 <input type="text" name="txt-producto" id="txt-producto" placeholder="Ingrese el Producto" class="form-control" style="width: 250px">
                     	       </td>

                 	 </tr>

                   <tr>

                      <td>Marca:</td>
                      <td id='td-marca'>
                                 
                           </td>

                           <td >
                   <button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal">Añadir</a></button>
                             
                           </td>

                   </tr>

     
                 	 <tr>
                         
                          <td>Categoria:</td>  
                          <td id='td-categorias'> 
                           
                          

                            
                          </td>

                          <td> 
                                <button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal2">Añadir</a></button><br>
                            
                          </td>
                   </tr>

                     <tr>
                         <td style="width: 160px">Fecha de Elaboracion:</td>
                             <td colspan="2">
                                 <input type="text" name="txt-elaboracion" id="txt-elaboracion" placeholder="Fecha de Elaboracion" class="form-control" style="width: 250px">
                             </td>

                   </tr>

                     <tr>
                         <td style="width: 160px">Fecha de Expiracion:</td>
                             <td colspan="2">
                                 <input type="text" name="txt-vence" id="txt-vence" placeholder="Fecha de Vencimiento" class="form-control" style="width: 250px">
                             </td>

                   </tr>

                     <tr>
                         <td style="width: 160px">Precio de Venta:</td>
                             <td colspan="2">
                                 <input type="text" name="txt-venta" id="txt-venta" placeholder="Precio de Venta" class="form-control" style="width: 250px">
                             </td>

                   </tr>

                     <tr>
                         <td style="width: 160px">Precio de Compra:</td>
                             <td colspan="2">
                                 <input type="text" name="txt-compra" id="txt-compra" placeholder="Precio de Compra" class="form-control" style="width: 250px">
                             </td>

                   </tr>

 

                   </table>
                   <div id='camposVaciosTabla' style="display: none; color: #BC2F27">Hay campos vacios</div>
                   </div>
          </table>

           <div style="padding: 10px 450px 10px 350px">

             <button type="button" class="btn btn-primary" style="width:150px;
             height: 45px;" data-dismiss="modal" id="btn-registrar1">Registrar</button>
              <a href='menu_administrador.php'><button  id="btn-salir" class="btn-salir">Salir</button></a> 
              


           </div>

          	     
            </div>
        </div>
    </div>
<footer class="wrapper">
         <h4>Supermercados POO</h4>
         <h6>©Copyrigth 2016, Derechos Reservados</h6>
</footer>
</header>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>


<div id="div-respuesta" class="well"></div>





<table class="table table-condensed">
    <tr>
      <td colspan="4" align="right" style="padding-right: 50px">
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center">Registrar Marca</h4>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Marca:</td>
                      <td><input type="text" id="txt-nombre-marca" class="form-control" style="width: 250px" placeholder="Ingrese el Nombre"></td>
                    </tr>
                   
                  </table>
                </div>
              </div>
              <div id="errorCampo" style="display: none; color: color: #BC2F27">El campo esta vacio </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="btn-registroMarca">Guardar</button>
                <button  type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>



        <table class="table table-condensed">
    <tr>
      <td colspan="4" align="right" style="padding-right: 50px">
        <div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center">Registrar Categoria</h4>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Categoria:</td>
                      <td><input type="text" id="txt-nombre-categoria" class="form-control" style="width: 250px" placeholder="Ingrese el Nombre"></td>
                    </tr>
                   
                  </table>
                </div>
              </div>
               <div id="errorCampo1" style="display: none; color: color: #BC2F27">El campo esta vacio</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="btn-registroCategoria">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>  
        </td>
        </tr>
        </table>


        <script type="text/javascript">

                  $(document).ready(function(){

                       $.ajax({

                              url: 'ajax/control_productos.php?accion=3',
                              method: "POST",
                             
                              success: function(resultado){
                               $('#td-marca').html(resultado);

                              },
                              error: function(){

                              }


                      });
                        $.ajax({

                              url: 'ajax/control_productos.php?accion=5',
                              method: "POST",
                             
                              success: function(resultado){
                              $('#td-categorias').html(resultado);

                              },
                              error: function(){

                              }



                            });

            $('#btn-registroMarca').click(function(e){
                e.preventDefault();
                 $('#errorCampo').css('display', 'none');

                if($('#txt-nombre-marca').val()!='' ){

                    var parametros = 'Marca='+$('#txt-nombre-marca').val();

                            $.ajax({

                              url: 'ajax/control_productos.php?accion=1',
                              method: "POST",
                              data: parametros,
                              success: function(resultado){
                               
                                $.ajax({

                              url: 'ajax/control_productos.php?accion=3',
                              method: "POST",
                             
                              success: function(resultado){
                              $('#td-marca').html(resultado);

                              },
                              error: function(){

                              }



                            });

                              },
                              error: function(){

                              }



                            });

                }else{
                  $('#errorCampo').css('display', 'inline');


                }
              



              });


              $("#btn-registroCategoria").click(function(e){
                e.preventDefault();
                 $('#errorCampo1').css('display', 'none');

                if($("#txt-nombre-categoria").val()!='' ){

                   var parametro = "Categoria=" + $("#txt-nombre-categoria").val();

                            $.ajax({

                              url: 'ajax/control_productos.php?accion=4',
                              method: "POST",
                              data: parametro,
                              success: function(resultado){
                               
                                $.ajax({

                              url: 'ajax/control_productos.php?accion=5',
                              method: "POST",
                             
                              success: function(resultado){
                              $('#td-categorias').html(resultado);

                              },
                              error: function(){

                              }



                            });

                              },
                              error: function(){

                              }



                            });

                }else{
                  $('#errorCampo1').css('display', 'inline');


                }
              



              });


             $('#btn-registrar1').click(function(e){
                e.preventDefault();
                 $('#camposVaciosTabla').css('display', 'none');

                if($('#txt-producto').val()!='' && 
                  $('#txt-elaboracion').val()!='' &&
                   $('#txt-venta').val()!='' &&
                    $('#txt-vence').val()!='' &&
                     $('#txt-compra').val()!='' && 
                     $('#slc-categoria').val()!='' && 
                     $('#slc-marca').val()!=''){

                  var parametros = 
                  "nombreProducto="+$('#txt-producto').val()+
                  "&elaboracion="+ $('#txt-elaboracion').val()+
                  "&venta="+$('#txt-venta').val()+
                  "&vence="+$('#txt-vence').val()+
                  "&compra="+$('#txt-compra').val()+
                  "&categoria="+$('#slc-categoria').val()+
                  "&marca="+ $('#slc-marca').val();

                            $.ajax({

                              url: 'ajax/control_productos.php?accion=6',
                              method: "POST",
                              data: parametros,
                              success: function(resultado){
                               
                            "nombreProducto="+$('#txt-producto').val('');
                  "&elaboracion="+ $('#txt-elaboracion').val('')+
                  "&venta="+$('#txt-venta').val('')+
                  "&vence="+$('#txt-vence').val('')+
                  "&compra="+$('#txt-compra').val('')+
                  "&categoria="+$('#slc-categoria').val()+
                  "&marca="+ $('#slc-marca').val()



                              },
                              error: function(){

                              }



                            });

                }else{
                  $('#camposVaciosTabla').css('display', 'inline');


                }
              



              });


                 




                  });


        </script>


</body>
</html>


