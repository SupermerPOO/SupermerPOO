
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Contador</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>

<header class="bs-docs-nav navbar navbar-static-top" id="top">
  <div>
      <img  class="logo img-responsive" src="img/titulo4.png" align="center" width="500px" height="100px" hspace="450px">
    </div> 
  <div class="container"> 
    <div class="navbar-header"> 
      <button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
        
        <img src="img/icono-menu.png" style="width: 25px; height: 25px">
      </button> 
      <a href="menu_contador.php" class="navbar-brand"><label style="color: white; font-family: 'Trebuchet MS'">Inicio</label></a> 
    </div> 
    <nav class="navbar-collapse collapse" id="bs-navbar" aria-expanded="false" style="height: 1px;"> 
      <ul class="nav navbar-nav"> 
        <li> 
          <a href="balance.php">Inventario y Balance</a> 
        </li> 
        <li> 
          <a href="libro_diario.php">Libro Diario</a> 
        </li> 
        <li> 
          <a href="libro_mayor.php">Libro Mayor</a> 
        </li> 
      
        <li> 
          <a href="#" data-toggle='modal' data-target='#myModal'>Crear cuenta</a> 

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
 <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center"><div id="Encabezado">Crear Cuenta</div></h4>
                      </div>
                      <div class="modal-body" style="padding: 50px 300px 50px 180px;" id="cuerpo-modal">
                      
                    
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" id='btn-cemodal' data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" style="display: inline;" name="guardarModal" id="guardarModal">Guardar</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


  <div align="center" id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/animacion1.jpg" alt="Flower" style="width: 900px; height: 550px">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/animacion2.jpg" alt="Flower" style="width: 900px; height: 550px">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/animacion3.jpg" alt="Flower" style="width: 900px; height: 550px">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/animacion4.jpg" alt="Flower" style="width: 900px; height: 550px">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>    

    <section>
        <div id="pie" class="piePagina">  
          <footer class="wrapper">
            <div class="elemento_centrado">
              <h4>Supermercados POO</h4>
              <h6>©Copyrigth 2016, Derechos Reservados</h6>
            </div>
          </footer>
        </div>
    </section>
       
        <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/funciones.js"></script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->



</body>
</html>