<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF8">
  <title>Visitantes</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

    <header>
      <div>
        <img  class="logo" src="img/titulo4.png" align="center" width="500px" height="100px" hspace="450px">
      </div>
      <nav class="menu nav">
        <ul class="barra_superior">     
          <li class="elemento_izquierda active">
            <a href="index.php">Inicio</a>
          </li>
          <li class="elemento_izquierda">
            <a href="vista_sucursales.php">Sucursales</a>
          </li>
          <li class="elemento_izquierda">
            <a href="productos.php">Productos</a>
          </li>
          <li class="elemento_izquierda">
            <a href="#" data-toggle="modal" data-target="#myModal">Contactenos</a>
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document" style="color: black">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Porque nos interesa mejorar para ti</h4>
                    </div>
                      <div class="modal-body">
                        <p>Encuentranos en nuestro Facebook como SupermerPOO o contactanos a nuestro correo supermerPOO@gmail.com
                        </p>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                </div>
              </div>
          </div>
          </li>
          <li class="elemento_izquierda">
            <a href="#" data-toggle="modal" data-target="#myModal2">Acerca de</a>
            <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" style="position: center">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Quienes somos?</h4>
                    </div>
                      <div class="modal-body">
                        <p>Somos una cadena de supermercados en la cual nuestro enfoque es ofrecer a nuestro clientes la mejor calidad de productos al mejor precio, dando una atencion calida, como si estuvieras en casa.
                        </p>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                </div>
              </div>
          </div>
          </li>
          
          <li class="elemento_derecha">
            <a href="registro_usuarios.php">Registrarse</a>
          </li>

          <li class="elemento_derecha">
            <a href="login.php">Iniciar Sesión</a>
          </li>
          </div>
        </ul>
      </nav>
    </header>
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
             <h3>Supermercado POO</h3>
             <h6> © Copyrigth  2016 reservados todos los derechos</h6>
           </div>
         </footer>
       </div>
  </section>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>