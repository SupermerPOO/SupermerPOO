<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF8">
  <title>Registro de Procutos</title>
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
     
               <table class = "table table-striped table-hover">

                     <tr>
                         <td style="width: 160px">Producto:</td>
                             <td>
                                 <input type="text" name="txt-producto1" id="txt-producto1" placeholder="Ingrese el Producto" class="select2" style="width: 250px">
                     	     </td>

                 	 </tr>

                </table>


        <div class="well"> 

     
             Marca: 
             <select name="slc-marca" id="slc-marca" class="select" style="width: 250px">
              <optio>Marca1</option>
              <option>marca2</option>
              <option>Marca3</option>
              </select>

            <button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal">Añadir</a></button>
                
              

          </div>

                   
                 	 <div class="well">
                         Categoria:
                             <select name="slc-categoria" id="slc-categoria" class="select3" style="width: 250px">
                             <option>categoria1</option>
                             <option>categoria2</option>
                             <option>categoria3</option>
                             </select>

                           <button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal2">Añadir</a></button><br>

                   </div>
                                               	 

                 	  <div class="well">
                         Proveedor:
                             
                                      <select name="slc-distribucion" id="slc-distribucion" class="select3" style="width: 250px">
                                      <option>Proveedor1</option>
                                      <option>Proveedor2</option>
                                      <option>Proveedor3</option>
                                      </select>

                                      <button class="btn btn-warning" id="" name=""><a href="registro_proveedor.php">Añadir</a></button>
                             

                 	 </div>

                   <table class = "table table-striped table-hover">


                 	 <tr>
                         <td style="width: 160px">Cantidad:</td>
                             <td>
                                 <input type="text" name="txt-cantidad" id="txt-cantidad" placeholder="Ingrese la Cantidad" class="select2" style="width: 250px" >
                     	     </td>

                 	 </tr>

                 	 <tr>
                         <td style="width: 160px">Codigo:</td>
                             <td>
                                 <input type="text" name="txt-codigo" id="txt-codigo" placeholder="Ingrese el Codigo del Producto" class="select2" style="width: 250px">
                     	     </td>

                 	 </tr>

                   </table>



               

             
               </table>
          	        <button id="btn-registrar" name="btn-registrar" data-loading-text="Registrando..." autocomplete="off">Registrar</button>
          	       <a href='menu_administrador.php'><button  id="btn-salir" class="btn-salir">Salir</button></a> 
                    <img id="img-carga" src="img/carga.gif" style="display:none;">
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
                <h4 class="modal-title" align="center">Registrar Empresa</h4>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Marca:</td>
                      <td><input type="text" id="txt-nombre-marca" class="form-control" style="width: 250px" placeholder="Ingrese el Nombre"></td>
                    </tr>
                    <tr>
                      <td>Descripcion:</td>
                      <td><input type="text" id="txt-descripcion" class="form-control" style="width: 250px" placeholder="Datos de Interes"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Guardar</button>
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
                <h4 class="modal-title" align="center">Registrar Empresa</h4>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-hover" cellpadding="1px" cellspacing="1px">
                    <tr>
                      <td style="width: 30px">Categoria:</td>
                      <td><input type="text" id="txt-nombre-categoria" class="form-control" style="width: 250px" placeholder="Ingrese el Nombre"></td>
                    </tr>
                    <tr>
                      <td>Descripcion:</td>
                      <td><input type="text" id="txt-categoria" class="form-control" style="width: 250px" placeholder="Datos de Interes"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>





       

</body>
</html>


</body>
</html>


