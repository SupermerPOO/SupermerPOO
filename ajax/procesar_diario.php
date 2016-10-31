  <?php
      if(isset($_POST["btn-guardar"])){
        
        if (isset($_POST["txt-fecha"]))
          echo "Fecha: ". $_POST["txt-fecha"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_POST["txt-partida"]))
          echo "Partida: ". $_POST["txt-partida"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_POST["txt-descripcion"]))
          echo "Descripcion: ". $_POST["txt-descripcion"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_POST["chk-subcuentas"]))
          echo "Subcuenta: ". $_POST["chk-subcuentas"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_POST["txt-cuenta-cargada"]))
          echo "Cuenta Cargada: ". $_POST["txt-cuenta-cargada"]."<br>";
        else 
          echo "Campo vacio<br>";
        
        if (isset($_POST["txt-debe"]))
          echo "Debe: ". $_POST["txt-debe"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_POST["txt-cuenta-acreditada"]))
          echo "Cuenta Acreditada: ". $_POST["txt-cuenta-acreditada"]."<br>";
        else 
          echo "Campo vacio<br>";
        if (isset($_POST["txt-haber"]))
          echo "Haber: ". $_POST["txt-haber"]."<br>";
        else 
          echo "Campo vacio<br>";
      }    
  
 
    ?>