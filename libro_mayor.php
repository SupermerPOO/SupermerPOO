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


 <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style=" margin: 50px 10px 50px 30px;padding: 10px 10px 10px 10px ; background: #FFFFFF;  box-shadow: 5px 5px 5px black;">

    <div id='div-mayor'>
      
    </div>

  
</div>

<div id='tablas' class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
</div>



<script type="text/javascript">
$(document).ready(function(){
  

   $.ajax({
          url:"ajax/procesar.php?accion=11",
          method:"POST",
  
          success:function(respuesta){
         
          
          
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
       
            alert(thrownError);
            
          }
        }); 


         $.ajax({
          url:"ajax/procesar.php?accion=9",
          method:"POST",
  
          success:function(respuesta){
         
          
            $("#div-mayor").html(respuesta);
          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
       
            alert(thrownError);
            
          }
        }); 
      
  //INICIO DEL FORMULARIO


     $.ajax({
          url:"ajax/procesar.php?accion=8",
          method:"POST",
          data:"codigo_cuenta="+1,
          success:function(respuesta){
         
            
            $("#tablas").html(respuesta);


            $("select[name='slc-cuentas']").change(function(){
            
        var parametros = "codigo_cuenta="+$('select[name="slc-cuentas"]').val();
    
                 $.ajax({
                      url:"ajax/procesar.php?accion=8",
                      method:"POST",
                      data:parametros,
                      success:function(respuesta){
                  
                        
                        $("#tablas").html(respuesta);
                      },
                      error:function(xhr, ajaxOptions, thrownError){
                        alert("Ocurrio un error.");
                     
                        alert(thrownError);
                        
                      }
                    });
     });


          },
          error:function(xhr, ajaxOptions, thrownError){
            alert("Ocurrio un error.");
           
            alert(thrownError);
            
          }
        });
     

      

      }); 


</script>
      

</body>
</html>