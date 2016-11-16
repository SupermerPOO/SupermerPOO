<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>LIBRO MAYOR</title>
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
 <strong>LIBRO MAYOR</strong>
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

 
        <!--<li id="pes1"> 
          <a href="" id="Ag-partida">Agregar Partida</a>
    
        </li> 
        <li id="pes2"> 
          <a href="" id="vistal">Vista de Registro</a> 
        </li> 
        <li>
          <a href="index.php">Cerrar Sesión</a> 
        </li>-->
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
 
    </nav> 


 
 
  </div> 
</header>
<header>
</header>
<hr>
<body>


 <div  clclass="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin: 50px 50px 50px 50px; background: #FFFFFF;  box-shadow: 5px 5px 5px black;">
    <span style="color: #177EE5;"><strong>LISTA DE CUENTAS</strong></span><br>

      <input type='checkbox' name='op1' id="op1"> Banco</input><br>
       <input type='checkbox' name='op2' id="op2"> Caja</input><br>
       <input type='checkbox' name='op3' id="op3"> Acreedores Varios</input><br>
       <input type='checkbox' name='op4' id="op4"> Proveedores</input><br>
       <input type='checkbox' name='op5' id="op5"> Utilidad del Ejercicio</input><br>
       <input type='checkbox' name='op6' id="op6"> Documentos por cobrar</input><br>
       <input type='checkbox' name='op7' id="op7"> Documentos por pagar</input><br>
</div>

<div id='tablas' class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
</div>



<script type="text/javascript">
$(document).ready(function(){
  //INICIO DEL FORMULARIO
  $.ajax({
          url:"ajax/procesar.php?accion=8",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
            
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        });
//ACCIONES AL DAR CLICK
      $("#op1").click(function(e){
        e.preventDefault();

        $.ajax({
          url:"ajax/procesar.php?accion=8",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
            
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        });
        });
      $("#op2").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=9",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });
      $("#op3").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=10",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });
      $("#op4").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=11",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });
      $("#op5").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=12",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });
      $("#op6").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=13",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
            $("#tablas").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
            //alert(xhr.status);
            alert(thrownError);
            
          }
        }); 
      });
      $("#op7").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=14",
          method:"POST",
  
          success:function(respuesta){
          //  alert(respuesta);
          
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