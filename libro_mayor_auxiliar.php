

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>LIBRO MAYOR AUXILIAR</title>
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
 <strong>LIBRO MAYOR AUXILIAR </strong>
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
      </div>
    </nav> 


 
 
  </div> 
</header>
<header>
</header>
<hr>
<body>


<table class="contenedor">
<div >

<tr style="margin: 50px 50px 50px 50px">
    <td >
    <div style="margin: 50px 50px 50px 50px">


    <strong>LISTA DE CUENTAS</strong><br>
    <table>
        <tr>
        <td> Banco:</td>
        <td>
              <select name="" id="slc-subcuenta1" >
               
                 <option id="op-op11">FICOHSA S.A.</option>

               </select><br>
        </td>
        </tr>
        <tr>
        <td>   Proveedores:</td>
        <td>
               <select name="" id="slc-subcuenta2">
         <option id="op-op21">FERRETERIA EL TITO S. de R. L.</option>
         <option id="op-op22">UTILES DE HONDURAS S.A.</option>
         <option id="op-op23">DISTRIBUIDORA DINAN S. de. R. L.</option>
       </select>
        </td>
        </tr>
    </table>
      
     
    
  
     



</div>

    </td>
      <td>
        <div style="margin: 50px 50px 50px 50px">
        <table class="table table-responsive" id='tablas'></table>
        </div>
      </td>
</tr>
</div>

</table>

<script type="text/javascript">
$(document).ready(function(){
  //INICIO DEL FORMULARIO
  $.ajax({
          url:"ajax/procesar.php?accion=15",
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
      $("#op-op11").click(function(e){
        e.preventDefault();

        $.ajax({
          url:"ajax/procesar.php?accion=15",
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
      $("#op-op21").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=16",
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
      $("#op-op22").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=17",
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
      $("#op-op23").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=18",
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
