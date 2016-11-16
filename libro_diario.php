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
   

      <ul class="nav navbar-nav" id=lista> 

 
        <li id="pes1"> 
          <a href="#" data-toggle="modal" data-target="#myModal" id="a-Agregar">Agregar Partida</a>
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"> <div  id="cabecera" style="color: ##2C0C19"> Cuantas clases acreditara y cargara?</div></h4>
                      </div>
                      <div id='SUCCESS' style="color:#637231; display: none;padding: 0px 0px 0px 200px;"><strong>Partida Guardada</strong></div>
                     

                          <div class="modal-body" id="cuerpo-modal">
                          <div style="padding: 50px 50px 0px 50px;">
                
                          </div>
                          

                          </div> 
                           <div id='div-camposVacios' align='center' style="color: #D40A18; display: none;padding: 0px 0px 0px 200px"><strong></strong></div>
                          
                           <div class="modal-footer" > <!-- Div botones -->
                           <button type="button" class="btn btn-default" id='btn-cancelar' data-dismiss="modal">Cerrar</button>
                           <!-- <button type="button" id="btn-siguiente" class="btn btn-primary">Siguiente</button> -->
                           <button type="button" style="display: inline" id="btn-guardar" class="btn btn-primary">Guardar</button>  

                        </div> 
                   
   

                       
                                  

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

           
     
        </li> 
        <li id="pes2"> 
          <a href="" id="vista1">Vista de Registro</a> 
        </li> 
        <li>
          <a href="index.php">Cerrar Sesión</a> 
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right"> 
      </ul> 
 
    </nav> 

<div class="alert alert-success" role="alert">
  
  </div>

 
 
  </div> 
</header>
<header>
</header>
<hr>
<body>

<div style="padding: 10px 80px 20px 80px">
  
      <div id="tablas" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >



      </div>
      <div>
     
       
   
      </div>

</div>



<script type="text/javascript">

$(document).ready(function(){
  //INICIO DEL FORMULARIO
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

                            $.ajax({
                                    url:"ajax/procesar.php?accion=19",
                                    method:"POST",
                                 
                                    success:function(respuesta){
                                     $("#cuerpo-modal").html(respuesta);
                                                
                                             
                                      $("#div-camposVacios").css('display','none');
                                      $("#btn-guardar").css('display','inline')
                                      $("#SUCESS").css('display','none');

                                    },
                                      error:function(xhr, ajaxOptions, thrownError){
                                      alert("Ocurrio un error.");
                                      //alert(xhr.status);
                                      alert(thrownError);
                                      
                                    }
                                  });


                    function sumar(uno,dos,tres)


                    { 

                      if(uno=='' && dos==''){

                      var total;
                    total = parseInt(tres);
                    alert("El valor es " + total);
                    return total;

                    }else if(uno=='' && tres==''){
                      var total;
                    total = parseInt(dos);
                    alert("El valor es " + total);
                    return total;
                    }else if (dos=='' && tres==''){
                      var total;
                    total = parseInt(uno);
                    alert("El valor es " + total);
                    return total;
                    }else if(uno==''){
                      var total;
                    total = parseInt(dos)+parseInt(tres);
                    alert("El valor es " + total);
                    return total;
                    }else if (dos==''){
                      var total;
                    total = parseInt(uno)+parseInt(tres);
                    alert("El valor es " + total);
                    return total;
                    }else if (tres==''){
                      var total;
                    total = parseInt(uno)+parseInt(dos);
                    alert("El valor es " + total);
                    return total;
                    }else {
                      var total;
                    total = parseInt(uno)+parseInt(dos)+parseInt(tres);
                    alert("El valor es " + total);
                    return total;
                    }

                    }





 /*function validaFechaDDMMAAAA(fecha){
  var dtCh= "-";
  var minYear=2016;
  var maxYear=2100;
  function isInteger(s){
    var i;
    for (i = 0; i < s.length; i++){
      var c = s.charAt(i);
      if (((c < "0") || (c > "9"))) return false;
    }
    return true;
  }

  function stripCharsInBag(s, bag){
    var i;
    var returnString = "";
    for (i = 0; i < s.length; i++){
      var c = s.charAt(i);
      if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
  }
  function daysInFebruary (year){
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
  }
  function DaysArray(n) {
    for (var i = 1; i <= n; i++) {
      this[i] = 31
      if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
      if (i==2) {this[i] = 29}
    }
    return this
  }
  
  function isDate(dtStr){
    var daysInMonth = DaysArray(12)
    var pos1=dtStr.indexOf(dtCh)
    var pos2=dtStr.indexOf(dtCh,pos1+1)
    var strDay=dtStr.substring(0,pos1)
    var strMonth=dtStr.substring(pos1+1,pos2)
    var strYear=dtStr.substring(pos2+1)
    strYr=strYear
    if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
    if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
    for (var i = 1; i <= 3; i++) {
      if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
    }
    month=parseInt(strMonth)
    day=parseInt(strDay)
    year=parseInt(strYr)
    if (pos1==-1 || pos2==-1){
      return false
    }
    if (strMonth.length<1 || month<1 || month>12){
      return false
    }
    if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
      return false
    }
    if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
      return false
    }
    if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
      return false
    }
    return true
  }
  if(isDate(fecha)){
    return true;
  }else{
    return false;
  }
}

*/
                                  
//ACCIONES AL DAR CLICK
      $("#btn-guardar").click(function(e){
        e.preventDefault();

            if($('#txt-fecha').val()!=''&& $("#txt-descripcion").val()!="" && $("#txt-factura").val()!=''){



                        if($('#txt-cargada-1').val()!=''|| $('#txt-cargada-2').val()!=''|| $('#txt-cargada-3').val()!=''){




                                           if($('#txt-acreditada-1').val()!=''|| $('#txt-acreditada-2').val()!=''|| $('#txt-acreditada-3').val()!=''){

                                    var totalCargadas=  sumar($('input[name="txt-cargada-1"]').val(),$('input[name="txt-cargada-2"]').val(),$('input[name="txt-cargada-3"]').val());
                          var totalAcreditadas= sumar($('input[name="txt-acreditada-1"]').val(),$('input[name="txt-acreditada-2"]').val(),$('input[name="txt-acreditada-3"]').val());
              if(totalAcreditadas==totalCargadas){


                                  var parametros = 
                                  "slc-acreditada-1="+$('select[name="slc-acreditada-1"]').val()+"&txt-acreditada-1="+$('input[name="txt-acreditada-1"]').val()+
                                  "&slc-acreditada-2="+$('select[name="slc-acreditada-2"]').val()+"&txt-acreditada-2="+$('input[name="txt-acreditada-2"]').val()+
                                  "&slc-acreditada-3="+$('select[name="slc-acreditada-3"]').val()+"&txt-acreditada-3="+$('input[name="txt-acreditada-3"]').val()+
                                  "&slc-cargada-1="+$('select[name="slc-cargada-1"]').val()+"&txt-cargada-1="+$('input[name="txt-cargada-1"]').val()+
                                  "&slc-cargada-2="+$('select[name="slc-cargada-2"]').val()+"&txt-cargada-2="+$('input[name="txt-cargada-2"]').val()+
                                  "&slc-cargada-3="+$('select[name="slc-cargada-3"]').val()+"&txt-cargada-3="+$('input[name="txt-cargada-3"]').val()+
                                  "&txt-descripcion="+$('#txt-descripcion').val()+"&txt-fecha="+$('#txt-fecha').val()+"&totalCargadas="+totalCargadas+"&totalAcreditadas="+totalAcreditadas+"&txt-factura="+$("#txt-factura").val();
                                                      alert(parametros);
                                                       $.ajax({

                                                                url:"ajax/procesar.php?accion=21",
                                                                method:"POST",
                                                               data:parametros,
                                                                success:function(respuesta){

                                                                


                                                                $('#cuerpo-modal').html(respuesta);
                                                                 
                                                              $("#btn-guardar").css('display','none');
                                                              $("#div-camposVacios").css('display','none'); 
                                                              $('#Cantidades').css('display','none'); 
                                                              $("#SUCESS").css('display','inline');  
                              

                                                                },
                                                                  error:function(xhr, ajaxOptions, thrownError){
                                                                  alert("Ocurrio un error.");
                                                                  //alert(xhr.status);
                                                                  alert(thrownError);
                                                                  
                                                                }
                                                          });

              }else{
                    $("#div-camposVacios").css('display','none');
                   $("#div-camposVacios").html('LOS CAMPOS ESTAN VACIOS');
                   $('#Cantidades').css('display','inline');
                   


              }
                      
                            
                                  



                                             }else{
                                                       $("#div-camposVacios").css('display','inline');
                                                      $("#div-camposVacios").html('LOS CAMPOS ESTAN VACIOS');
                                                      $('#Cantidades').css('display','none');
                                                     }
            
                       }else{
                               $("#div-camposVacios").css('display','inline');
                               $("#div-camposVacios").html('LOS CAMPOS ESTAN VACIOS');
                                  $('#Cantidades').css('display','none');

                           }
                   
          }else{
           $("#div-camposVacios").css('display','inline');
          $("#div-camposVacios").html('LOS CAMPOS ESTAN VACIOS');
             $('#Cantidades').css('display','none');

          }
       
        });





      $("#vista1").click(function(e){
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

     $("#btn-cancelar").click(function(e){
        e.preventDefault();
        $.ajax({
                                    url:"ajax/procesar.php?accion=19",
                                    method:"POST",
                                 
                                    success:function(respuesta){
                                     $("#cuerpo-modal").html(respuesta);
                                                
                                             
                                      $("#div-camposVacios").css('display','none');
                                      $("#btn-guardar").css('display','inline')
                                      $("#SUCESS").css('display','none');

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
<script>
 /* $(document).ready(function(){
    $("#btn-guardar").click(function(){
      var parametros = "txt-fecha=" + $("#txt-fecha").val() + "&" + "txt-partida=" + $("#txt-partida").val() + "&" + "txt-descripcion=" + $("#txt-descripcion").val() + "&" + "chk-subcuentas=" + $("#chk-subcuentas").val() + "&" + "txt-cuenta-cargada=" + $("#txt-cuenta-cargada").val() + "&" + "txt-debe=" + $("#txt-debe").val() + "&" + "txt-cuenta-acreditada=" + $("#txt-cuenta-acreditada").val()+ "&" + "txt-haber=" + $("#txt-haber").val();
      $.ajax({
        url:"ajax/procesar_diario.php",
        method:"POST",
        data: parametros,
        success:function(respuesta){
          $("#btn-guardar").button("reset");
          $("#div-respuesta").html(respuesta)
        },
        error:function(){
          alert("Error");
        }
      });
    });
  });*/
</script>
</html>
