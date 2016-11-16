
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supermercado POO</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

  </head>
  <body img src="img/flow.jpg" class="img-responsive" alt="Responsive image" style="background-image:url(img/flow.jpg); background-size: cover; background-repeat: no-repeat;">
  
    <div align="right" class="container">
    <img src="img/titulo.png" class="img-responsive" alt="Responsive image" width="550px" height="200px">


        <h2 class="form-signin-heading" align="right" style="color: #5cb85c">Inicie Sesión</h2>
        <input type="text" name="txt-usuario" id="txt-usuario" class="form-control" placeholder="Usuario" required autofocus style="width: 250px"><br>
        <input type="password" name="txt-password" id="txt-password" class="form-control" placeholder="Contraseña" required style="width: 250px"><br>

        <button class="btn btn-lg btn-success" style="width: 120px" id="btn-ingresar">Ingresar</button>
      
    </div> 


    <div id="resultado" style="visibility: hidden"></div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/controlador_login.js"></script>
  </body>
</html>
