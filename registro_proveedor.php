<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Proveedor</title>
  <meta charset="utf-8">
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

       
        <div>

     
             Nombre de Empresa: 
             <select name="slc-empresa" id="slc-empresa" class="select" style="width: 250px">
              <option>Empresa1</option>
              <option>Empresa2</option>
              <option>Empresa3</option>
              </select>

            <button class="btn btn-warning" id="" name=""><a href="#" data-toggle="modal" data-target="#myModal">Añadir</a></button>
                
              

            </div>
     
            <table class = "table table-striped table-hover">
               

              <tr>
                  <td style="width: 200px">Codigo Proveedor:</td>
                    <td>
                      <input type="text" name="txt-proveedor" id="txt-proveedor" placeholder="******" class="select2" style="width: 250px">
                    </td>

              <tr>
                <td>RTN:</td>
                    <td>
                      <input type="text" name="txt-rtn" id="txt-rtn" placeholder="****-****-*****" class="select2" required style="width: 250px">
                    </td>
              

              </tr>

              <tr>
                   <td>Direccion de Empresa:</td>
                    <td>
                        <input type="text" name="txt-direccion" id="txt-direccion" placeholder="Direccion de Empresa" class="select2" required style="width: 250px">
                    </td>
                   
              </tr>
              <tr>
                  <td>Telefono:</td>
                    <td>
                      <input type="text" name="txt-telefono" id="txt-telefono" placeholder="telefono" class="select2" required style="width: 250px">
                    </td>
              </tr>

              <tr>
                <td>Correo Electronico:</td>
                    <td>
                      <input type="text" name="txt-correo" id="txt-correo" placeholder="ejemplocorreo@gmail.com" class="select2" required style="width: 250px">
                    </td>
              </tr>

                    <tr>
                      <td>Registro Sanitario:</td>
                    <td>
                      <input type="text" name="txt-registro" id="txt-registro" placeholder="********" class="select2" required style="width: 250px">
                    </td>
                    </tr>

                    <tr>
                         <td>Fecha de Entrega:</td>
                        <td>
                          <input type="text" name="txt-fecha" id="txt-fecha" placeholder="mes-dia-año" class="select2" required style="width: 250px">
                        </td>
                    </tr>
          </table>
          	 <a href="lista_proveedores.php"><button id="btn-agregar" name="btn-agregar" autocomplete="off">Agregar</button></a>
          	<a href='lista_proveedores.php' >  <button id="btn-salir" class="btn-salir">Salir</button></a>
             <img id="img-carga" src="img/carga.gif" style="display:none;">




          
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
                      <td>Producto Distribuido:</td>
                      <td><input type="text" id="txt-distribuidora" class="form-control" style="width: 250px" placeholder="Ingrese el Productos"></td>
                    </tr>
                    <tr>
                      <td>Fundacion:</td>
                      <td><input type="text" id="txt-fundacion" class="form-control" style="width: 250px" placeholder="Fecha de Fundacion"></td>
                    </tr>
                    <tr>
                      <td>Presidente:</td>
                      <td>
                           <input type="text" id="txt-presidente" class="form-control" style="width: 250px" placeholder="Fecha de Fundacion">
                      </td>
                    </tr>
                    <tr>
                      <td>Oficina de Contacto:</td>
                      <td><input type="text" id="txt-contacto" class="form-control" style="width: 250px" placeholder="Ingrese la oficina Principal"></td>
                    </tr>
                    
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>






</body>
</html>
