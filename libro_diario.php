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
    <div id="menus"> 

      <ul class="nav navbar-nav" id=lista> 

 
        <li id="pes1"> 
          <a href="#" data-toggle="modal" data-target="#myModal">Agregar Partida</a>
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Agregando registro</h4>
                  </div>
                  <div class="modal-body">
                    <p><div type="text" id="txt-fecha">Fecha:<input type="text" name="txt-fecha" placeholder="15/15/15" class="form-control"></div></p>
                    <p><div type="text" id="txt-partida">Nº PDA: <?php /* El numero de partida es autoincremental, ese no lo puede tocar uno solo, hay que dejarlo que se pueda extraer de la base de daos pero que la persona no pueda modificarlo*/?><input disabled="disabled" type="text" name="txt-partida" placeholder="" class="form-control"></div></p>
                    <p><div type="text" id="txt-descripcion">Descripcion:<input type="text" name="txt-descripcion" placeholder="" class="form-control"></div></p>
                    <p><div>Subcuenta:<br><label><input type="checkbox" name="chk-subcuentas" value="FICOHSA S.A.">FICOHSA S.A.</label></div>
                    <label><input type="checkbox" name="chk-subcuentas" value="FERRETERIA EL TITO S.A">FERRETERIA EL TITO S.A</label><br>
                    <label><input type="checkbox" name="chk-subcuentas" value="UTILES DE HONDURAS S.A">UTILES DE HONDURAS S.A</label>
                    <label><input type="checkbox" name="chk-subcuentas" value="DISTRIBUIDORA DINAN S. de R. L.">DISTRIBUIDORA DINAN S. de R. L.</label>
                    <p><div type="text" id="txt-cuenta-cargada">Cuenta Cargada:<select name="" id="slc-cuenta-cargada" class="form-control"><option value="Bancos">Bancos</option><option value="Proveedores">Proveedores</option></select></div></p>
                    <p><div type="text" id="txt-debe">Debe:<input type="text" name="txt-debe"></div></p>
                    <p><div type="text" id="txt-cuenta-cargada">Cuenta Acreditada:<select name="" id="slc-cuenta-acreditada" class="form-control"><option value="Bancos">Bancos</option><option value="Proveedores">Proveedores</option></select></div></p>
                    <p><div type="text" id="txt-haber">Haber:<input type="text" name="txt-haber"></div></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </li> 
        <li id="pes2"> 
          <a href="" id="vistal">Vista de Registro</a> 
        </li> 
        <li>
          <a href="index.php">Cerrar Sesión</a> 
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
      </div>
    </nav> 

<div class="alert alert-success" role="alert">
    <?php
      if(isset($_GET["btn-guardar"])){
        
        if (isset($_GET["txt-fecha"]))
          echo "Fecha: ". $_GET["txt-fecha"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_GET["txt-partida"]))
          echo "Partida: ". $_GET["txt-partida"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_GET["txt-descripcion"]))
          echo "Descripcion: ". $_GET["txt-descripcion"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_GET["chk-subcuentas"]))
          echo "Subcuenta: ". $_GET["chk-subcuentas"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_GET["txt-cuenta-cargada"]))
          echo "Cuenta Cargada: ". $_GET["txt-cuenta-cargada"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_GET["txt-debe"]))
          echo "Debe: ". $_GET["txt-debe"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_GET["txt-cuenta-acreditada"]))
          echo "Cuenta Acreditada: ". $_GET["txt-cuenta-acreditada"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_GET["txt-haber"]))
          echo "Haber: ". $_GET["txt-haber"]."<br>";
        else 
          echo "Campo vacio<br>";
      }     
    ?>
  </div>

 
 
  </div> 
</header>
<header>
</header>
<hr>
<body>




</div>
<script type="text/javascript">
$(document).ready(function(){
  //INICIO DEL FORMULARIO
  $.ajax({
          url:"ajax/procesar.php?accion=6",
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
//ACCIONES AL DAR CLICK
      $("#Ag-Partida").click(function(e){
        e.preventDefault();

        $.ajax({
          url:"ajax/procesar.php?accion=6",
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
      $("#vista").click(function(e){
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

     /* $("#slc-cuenta").click(function(){
         if ($('#slc-cuenta').val()=='Bancos') {

          <?php /*echo"<br><td>SubCuenta: <select name='slc-subcuenta1' id='slc-subcuenta1'>
          <option>FICOHSA</option>
          <option>BANCATLAN</option>
          <option>BANCO DE OCCIDENTE</option>
          <select></td>";*/
          ?>
        }
    }

         }
      });*/
      

      }); 



</script>
   

</body>
</html>
