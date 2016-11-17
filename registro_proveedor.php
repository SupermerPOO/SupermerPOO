<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Proveedor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script>



 
</head>
<body>



    <header>
      <div>
        <img  class="logo img-responsive" src="img/titulo4.png" align="center" width="500px" height="200px" hspace="450px">



      <div class="row">
        <div class="col-xs  col-sm  col-md  col-lg">
          <div class="well">

       
           <div style="padding: 50px 450px 10px 350px">

          
            <table class = "table table-striped table-hover">
            <tr>
             <td> Nombre de Empresa: </td> 
             <td id='td-empresas'> 
              </td>    
              <td><button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal">Añadir</a></button></td>       

            </tr>
               

              <tr>
                <td>RTN:</td>
                    <td colspan="2">
                      <input type="text" name="txt-rtn" id="txt-rtn" placeholder="****-****-*****" class="form-control" required style="width: 250px">
                    </td>
                    <td></td>
              

              </tr>

              <tr>
                   <td>Direccion de Empresa:</td>
                    <td colspan="2" >
                        <input type="text" name="txt-direccion" id="txt-direccion" placeholder="Direccion de Empresa" class="form-control" required style="width: 250px">
                    </td>
                    <td></td>
                   
              </tr>
              <tr>
                  <td>Telefono:</td>
                    <td colspan="2">
                      <input type="text" name="txt-telefono" id="txt-telefono" placeholder="telefono" class="form-control" required style="width: 250px">
                    </td>
                    <td></td>
              </tr>

              <tr>
                <td>Correo Electronico:</td>
                    <td colspan="2">
                      <input type="text" name="txt-correo" id="txt-correo" placeholder="ejemplocorreo@gmail.com" class="form-control" required style="width: 250px">
                    </td>
                    <td></td>
              </tr>

                    <tr>
                      <td>Registro Sanitario:</td>
                    <td colspan="2">
                      <input type="text" name="txt-registro" id="txt-registro" placeholder="********" class="form-control" required style="width: 250px">
                    </td>
                    <td></td>
                    </tr>

                   
          </table>
            

          
              

            </div>
            <div id='div-error' style="display: none; color: #BC2F27;padding: 10px 450px 10px 350px">Hay campos estan vacios</div>
              
                <div style="padding: 10px 450px 10px 350px">
                  

             <a href="lista_proveedores.php"><button id="btn-agregar" name="btn-agregar" autocomplete="off">Agregar</button></a>
            <a href='lista_proveedores.php' >  <button id="btn-salir" class="btn-salir">Salir</button></a>
             <img id="img-carga" src="img/carga.gif" style="display:none;">

                </div>
     




          
        </div>
      </div>
      </div>
     
    
        
          <footer class="wrapper">
         
            
              <h4>Supermercados POO</h4>
              <h6>©Copyrigth 2016, Derechos Reservados</h6>

    
          </footer>
  </header>



<table class="table table-condensed">
    <tr>
      <td colspan="4" align="right" style="padding-right: 50px">
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center">Registrar Empresa</h4>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Nombre:</td>
                      <td><input type="text" id="txt-nombre-empresa" class="form-control" style="width: 250px" placeholder="Ingrese el Nombre"></td>
                    </tr>
                    <tr>
                      <td>Productos:</td>

                      <td id='td-productos'> 
                    </td>

                    </tr>

                   
                  
                  </table>
                  <div id="errorCampo" style="display: none; color: #BC2F27"> Los campos estan vacios</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" id='guarda-empresa' class="btn btn-success" >Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>

<script type="text/javascript">
  

$(document).ready(function(){


                            $.ajax({

                              url: 'ajax/control_proveedores.php?accion=2',
                              method: "POST",
                             
                              success: function(resultado){
                               $('#td-productos').html(resultado);

                              },
                              error: function(){

                              }



                            });
                             $.ajax({

                              url: 'ajax/control_proveedores.php?accion=3',
                              method: "POST",
                             
                              success: function(resultado){
                               $('#td-empresas').html(resultado);

                              },
                              error: function(){

                              }



                            });





             $("#btn-agregar").click(function(e){
                e.preventDefault();
                 $('#div-error').css('display', 'none');

                if($('#txt-rtn').val()!='' && $('#txt-direccion').val()!='' &&$('#txt-telefono').val()!='' && $('#txt-registro').val()!='' && $('#txt-correo').val()!='' ){

              var parametros= 
              'codigo-empresa='+$('#slc-empresa').val()+ 
              "&rtn="+$('#txt-rtn').val()+
              "&direccion="+$('#txt-direccion').val()+
              "&telefono="+$('#txt-telefono').val()+
              "&registro="+$('#txt-registro').val()+
              "&correo="+$('#txt-correo').val();
              alert(parametros);

                            $.ajax({

                              url: 'ajax/control_proveedores.php?accion=4',
                              method: "POST",
                              data: parametros,
                              success: function(resultado){
                                alert();
                                          $('#txt-rtn').val(resultado);
                                          $('#txt-direccion').val('');
                                          $('#txt-telefono').val('');
                                          $('#txt-registro').val('');
                                          $('#txt-correo').val('');
                                            

                              },
                              error: function(){

                              }



                            });

                }else{
                  $('#div-error').css('display', 'inline');


                }

                 });

              $("#guarda-empresa").click(function(e){
                e.preventDefault();
                 
                if($('#txt-nombre-empresa').val()!='' && $('#txt-producto-dis').val()!=''){
                  $('#errorCampo').css('display', 'none');
                   //$("#guarda-empresa").html();

             

                    var parametros= 'nombre-empresa='+$('#txt-nombre-empresa').val()+'&nombre-producto='+$('#slc-producto').val();

                            $.ajax({

                              url: 'ajax/control_proveedores.php?accion=1',
                              method: "POST",
                              data: parametros,
                              success: function(resultado){
                               
                                $.ajax({

                              url: 'ajax/control_proveedores.php?accion=3',
                              method: "POST",
                             
                              success: function(resultado){
                               $('#td-empresas').html(resultado);

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



});



</script>






</body>
</html>
