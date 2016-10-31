

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Inventario y Balance</title>
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


<header class="bs-docs-nav navbar navbar-static-top" id="top">

 <div align="center" width="500px" height="100px" hspace="450px">
 <strong style="color: #FFFFFF">INVENTARIO Y BALANCE</strong>
    </div>  
  <div class="container"  > 
    <div class="navbar-header">
   
      <button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
        
       <img src="img/icono-menu.png" style="width: 25px; height: 25px">
      </button> 
     
    </div>
     <a href="menu_contador.php" class="navbar-brand" ><span style="background-color: #22B14C; color:#FFFFFF" class="glyphicon glyphicon-arrow-left"></span></a>
    <nav class="navbar-collapse collapse " id="bs-navbar" aria-expanded="false" style="height: 1px;">
    

      <ul class="nav navbar-nav" id=lista> 

 
        <li id="pes1"> 
          <a href="" id="Ba-Comprobacion">Balanza de Comprobación</a>
    
        </li> 
        <li id="pes2"> 
          <a href="" id="Ba-General">Balance General</a> 
        </li> 
        <li id="pes3"> 
          <a href="" id="Es-Resultado">Estado de Resultado</a> 
        </li> 
        <li id="pes4"> 
          <a href="" id="Ta-Almacen">Tarjeta de Almacen</a> 
        </li> 
        <li id="pes5"> 
          <a href="" id="Pl-Empleados">Planilla de Empleados</a> 
        </li>  
        <li> 
          <a href="index.php">Cerrar Sesión</a> 
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
  
    </nav> 


 
 
  </div> 
</header>

<hr>


<div id="tablas" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



</div>
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
          url:"ajax/procesar.php?accion=1",
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

      $("#Ba-Comprobacion").click(function(e){
        e.preventDefault();

        $.ajax({
          url:"ajax/procesar.php?accion=1",
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
      $("#Ba-General").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=2",
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
       $("#Es-Resultado").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=3",
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
       $("#Ta-Almacen").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=4",
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
        $("#Pl-Empleados").click(function(e){
        e.preventDefault();
        //$("#tablas").html("ESTOY AQUI");
        $.ajax({
          url:"ajax/procesar.php?accion=5",
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

      }); 


</script>
      

</body>
</html>
